<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function aboutUs()
    {
        return view('about-us');
    }

    public function contactUs()
    {
        return view('contact-us');
    }

    public function favorites()
    {
        $user = User::find(auth()->id());

        $favorites = $user->favorites()->paginate(16);
        return view('favorites', compact('favorites'));
    }
}
