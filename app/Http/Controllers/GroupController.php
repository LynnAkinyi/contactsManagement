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
            'description' => 'required|max:255|string',
            'is_active' => 'sometimes'
        ]);

        Group::create([
            'name' => $request->name,
            'description' => $request->description,
            'is_active' => $request->is_active == true ? 1 : 0,
        ]);

        return redirect('groups/create')->with('status', 'Group Created');
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
            'description' => 'required|max:255|string',
            'is_active' => 'sometimes'
        ]);

        Group::findOrFail($id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'is_active' => $request->is_active == true ? 1 : 0,
        ]);

        return redirect()->back()->with('status', 'Group Updated');
    }

    public function destroy(int $id)
    {
        $group = Group::findOrFail($id);
        $group->delete();

        return redirect()->back()->with('status', 'Group Updated');

    }
}
