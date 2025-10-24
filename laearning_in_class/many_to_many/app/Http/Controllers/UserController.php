<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Role;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // সব ইউজার এবং তাদের রোল দেখাবে
    public function index()
    {
        $users = User::with('roles')->get();
        return view('users.index', compact('users'));
    }

    // ইউজারের সাথে রোল অ্যাটাচ করার ফর্ম
    public function create()
    {
        $users = User::all();
        $roles = Role::all();
        return view('users.create', compact('users', 'roles'));
    }

    // ইউজারের সাথে রোল সংযুক্ত করা (attach)
    public function store(Request $request)
    {
        $user = User::find($request->user_id);
        $user->roles()->sync($request->role_ids); // পুরনো role replace করে নতুনগুলো সেট করবে
        return redirect()->route('users.index')->with('success', 'Roles assigned successfully!');
    }
}
