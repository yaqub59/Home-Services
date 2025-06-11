<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Institute;
use Illuminate\Support\Facades\Log;
use Yajra\DataTables\DataTables;

class InstituteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $institute = Institute::select(['id', 'name'])
                ->orderBy('name', 'asc')
                ->get();
            return DataTables::of($institute)
                ->addColumn('action', function ($row) {
                    $editUrl = route('admin.institute.edit', $row->id);
                    $deleteUrl = route('admin.institute.destroy', $row->id);
                    $csrf = csrf_token();
                    return '
                    <a href="' . $editUrl . '" class="btn btn-sm btn-primary">Edit</a>
                    <form action="' . $deleteUrl . '" method="POST" style="display:inline-block;" onsubmit="return confirm(\'Are you sure you want to delete this?\');">
                        <input type="hidden" name="_token" value="' . $csrf . '">
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                ';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.institute.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.institute.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        try {
            Institute::create([
                'name' => $request->name,
            ]);

            return redirect()->route('admin.institute')->with('success', 'Institute added successfully.');
        } catch (\Exception $e) {
            Log::error('Institute Store Error: ' . $e->getMessage());
            return redirect()->back()->withInput()->with('error', 'Something went wrong. Please try again.');
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
            $institute = Institute::findOrFail($id);
            return view('admin.institute.edit', compact('institute'));
        } catch (\Exception $e) {
            Log::error('Institute edit failed: ' . $e->getMessage());

            return redirect()->back()->with('error', 'Failed to load institute data. Please try again.');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $institute = Institute::findOrFail($id);
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        try {
            $institute->name = $request->name;
            $institute->save();
            return redirect()->route('admin.institute')->with('success', 'Institute updated successfully.');
        } catch (\Exception $e) {
            Log::error('Institute update error: ' . $e->getMessage());
            return back()->with('error', 'Something went wrong while updating the institute.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $institute = Institute::findOrFail($id);
            $institute->delete();

            return redirect()->back()->with('success', 'Institute deleted successfully.');
        } catch (\Exception $e) {
            Log::error('Institute deletion failed: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to delete institute. Please try again.');
        }
    }
}
