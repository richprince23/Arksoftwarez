<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TeamController extends Controller
{
    public function index()
    {
        $teamMembers = Team::all();

        return view('admin.team', compact('teamMembers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'position' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images/team'), $imageName);

        Team::create([
            'name' => $request->input('name'),
            'position' => $request->input('position'),
            'image' => 'images/team/'.$imageName,
        ]);

        return redirect()->route('admin.team')->with('success', 'Team member added successfully.');
    }

    public function destroy($id)
    {
        $teamMember = Team::findOrFail($id);
        // Delete the associated image if it exists
        if ($teamMember->image) {
            try {
                unlink(public_path($teamMember->image));
                //code...
            } catch (\Throwable $th) {
                //throw $th;
            }
        }

        $teamMember->delete();

        return redirect()->route('admin.team')->with('success', 'Team member deleted successfully.');
    }
}
