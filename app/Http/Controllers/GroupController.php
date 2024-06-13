<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group; // Import the Group class

class GroupController extends Controller
{
    public function index()
    {
        $groups = Group::get();
        return view('group.index', compact('groups'));
    }
    public function create()
    {
        return view('group.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255|string',
            'occupation' => 'required|max:255|string',
            'email' => 'required|max:255|string',
            'phone_number' => 'required',
            'is_active' => 'sometimes'
        ]);

        Group::create([
            'name' => $request->name,
            'occupation' => $request->occupation,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'is_active' => $request->is_active == true ? 1 : 0,
        ]);

        return redirect('groups/create')->with('status', 'Contact Created');
    }

    public function group($id)
    {
        // Find the group by ID
        $group = Group::findOrFail($id);

        // Get the occupation from the group
        $occupation = $group->occupation;

        // Retrieve all users with the same occupation
        $users = Group::where('occupation', $occupation)->get();

        // Return the view with the users
        return view('group.group', compact('users', 'occupation'));
    }

    public function edit(int $id)
    {
        $group = Group::findOrFail($id);
        return view('group.edit', compact('group'));

    }
    public function update(Request $request, int $id)
    {
        $request->validate([
            'name' => 'required|max:255|string',
            'occupation' => 'required|max:255|string',
            'email' => 'required|max:255|string',
            'phone_number' => 'required',
            'is_active' => 'sometimes'
        ]);

        Group::findOrFail($id)->update([
            'name' => $request->name,
            'occupation' => $request->occupation,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'is_active' => $request->is_active == true ? 1 : 0,
        ]);

        return redirect()->back()->with('status', 'Contact Updated');
    }

    public function destroy(int $id)
    {
        $group = Group::findOrFail($id);
        $group->delete();

        return redirect()->back()->with('status', 'Contact Updated');

    }
}
