<?php

namespace App\Http\Controllers;

use App\Models\Tool;
use Illuminate\Http\Request;

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

        $tools = Tool::paginate(16);
        return view('tools.index', compact('tools'));
    }

    public function show($slug)
    {
        $tool = Tool::where('slug', $slug)->firstOrFail();
        if (!$tool) abort(404);

        return view('tools.show', compact('tool'));
    }

    public function create()
    {
        return view('tools.create');
    }
}
