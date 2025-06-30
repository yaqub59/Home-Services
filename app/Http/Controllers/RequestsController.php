<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Requests;
use App\Models\User;
use App\Models\Reviews;
use App\Models\Expertises;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;

class RequestsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = $request->input('query');
        $serviceId = $request->input('service_id');

        // Get service name from ID (for filtering)
        $selectedService = null;
        if ($serviceId) {
            $selectedService = \App\Models\Services::find($serviceId);
            $query = $selectedService ? $selectedService->name : null;
        }

        $serviceProviders = \App\Models\User::where('type', 2)
            ->when($query, function ($q) use ($query) {
                $q->whereHas('user_services', function ($subQuery) use ($query) {
                    $subQuery->where('name', 'like', '%' . $query . '%');
                });
            })
            ->with(['user_services', 'expertises', 'certificates', 'reviews'])
            ->get()
            ->map(function ($provider) {
                $provider->average_rating = round($provider->reviews->avg('rating'), 1);
                $provider->total_reviews = $provider->reviews->count();
                return $provider;
            });

        $countproviders = $serviceProviders->count();

        return view('employer.requests.index', compact('serviceProviders', 'countproviders', 'selectedService','query'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        try {
            $serviceProvider = User::findOrFail($id);
            return view('employer.requests.create')
                ->with('serviceProvider', $serviceProvider);
        } catch (Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            // Handle the case where the service provider is not found
            // You can redirect, show an error message, or log the error
            return redirect()->back()->with('error', 'Service provider not found.');
        } catch (\Exception $e) {

            Log::error("Error in create method for ID {$id}: " . $e->getMessage());
            return redirect()->back()->with('error', 'An unexpected error occurred. Please try again.');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'service_provider_id' => 'required|exists:users,id',
            'details' => 'required|string',
            'location' => 'required',
        ]);
        try {
            Requests::create([
                'employer_id' => auth()->id(),
                'service_provider_id' => $request->service_provider_id,
                'details' => $request->details,
                'location' => $request->location,
                'status' => 'pending',
            ]);

            return redirect()->route('reviews')->with('success', 'Request sent successfully!');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {

            Log::error("Error storing service request: " . $e->getMessage(), [
                'user_id' => auth()->id(),
                'request_data' => $request->all(),
            ]);

            // Redirect back with a general error message
            return redirect()->back()->with('error', 'Failed to send request. Please try again.')->withInput();
        };
    }

    /**
     * Display the specified resource.
     */
    public function Reviews()
    {
        $requests = Requests::with(['serviceProvider', 'review'])
            ->where('employer_id', auth()->id())
            ->latest()
            ->get();
        //dd($requests->pluck('review'));
        return view('employer.requests.review')
            ->with('requests', $requests);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function StoreReview($id)
    {
        // Check or show form to submit review
        $request = Requests::findOrFail($id);
        return view('employer.requests.store-review', compact('request'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function SubmitReview(Request $request)
    {
        $request->validate([
            'reviewee_id' => 'required|exists:users,id',
            'request_id' => 'required|exists:requests,id',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string|max:1000',
        ]);
        try {
            Reviews::create([
                'request_id' => $request->request_id,
                'reviewee_id' => $request->reviewee_id,
                'reviewer_id' => auth()->id(),
                'rating' => $request->rating,
                'comment' => $request->comment,
            ]);
            return redirect()->route('reviews')->with('success', 'Review submitted successfully!');
        } catch (\Exception $e) {
            Log::error('Review submission failed: ' . $e->getMessage());

            return redirect()->back()->with('error', 'Something went wrong while submitting the review. Please try again.');
        }
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function ProviderDetails($id)
    {
        try {
            $serviceProvider = User::with(['user_services', 'expertises', 'certificates'])->findOrFail($id);
            //dd($serviceProvider);
            return view('employer.requests.provider-details')
                ->with('serviceProvider', $serviceProvider);
        } catch (Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            // Handle the case where the service provider is not found
            // You can redirect, show an error message, or log the error
            return redirect()->back()->with('error', 'Service provider not found.');
        } catch (\Exception $e) {

            Log::error("Error in create method for ID {$id}: " . $e->getMessage());
            return redirect()->back()->with('error', 'An unexpected error occurred. Please try again.');
        }
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function Profile()
    {
        $employer = User::find(auth()->id());
        return view('employer.profile')
            ->with('employer', $employer);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function ProfileUpdate(Request $request)
    {
        try {
            $employer = auth()->user();

            // Validation
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email,' . $employer->id,
                'job_title' => 'nullable|string|max:255',
                'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
                'password' => 'nullable|string|min:6|confirmed',
            ]);

            // Update basic fields
            $employer->name = $request->name;
            $employer->email = $request->email;
            $employer->job_title = $request->job_title;
            $path = 'images/employer';
            if ($request->hasFile('image')) {
                $employer->image = FileUpload($request->image, $path);
            }

            // Handle Password Change
            if ($request->filled('password')) {
                $employer->password = Hash::make($request->password);
            }

            $employer->save();

            return back()->with('success', 'Profile updated successfully!');
        } catch (\Exception $e) {
            return back()->with('error', 'Something went wrong: ' . $e->getMessage());
        }
    }
}
