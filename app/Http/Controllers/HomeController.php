<?php

namespace App\Http\Controllers;

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
}
