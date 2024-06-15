<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\UserFollow;

class UserFollowController extends Controller
{
    /**
     * Follow User
     *
     * @param  $id  object userId
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        // This User follow the object User
        \Auth::user()->follow($id);
        // Redirect
        return back();
    }

    /**
     * Unfollow User
     *
     * @param  $id  object userId
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // This User unfollow the object User
        \Auth::user()->unfollow($id);
        // Redirect
        return back();
    }
}
