<?php

namespace App\Http\Controllers;

use App\Models\Tool;
use App\Models\User;
use Illuminate\Http\Request;

use Spatie\Browsershot\Browsershot;

class ToolController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        if ($search) {
            $tools = Tool::where('name', 'like', "%$search%")->orWhere('content', 'like', "%$search%")->paginate(16);
            return view('tools.index', compact('tools'));
        }

        $category = $request->input('category');
        if ($category) {
            $tools = Tool::whereHas('categories', function ($query) use ($category) {
                $query->where('slug', $category);
            })->paginate(16);
            return view('tools.index', compact('tools'));
        }

        $tools = Tool::where('is_active', true)->paginate(16);
        return view('tools.index', compact('tools'));
    }

    public function show($slug)
    {
        $tool = Tool::where('slug', $slug)->firstOrFail();
        if (!$tool) abort(404);

        return view('tools.show', compact('tool'));
    }

    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'tool_name' => 'required|string',
                'tool_website' => 'required|url',
                'tool_content' => 'required|string',
                'tool_tags' => 'required|string',
                'tool_pricing' => 'required|in:free,freemium,paid',
                'tool_categories' => 'required|array',
            ]);

            $user = User::find(auth()->id());
            if (!$user) abort(404);

            $tool = $user->tools()->create([
                'name' => $request->input('tool_name'),
                'slug' => \Str::slug($request->input('tool_name')),
                'content' => $request->input('tool_content'),
                'link' => $request->input('tool_website'),
                'tags' => json_encode(explode(',', $request->input('tool_tags'))),
                'pricing' => $request->input('tool_pricing'),
                'is_active' => false,
            ]);

            if ($tool) {
                $tool->categories()->attach($request->input('tool_categories'));
                return redirect()->route('tools.success', $tool->slug);
            }

            return back()->with('error', 'Something went wrong. Please try again.');
        }

        return view('tools.submit');
    }

    public function edit(Request $request, $slug)
    {
        $tool = Tool::where('slug', $slug)->firstOrFail();
        if (!$tool) abort(404);

        // return response()->json($tool);

        if ($request->isMethod('post')) {
            $request->validate([
                'tool_name' => 'required|string',
                'tool_website' => 'required|url',
                'tool_content' => 'required|string',
                'tool_tags' => 'required|string',
                'tool_pricing' => 'required|in:free,freemium,paid',
                'tool_categories' => 'required|array',
            ]);

            $tool->update([
                'name' => $request->input('tool_name'),
                'slug' => \Str::slug($request->input('tool_name')),
                'content' => $request->input('tool_content'),
                'link' => $request->input('tool_website'),
                'tags' => json_encode(explode(',', $request->input('tool_tags'))),
                'pricing' => $request->input('tool_pricing'),
            ]);

            if ($tool) {
                $tool->categories()->sync($request->input('tool_categories'));
                return redirect()->route('tools.show', $tool->slug);
            }

            return back()->with('error', 'Something went wrong. Please try again.');
        }

        return view('tools.edit', compact('tool'));
    }

    public function review(Request $request, $slug)
    {
        $request->validate([
            'review' => 'required|string',
            'rating' => 'required|integer|between:1,5',
        ]);

        $tool = Tool::where('slug', $slug)->firstOrFail();
        if (!$tool) abort(404);

        $tool->ratings()->create([
            'user_id' => auth()->id(),
            'review' => $request->input('review'),
            'rating' => $request->input('rating'),
        ]);

        return back();
    }

    public function reply(Request $request, $slug, $id)
    {
        $request->validate([
            'reply' => 'required|string',
        ]);

        $tool = Tool::where('slug', $slug)->firstOrFail();
        if (!$tool) abort(404);

        $rating = $tool->ratings()->where('id', $id)->firstOrFail();
        if (!$rating) abort(404);

        $rating->replies()->create([
            'user_id' => auth()->id(),
            'reply' => $request->input('reply'),
        ]);

        return back();
    }

    public function success($slug)
    {
        $tool = Tool::where('slug', $slug)->firstOrFail();
        if (!$tool) abort(404);

        return view('tools.success', compact('tool'));
    }

    public function updateScreenshots($slug)
    {
        $screenshots = $this->captureScreenshots($slug);

        if ($screenshots) {
            return redirect()->back()->with('success', 'Screenshots updated successfully.');
        }
    }

    public function captureScreenshots($slug, $return_type = 'boolean')
    {
        $tool = Tool::where('slug', $slug)->firstOrFail();
        if (!$tool) abort(404);

        $url = $tool->link;

        try {
            // delete old screenshots if they exist in the public folder
            if (file_exists(public_path('screenshots/' . $tool->screenshot1))) unlink(public_path('screenshots/' . $tool->screenshot1));
            if (file_exists(public_path('screenshots/' . $tool->screenshot2))) unlink(public_path('screenshots/' . $tool->screenshot2));
            if (file_exists(public_path('screenshots/' . $tool->screenshot3))) unlink(public_path('screenshots/' . $tool->screenshot3));

            // capture top screenshot
            Browsershot::url($url)
                ->waitUntilNetworkIdle()
                ->dismissDialogs()
                ->save(public_path('screenshots/' . $tool->slug . '-top.png'));
            
            $tool->update([
                'screenshot1' => $tool->slug . '-top.png',
            ]);

            // capture middle screenshot
            Browsershot::url($url)
                ->waitUntilNetworkIdle()
                ->dismissDialogs()
                ->clip(0, 1080, 1920, 1080)
                ->save(public_path('screenshots/' . $tool->slug . '-middle.png'));

            $tool->update([
                'screenshot2' => $tool->slug . '-middle.png',
            ]);

            // capture bottom screenshot
            Browsershot::url($url)
                ->waitUntilNetworkIdle()
                ->dismissDialogs()
                ->clip(0, 2160, 1920, 1080)
                ->save(public_path('screenshots/' . $tool->slug . '-bottom.png'));

            $tool->update([
                'screenshot3' => $tool->slug . '-bottom.png',
            ]);

            if ($return_type == 'json') {
                return response()->json([
                    'status' => 'success',
                    'message' => 'Screenshots updated successfully.',
                ]);
            } elseif ($return_type == 'redirect') {
                return redirect()->route('tools.show', $tool->slug)->with('success', 'Screenshots updated successfully.');
            } elseif ($return_type == 'back') {
                return back()->with('success', 'Screenshots updated successfully.');
            } else {
                return true;
            }
        } catch (\Exception $e) {
            if ($return_type == 'json') {
                return response()->json([
                    'status' => 'error',
                    'message' => $e->getMessage(),
                ]);
            } elseif ($return_type == 'redirect') {
                return redirect()->route('tools.show', $tool->slug)->with('error', $e->getMessage());
            } elseif ($return_type == 'back') {
                return back()->with('error', $e->getMessage());
            } else {
                return false;
            }
        }
    }
}
