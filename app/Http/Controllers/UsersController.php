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

    /**
     * Show following users
     *
     * @param  $id  userId
     * @return \Illuminate\Http\Response
     */
    public function followings($id)
    {
        // Get user with userId
        $user = User::findOrFail($id);

        // Get model counts
        $user->loadRelationshipCounts();

        // Get following users list
        $followings = $user->followings()->paginate(10);

        // Show in followings view
        return view('users.followings', [
            'user' => $user,
            'users' => $followings,
        ]);
    }

    /**
     * Show follower users
     *
     * @param  $id  userId
     * @return \Illuminate\Http\Response
     */
    public function followers($id)
    {
        // Get user with userId
        $user = User::findOrFail($id);

        // Get model counts
        $user->loadRelationshipCounts();

        // Get follower users list
        $followers = $user->followers()->paginate(10);

        // Show in followers view
        return view('users.followers', [
            'user' => $user,
            'users' => $followers,
        ]);
    }
}
