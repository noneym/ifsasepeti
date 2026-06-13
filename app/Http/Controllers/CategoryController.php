<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Contracts\View\View;

class CategoryController extends Controller
{
    public function show(string $slug): View
    {
        $category = Category::where('slug', $slug)->where('is_active', true)->firstOrFail();

        $sites = $category->activeSites()->get();

        return view('category.show', compact('category', 'sites'));
    }
}
