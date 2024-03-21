<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeopleController extends Controller
{
    public function index()
    {
        $users = User::where('id', '!=', Auth::id())->paginate(30);
        return view('people.index', compact('users'));
    }

    public function requests()
    {
        return view('people.requests');
    }

    public function friends()
    {
        return view('people.friends');
    }

    public function blocked()
    {
        return view('people.blocked');
    }

    public function addFriend(Request $request)
    {
        $user = User::find($request->user_id);
        if (!$user) {
            return response()->json(['status' => 'error', 'message' => 'User not found']);
        }

        // add friend
        Auth::user()->befriend($user);

        // add follower
        Auth::user()->addFollower($user);

        if ($request->ajax()) {
            return response()->json(['status' => 'success']);
        }

        return back();
    }

    public function unfriend(Request $request)
    {
        $user = User::find($request->user_id);
        if (!$user) {
            return response()->json(['status' => 'error', 'message' => 'User not found']);
        }

        // remove friend
        Auth::user()->unfriend($user);

        if (Auth::user()->isFollowing($user)) {
            Auth::user()->removeFollower($user);
        }

        if ($request->ajax()) {
            return response()->json(['status' => 'success']);
        }

        return back();
    }

    public function acceptFriend(Request $request)
    {
        $user = User::find($request->user_id);
        if (!$user) {
            return response()->json(['status' => 'error', 'message' => 'User not found']);
        }

        // accept friend request
        Auth::user()->acceptFriendRequest($user);

        if ($request->ajax()) {
            return response()->json(['status' => 'success']);
        }

        return back();
    }

    public function rejectFriend(Request $request)
    {
        $user = User::find($request->user_id);
        if (!$user) {
            return response()->json(['status' => 'error', 'message' => 'User not found']);
        }

        // reject friend request
        Auth::user()->denyFriendRequest($user);

        if ($request->ajax()) {
            return response()->json(['status' => 'success']);
        }

        return back();
    }

    public function follow(Request $request)
    {
        $user = User::find($request->user_id);
        if (!$user) {
            return response()->json(['status' => 'error', 'message' => 'User not found']);
        }

        // add follower
        Auth::user()->addFollowing($user);

        if ($request->ajax()) {
            return response()->json(['status' => 'success']);
        }

        return back();
    }

    public function unfollow(Request $request)
    {
        $user = User::find($request->user_id);
        if (!$user) {
            return response()->json(['status' => 'error', 'message' => 'User not found']);
        }

        // remove follower
        Auth::user()->removeFollowing($user);

        if ($request->ajax()) {
            return response()->json(['status' => 'success']);
        }

        return back();
    }
}
