<?php

namespace App\Http\Controllers;

use App\Models\Request as StudentRequest;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function index()
    {
        return view('requests.index');
    }

    public function show($slug)
    {
        // $request = Request::with('replies')->where('slug', $slug)->firstOrFail();
        $studentRequest = StudentRequest::where('slug', $slug)->firstOrFail();
        if (!$studentRequest) abort(404);

        // $replies = $request->replies()->where('is_active', true)->paginate(16);

        return view('requests.show')->with('request', $studentRequest);
    }
}
