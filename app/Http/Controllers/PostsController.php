<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostsController extends Controller
{
    public function index()
    {
        $data = [];

        if (\Auth::check()) {

            // Get User
            $user = \Auth::user();

            // Get this User's and following User's Posts in Descending Order of Creation
            $posts = $user->feed_posts()->orderBy('created_at', 'desc')->paginate(10);

            $data = [
                'user' => $user,
                'posts' => $posts,
            ];
        }

        // Show in Home View
        return view('home', $data);
    }

    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'content' => 'required|max:255',
        ]);

        // Create Post with Request Value
        $request->user()->posts()->create([
            'content' => $request->content,
        ]);

        // Redirect
        return back();
    }

    public function destroy($id)
    {
        // Get Post with Id
        $post = Post::findOrFail($id);

        // Delete the Post if the Post's User is Authorized User
        if (\Auth::id() === $post->user_id) {
            $post->delete();
        }

        // Redirect
        return back();
    }
}
