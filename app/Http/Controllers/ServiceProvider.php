<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Requests;
use App\Models\Reviews;
use App\Models\Services;

class ServiceProvider extends Controller
{
    public function Profile(Request $request)
    {
        $user = User::find(auth()->id());
        $user_relations = User::with(['services', 'certificates', 'expertises'])->findOrFail(auth()->id());
        $all_services = Services::all();
        //dd($user_relations);
        return view('service.profile')
            ->with('user', $user)
            ->with('user_relations', $user_relations)
            ->with('all_services', $all_services);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function updateCover(Request $request)
    {
        $request->validate([
            'cover_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $user = auth()->user();
        $path = 'images/cover-images';
        $user->cover_image = FileUpload($request->cover_image, $path); // Note: `cover_image` not `image`
        $user->save();
        return redirect('service-provider/profile')->with('success', 'Cover Image sccessfully created');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function updateAvatar(Request $request)
    {
        try {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $user = auth()->user();
            $path = 'images/avatar';
            $user->image = FileUpload($request->image, $path);
            $user->save();

            return redirect('service-provider/profile')->with('success', 'Image successfully updated');
        } catch (\Exception $e) {
            Log::error('Avatar upload failed: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong while uploading the image.');
        }
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'job_title' => 'nullable|string',
            'location' => 'nullable|string',
            'image' => 'nullable|image|max:2048',

            'services.*.name' => 'required|string',
            'services.*.description' => 'nullable|string',
            'services.*.image' => 'nullable|image',

            'certifications.*.name' => 'required|string',
            'certifications.*.institute' => 'nullable|string',
            'certifications.*.start_date' => 'nullable|date_format:d/m/Y',
            'certifications.*.end_date' => 'nullable|date_format:d/m/Y',
            'certifications.*.description' => 'nullable|string',

            'tags.*.tags' => 'required|string',  // tags validation
        ]);

        try {
            DB::beginTransaction();
            $user = Auth::user();

            if ($request->hasFile('image')) {
                $filename = FileUpload($request->file('image'), 'images/avatar'); // ✅ FIXED
                $user->image = $filename;
            }

            $user->update($request->only('name', 'email', 'job_title', 'location'));

            // Get all deleted service IDs from hidden input (set via JS)
            $deletedIds = $request->input('deleted_services', []);
            if (!empty($deletedIds)) {
                $user->services()->whereIn('id', $deletedIds)->delete();
            }
            // Proceed with update or create
            foreach ($request->services ?? [] as $index => $service) {
                $imagePath = null;

                // Handle dynamic file upload input
                $uploadedImage = $request->file("services.$index.image");

                if ($uploadedImage && $uploadedImage->isValid()) {
                    $imagePath = FileUpload($uploadedImage, 'images/services');
                }

                // If service ID is present => update
                if (!empty($service['id'])) {
                    $existing = $user->services()->find($service['id']);

                    if ($existing) {
                        $existing->update([
                            'name' => $service['name'],
                            'description' => $service['description'] ?? null,
                            'image' => $imagePath ?? $existing->image, // Keep old image if not replaced
                        ]);
                    }
                } else {
                    // New service creation
                    $user->services()->create([
                        'name' => $service['name'],
                        'description' => $service['description'] ?? null,
                        'image' => $imagePath,
                    ]);
                }
            }


            // CERTIFICATES
            $deletedCertIds = $request->input('deleted_certificates', []);

            if (!empty($deletedCertIds)) {
                $user->certificates()->whereIn('id', $deletedCertIds)->delete();
            }

            // Update or create certificates
            foreach ($request->certificates ?? [] as $cert) {
                $startDate = $cert['start_date'] ?? null;
                $endDate = $cert['end_date'] ?? null;

                if (!empty($cert['id'])) {
                    // Update existing certificate
                    $existing = $user->certificates()->find($cert['id']);
                    if ($existing) {
                        $existing->update([
                            'name' => $cert['name'],
                            'institute' => $cert['institute'] ?? null,
                            'start_date' => $startDate ? \Carbon\Carbon::parse($startDate)->format('Y-m-d') : null,
                            'end_date' => $endDate ? \Carbon\Carbon::parse($endDate)->format('Y-m-d') : null,
                            'description' => $cert['description'] ?? null,
                        ]);
                    }
                } else {
                    // Create new certificate
                    $user->certificates()->create([
                        'name' => $cert['name'],
                        'institute' => $cert['institute'] ?? null,
                        'start_date' => $startDate ? \Carbon\Carbon::parse($startDate)->format('Y-m-d') : null,
                        'end_date' => $endDate ? \Carbon\Carbon::parse($endDate)->format('Y-m-d') : null,
                        'description' => $cert['description'] ?? null,
                    ]);
                }
            }
            // EXPERTISE TAGS
            $deletedExpIds = $request->input('deleted_expertises', []);

            // Step 1: Delete removed expertises
            if (!empty($deletedExpIds)) {
                $user->expertises()->whereIn('id', $deletedExpIds)->delete();
            }

            // Step 2: Collect IDs of incoming tags
            $incomingIds = [];
            foreach ($request->tags ?? [] as $tag) {
                // Skip empty or corrupted ones
                if (!empty($tag['id'])) {
                    $existing = $user->expertises()->find($tag['id']);
                    if ($existing) {
                        $existing->update([
                            'tags' => $tag['tags'],
                        ]);
                    }
                } else {
                    // Protect against saving the ID accidentally as tag text
                    if (!is_numeric($tag['tags']) && !empty($tag['tags'])) {
                        $user->expertises()->create([
                            'tags' => $tag['tags'],
                        ]);
                    }
                }
            }
            DB::commit();
            sleep(1);
            return back()->with('success', 'Profile updated successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Profile update error: ' . $e->getMessage());

            return back()->with('error', 'Error: ' . $e->getMessage());
        }
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function ShowReview()
    {
        $requests = Requests::with('employer') // Assuming a relation
            ->where('service_provider_id', auth()->id())
            ->get();
        return view('service.requests.index')
            ->with('requests', $requests);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function updateStatus($id, $status)
    {
        $request = Requests::findOrFail($id);

        if (in_array($status, ['pending', 'accepted', 'completed'])) {
            $request->status = $status;
            $request->save();
        }

        return redirect()->back()->with('success', 'Status updated successfully.');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function showReviews()
    {
        $userId = auth()->id();

        $reviews = Reviews::with('employer')
            ->where('reviewee_id', $userId)
            ->latest()
            ->get();
        return view('service.requests.reviews', compact('reviews'));
    }
}
