<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\UserComment;
use App\Notifications\UserPosted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsfeedController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(16);
        return view('newsfeed', compact('posts'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'content' => 'required',
        ]);

        $user = User::find(Auth::id());

        $post = new Post();
        $post->user_id = $user->id;
        $post->content = $request->content;
        $post->images = '[]';

        // get images[]
        if ($request->hasFile('images')) {
            $images = [];
            foreach ($request->file('images') as $image) {
                $path = $image->store('images', 'public');
                $images[] = '/storage/' . $path;
            }
            $post->images = json_encode($images);
        }

        if (!empty($request->youtube)) {
            $post->video = $request->youtube;
        }

        if (!empty($request->link)) {
            $post->link = $request->link;
            $post->link_title = $request->link_title;
            $post->link_desc = $request->link_desc;
            $post->link_img = $request->link_img;
        }

        $post->save();

        // $post->tags()->sync($request->tags);

        // notify followers
        $user->followers->each(function ($follower) use ($post) {
            $follower->notify(new UserPosted($post));
        });

        return redirect()->back();
    }

    public function likeToggle(Request $request, $post)
    {
        $user = User::find(Auth::id());
        $post = Post::find($post);

        if ($post->likes->contains('user_id', $user->id)) {
            $post->likes()->where('user_id', $user->id)->delete();
        } else {
            $post->likes()->create(['user_id' => $user->id]);
        }

        if ($request->ajax()) {
            return response()->json([
                'status' => 'success',
                'message' => 'Like toggled.',
            ]);
        }

        return redirect()->back();
    }

    public function comment(Request $request, $post)
    {
        $request->validate([
            'comment' => 'required',
        ]);

        $user = User::find(Auth::id());
        $post = Post::find($post);
        if (!$post) {
            if ($request->ajax()) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Post not found.',
                ]);
            }

            return redirect()->back();
        }

        $comment = new UserComment();
        $comment->user_id = $user->id;
        $comment->post_id = $post->id;
        $comment->body = $request->comment;
        $comment->is_approved = true;
        $comment->save();

        // $post->comments()->create([
        //     'user_id' => $user->id,
        //     'body' => $request->comment,
        //     'is_approved' => true
        // ]);

        if ($request->ajax()) {
            return response()->json([
                'status' => 'success',
                'message' => 'Comment created',
                'comment' => $comment->load('user'),
            ]);
        }

        return redirect()->back();
    }

    public function commentGif(Request $request, $post)
    {
        $request->validate([
            'gif' => 'required|file|mimes:gif|max:8192',
        ]);

        $user = User::find(Auth::id());
        $post = Post::find($post);
        if (!$post) {
            if ($request->ajax()) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Post not found.',
                ]);
            }

            return redirect()->back();
        }

        $path = $request->file('gif')->store('gifs', 'public');

        $comment = new UserComment();
        $comment->user_id = $user->id;
        $comment->post_id = $post->id;
        $comment->body = '/storage/' . $path;
        $comment->is_approved = true;
        $comment->save();

        if ($request->ajax()) {
            return response()->json([
                'status' => 'success',
                'message' => 'Gif created',
                'comment' => $comment->load('user'),
            ]);
        }

        return redirect()->back();
    }

    public function commentFile(Request $request, $post)
    {
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $user = User::find(Auth::id());
        $post = Post::find($post);
        if (!$post) {
            if ($request->ajax()) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Post not found.',
                ]);
            }

            return redirect()->back();
        }

        $path = $request->file('file')->store('files', 'public');

        $comment = new UserComment();
        $comment->user_id = $user->id;
        $comment->post_id = $post->id;
        $comment->body = '/storage/' . $path;
        $comment->is_approved = true;
        $comment->save();

        if ($request->ajax()) {
            return response()->json([
                'status' => 'success',
                'message' => 'File created',
                'comment' => $comment->load('user'),
            ]);
        }

        return redirect()->back();
    }
}
