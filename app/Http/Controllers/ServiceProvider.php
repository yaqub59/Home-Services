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

class ServiceProvider extends Controller
{
    public function Profile(Request $request)
    {
        $user = User::find(auth()->id());
        $user_relations = User::with(['services', 'certificates', 'expertises'])->findOrFail(auth()->id());
        //dd($user_relations);
        return view('service.profile')
            ->with('user', $user)
            ->with('user_relations', $user_relations);
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

            $user->update($request->only('name', 'email', 'job_title'));

            // SERVICES
            // Collect incoming service IDs
            $incomingServiceIds = collect($request->services ?? [])->pluck('id')->filter()->toArray();

            // Delete services which are not in the request (removed by user)
            $user->services()->whereNotIn('id', $incomingServiceIds)->delete();

            foreach ($request->services ?? [] as $service) {
                $imagePath = null;
                // Check if image file uploaded
                if (isset($service['image']) && $service['image'] instanceof \Illuminate\Http\UploadedFile) {
                    $imagePath = FileUpload($service['image'], 'services');
                }

                if (!empty($service['id'])) {
                    // Update existing service
                    $existingService = $user->services()->find($service['id']);
                    if ($existingService) {
                        $existingService->name = $service['name'];
                        $existingService->description = $service['description'] ?? null;

                        // Only update image if new image uploaded, else keep old image
                        if ($imagePath) {
                            // Optionally delete old image file here if needed
                            $existingService->image = $imagePath;
                        }
                        $existingService->save();
                    }
                } else {
                    // Create new service
                    $user->services()->create([
                        'name' => $service['name'],
                        'description' => $service['description'] ?? null,
                        'image' => $imagePath,
                    ]);
                }
            }

            // CERTIFICATES
            $user->certificates()->delete();

            foreach ($request->certificates ?? [] as $cert) {
                $startDate = $cert['start_date'] ?? null;
                $endDate = $cert['end_date'] ?? null;

                $user->certificates()->create([
                    'name' => $cert['name'],
                    'institute' => $cert['institute'] ?? null,
                    'start_date' => $startDate ? \Carbon\Carbon::parse($startDate)->format('Y-m-d') : null,
                    'end_date' => $endDate ? \Carbon\Carbon::parse($endDate)->format('Y-m-d') : null,
                    'description' => $cert['description'] ?? null,
                ]);
            }



            // EXPERTISE TAGS
            $user->expertises()->delete();
            foreach ($request->tags ?? [] as $tag) {
                if (!empty($tag['tags'])) {
                    $user->expertises()->create([
                        'tags' => $tag['tags'],
                    ]);
                }
            }

            DB::commit();

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
    public function showReviews(){
        $userId = auth()->id();

    $reviews = Reviews::with('employer')
        ->where('reviewee_id', $userId)
        ->latest()
        ->get();
    return view('service.requests.reviews', compact('reviews'));
    }
}
