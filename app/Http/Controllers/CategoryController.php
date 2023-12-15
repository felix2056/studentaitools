<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories.index');
    }

    public function show($slug)
    {
        $category = Category::with('tools')->where('slug', $slug)->firstOrFail();
        if (!$category) abort(404);

        $tools = $category->tools()->where('is_active', true)->paginate(16);

        return view('categories.show', compact('category', 'tools'));
    }
}
