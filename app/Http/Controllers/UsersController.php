<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UsersController extends Controller
{
    public function index()
    {
        // Get User Id in Descending Order
        $users = User::orderBy('id', 'desc')->paginate(10);

        // Show in User Index View
        return view('users.index', [
            'users' => $users,
        ]);
    }

    public function show($id)
    {
        // Get User with Id
        $user = User::findOrFail($id);

        // Load Model Counts
        $user->loadRelationshipCounts();

        // Get User's Posts in Descending Order of Crate
        $posts = $user->posts()->orderBy('created_at', 'desc')->paginate(10);

        // Show in User Detail View
        return view('users.show', [
            'user' => $user,
            'posts' => $posts,
        ]);
    }
}
