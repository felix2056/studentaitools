<?php

namespace App\Http\Controllers;

use App\Models\Newsfeed;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsfeedController extends Controller
{
    public function newsfeed()
    {
        $newsfeed = Newsfeed::latest()->paginate(16);
        return view('newsfeed', compact('newsfeed'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'content' => 'required',
        ]);

        $user = User::find(Auth::id());

        $newsfeed = new Newsfeed();
        $newsfeed->user_id = $user->id;
        $newsfeed->content = $request->content;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $newsfeed->image = $name;
        }

        if (!empty($request->youtube)) {
            $newsfeed->video = $request->youtube;
        }

        if (!empty($request->link)) {
            $newsfeed->link = $request->link;
            $newsfeed->link_title = $request->link_title;
            $newsfeed->link_desc = $request->link_desc;
            $newsfeed->link_img = $request->link_img;
        }

        $newsfeed->save();

        // $newsfeed->tags()->sync($request->tags);

        return redirect()->back();
    }
}
