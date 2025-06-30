<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use App\Models\Setting;
use App\Models\User;
use Yajra\DataTables\DataTables;

class AdminController extends Controller
{
    public function Profile()
    {
        return view('admin.profile');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function Setting()
    {
        $setting = Setting::first();
        return view('admin.setting')
            ->with('setting', $setting);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function updateInfo(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'password' => 'nullable|min:6|confirmed',
        ]);
        try {
            $path = 'images/admin/images';
            $user->name = $request->name;
            $user->email = $request->email;
            if ($request->filled('password')) {
                $user->password = Hash::make($request->password);
            }
            if ($request->hasFile('image')) {
                $user->image = FileUpload($request->image, $path);
            }
            $user->save();
            return back()->with('success', 'Profile updated successfully.');
        } catch (\Exception $e) {
            Log::error('Profile updated error: ' . $e->getMessage());
            return back()->with('error', 'Something went wrong while updating the profile. Please try again.');
        }
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function UpdateSetting(Request $request)
    {
        $request->validate([
            'site_name'     => 'required|string|max:255',
            'site_logo'     => 'nullable|image|mimes:png,jpg,jpeg,svg|max:2048',
            'site_favicon'  => 'nullable|image|mimes:ico,png,jpg,jpeg|max:1024',
        ]);
        try {
            $setting = Setting::first();

            $setting->site_name = $request->site_name;

            $path = 'images/settings';

            if ($request->hasFile('site_logo')) {
                $setting->site_logo = FileUpload($request->file('site_logo'), $path);
            }

            if ($request->hasFile('site_favicon')) {
                $setting->site_favicon = FileUpload($request->file('site_favicon'), $path);
            }

            $setting->save();

            return back()->with('success', 'Website settings updated successfully.');
        } catch (\Exception $e) {
            Log::error('Settings update error: ' . $e->getMessage());
            return back()->with('error', 'Something went wrong while updating settings.');
        }
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function Users(Request $request)
    {
        if ($request->ajax()) {
            $users = User::select(['id', 'name', 'email', 'image', 'phone_no', 'cnic', 'type', 'status', 'created_at'])
                ->orderBy('name', 'asc')
                ->get();
            return DataTables::of($users)
                ->addColumn('image', function ($user) {
                    $path = 'images/admin/images';
                    $default = asset('images/default.png');
                    $imagePath = public_path($path . '/' . $user->image);

                    $url = (!empty($user->image) && file_exists($imagePath))
                        ? asset($path . '/' . $user->image)
                        : $default;

                    return '<img src="' . $url . '" alt="User Image" width="50" height="50" class="rounded-circle">';
                })

                ->addColumn('action', function ($user) {
                    $buttons = '<a href="' . route('admin.users.edit', $user->id) . '" class="btn btn-sm btn-primary me-1">Edit</a>';
                    if ($user->id != auth()->id()) {
                        $buttons .= '
                    <form action="' . route('admin.users.destroy', $user->id) . '" method="POST" style="display:inline-block;" onsubmit="return confirm(\'Are you sure?\');">
                        ' . csrf_field() . '
                        ' . method_field('DELETE') . '
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>';
                    }

                    return $buttons;
                })
                ->addColumn('type', function ($user) {
                    $type = strtolower($user->type); // will be "user", "admin", or "service"
                    switch ($type) {
                        case 'admin':
                            return '<span class="badge bg-success">Admin</span>';
                        case 'user':
                            return '<span class="badge bg-info">Employer</span>';
                        case 'service':
                            return '<span class="badge bg-warning text-dark">Service Provider</span>';
                        default:
                            return '<span class="badge bg-secondary">Unknown</span>';
                    }
                })
                ->addColumn('status', function ($user) {
                    if ($user->id == auth()->id()) {
                        return '';
                    }
                    $toggleUrl = route('admin.users.status', $user->id);
                    $label = $user->status == 1 ? 'Active' : 'Inactive';
                    $class = $user->status == 1 ? 'bg-success' : 'bg-danger';

                    return '<a href="javascript:void(0);" class="badge ' . $class . ' toggle-status" data-id="' . $user->id . '" data-url="' . $toggleUrl . '">' . $label . '</a>';
                })
                ->rawColumns(['image', 'action', 'status', 'type'])
                ->make(true);
        }
        return view('admin.users.index');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function UsersCreate()
    {
        return view('admin.users.create');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function UsersStore(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);
        try {
            $path = 'images/admin/images';
            $imagePath = null;
            if ($request->hasFile('image')) {
                $imagePath = FileUpload($request->image, $path);
            }
            User::create([
                'name'     => $request->name,
                'email'    => $request->email,
                'password' => Hash::make($request->password),
                'image'    => $imagePath,
                'type'    => 1,
            ]);
            return redirect()->route('admin.users')->with('success', 'User Created successfully.');
        } catch (\Exception $e) {
            Log::error('Admin store error: ' . $e->getMessage());
            return back()->with('error', 'Something went wrong while creating the user. Please try again.');
        }
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function UsersEdit(Request $request, $id)
    {
        try {
            $user = User::findOrFail($id);
            return view('admin.users.edit', compact('user'));
        } catch (\Exception $e) {
            Log::error('User edit failed: ' . $e->getMessage());

            return redirect()->back()->with('error', 'Failed to load user data. Please try again.');
        }
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function UsersUpdate(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:6',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'phone_no' => ['required', 'regex:/^\+92[3][0-9]{9}$/'],  
            'cnic' => ['required', 'regex:/^\d{5}-\d{7}-\d{1}$/'],      
        ]);

        try {
            $imagePath = $user->image;
            if ($request->hasFile('image')) {
                $path = 'images/admin/images';
                if ($user->image && file_exists(public_path($user->image))) {
                    unlink(public_path($user->image));
                }
                $imagePath = FileUpload($request->file('image'), $path);
            }
            $user->name = $request->name;
            $user->email = $request->email;
            if ($request->filled('password')) {
                $user->password = Hash::make($request->password);
            }
            $user->image = $imagePath;
            $user->phone_no=$request->phone_no;
            $user->cnic=$request->cnic;
            $user->save();
            return redirect()->route('admin.users')->with('success', 'User updated successfully.');
        } catch (\Exception $e) {
            Log::error('Admin user update error: ' . $e->getMessage());
            return back()->with('error', 'Something went wrong while updating the user.');
        }
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function UsersDelete($id)
    {
        try {
            $user = User::findOrFail($id);
            if ($user->image && file_exists(public_path($user->image))) {
                unlink(public_path($user->image));
            }
            $user->delete();

            return redirect()->back()->with('success', 'User deleted successfully.');
        } catch (\Exception $e) {
            Log::error('User deletion failed: ' . $e->getMessage());

            return redirect()->back()->with('error', 'Failed to delete user. Please try again.');
        }
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function status($id)
    {

        $user = User::findOrFail($id);
        $user->status = $user->status == 1 ? 0 : 1;
        $user->save();

        return response()->json([
            'success' => true,
            'status' => $user->status,
            'message' => 'Status successfully updated.'
        ]);
    }
}
