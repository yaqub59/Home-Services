<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;
use Illuminate\Support\Facades\Log;
use Yajra\DataTables\DataTables;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $users = Services::select(['id', 'name', 'description', 'image'])
                ->orderBy('name', 'asc')
                ->get();
            return DataTables::of($users)
                ->addColumn('image', function ($user) {
                    $path = 'images/admin/services';
                    $default = asset('images/default.png');
                    $imagePath = public_path($path . '/' . $user->image);

                    $url = (!empty($user->image) && file_exists($imagePath))
                        ? asset($path . '/' . $user->image)
                        : $default;

                    return '<img src="' . $url . '" alt="User Image" width="50" height="50" class="rounded-circle">';
                })
                ->addColumn('action', function ($user) {
                    $buttons = '<a href="' . route('admin.services.edit', $user->id) . '" class="btn btn-sm btn-primary me-1">Edit</a>';
                    $buttons .= '
                    <form action="' . route('admin.services.destroy', $user->id) . '" method="POST" style="display:inline-block;" onsubmit="return confirm(\'Are you sure?\');">
                        ' . csrf_field() . '
                        ' . method_field('DELETE') . '
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>';
                    return $buttons;
                })
                ->rawColumns(['image', 'action'])
                ->make(true);
        }
        return view('admin.services.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
        ], [
            'image.required' => 'Please upload an image.',
            'image.image' => 'Only image files are allowed.',
            'name.required' => 'Title is required.',
            'description.required' => 'Description is required.',
        ]);
        try {
            $path = 'images/admin/services';
            $user = new Services;
            $user->name = $request->name;
            $user->description = $request->description;
            if ($request->hasFile('image')) {
                $user->image = FileUpload($request->image, $path);
            }
            $user->save();
            return redirect()->route('admin.services')->with('success', 'Services Created successfully.');
        } catch (\Exception $e) {
            Log::error('Services Created: ' . $e->getMessage());
            return back()->with('error', 'Something went wrong while Services Created. Please try again.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            $services = Services::findOrFail($id);
            return view('admin.services.edit', compact('services'));
        } catch (\Exception $e) {
            Log::error('services edit failed: ' . $e->getMessage());

            return redirect()->back()->with('error', 'Failed to load services data. Please try again.');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        try {
            $path = 'images/admin/services';
            $service = Services::findOrFail($id);

            $service->name = $request->name;
            $service->description = $request->description;

            if ($request->hasFile('image')) {
                // Optionally delete old image
                $oldPath = public_path($path . '/' . $service->image);
                if (file_exists($oldPath)) {
                    unlink($oldPath);
                }

                // Upload new one
                $service->image = FileUpload($request->image, $path);
            }

            $service->save();

            return redirect()->route('admin.services')->with('success', 'Service updated successfully.');
        } catch (\Exception $e) {
            Log::error('Service Update Failed: ' . $e->getMessage());
            return back()->with('error', 'Something went wrong while updating. Please try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $user = Services::findOrFail($id);
            $user->delete();

            return redirect()->back()->with('success', 'Services deleted successfully.');
        } catch (\Exception $e) {
            Log::error('Services deletion failed: ' . $e->getMessage());

            return redirect()->back()->with('error', 'Failed to delete Services. Please try again.');
        }
    }
}
