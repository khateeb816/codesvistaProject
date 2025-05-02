<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\RolePermission;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $roles = RolePermission::all();
        return view('roles.index', compact('roles'));
    }

    public function add()
    {
        return view('roles.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'role' => 'required|string|max:255',
        ]);
        RolePermission::create([
            'role_name' => $request->role,
        ]);

        return redirect()->route('roles')->with('success', 'Role created successfully');
    }

    public function edit($id)
    {
        $role = RolePermission::findOrFail($id);
        return view('roles.edit', compact('role'));
    }

    public function update(Request $request, $id)
    {
        $role = RolePermission::findOrFail($id);

        $request->validate([
            'role' => 'required|string|max:255',
        ]);


        $role->update([
            'role_name' => $request->role,
        ]);

        return redirect()->route('roles')->with('success', 'Role updated successfully');
    }

    public function destroy($id)
    {
        $role = RolePermission::findOrFail($id);
        $role->delete();

        return redirect()->route('roles')->with('success', 'Role deleted successfully');
    }
}
