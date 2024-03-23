<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show($username)
    {
        $user = User::where('username', $username)->first();
        if (!$user) return abort(404);

        return view('profile.show', compact('user'));
    }

    public function about($username)
    {
        $user = User::where('username', $username)->first();
        if (!$user) return abort(404);

        return view('profile.about', compact('user'));
    }

    public function photos($username)
    {
        $user = User::where('username', $username)->first();
        if (!$user) return abort(404);

        return view('profile.photos', compact('user'));
    }

    public function connections($username)
    {
        $user = User::where('username', $username)->first();
        if (!$user) return abort(404);

        return view('profile.connections', compact('user'));
    }

    public function aiSaves($username)
    {
        $user = User::where('username', $username)->first();
        if (!$user) return abort(404);

        return view('profile.ai-saves', compact('user'));
    }

    public function events($username)
    {
        $user = User::where('username', $username)->first();
        if (!$user) return abort(404);

        return view('profile.events', compact('user'));
    }
}
