<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        $roles = Role::all();
        return view('admin.user.index', compact('users', 'roles'));
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|string|min:6',
            'id_role' => 'nullable|exists:roles,id', // Assuming 'roles' is the table name
        ]);

        // Create a new user
        $user = User::create($request->all());

        // Redirect to the index page or show a success message
        return redirect()->route('user')->with('success', 'User created successfully');
    }

    public function update(Request $request, User $user)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'nullable|string|min:6',
            'id_role' => 'nullable|exists:roles,id', // Assuming 'roles' is the table name
        ]);

        // Check if the email has been modified
    if ($request->email !== $user->email) {
        // If modified, validate uniqueness
        $request->validate([
            'email' => 'unique:users',
        ]);
    }

    // Update the user
    $user->update($request->all());

    // Redirect with success message
    return redirect()->route('user')->with('success', 'User updated successfully');

        // Update the user
        $user->update($request->all());

        // Redirect to the index page or show a success message
        return redirect()->route('user', ['user' => $user->id])->with('success', 'User updated successfully');
    }

    public function destroy(User $user)
    {
        // Delete the user
        $user->delete();

        // Redirect to the index page or show a success message
        return redirect()->route('user')->with('success', 'User deleted successfully');
    }
}
