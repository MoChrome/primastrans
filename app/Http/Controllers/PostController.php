<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    public function index()
    {
        return view('/properties/property-home', [
            "title" => "Property",
            "profile" => Company::all(),
            "posts" => Post::all(),
            "categories" => Category::all()
        ]);
    }

    public function show(Post $post)
    {
        return view('/properties/property-post', [
            "title" => "Ruko",
            "post" => $post
        ]);
    }

    public function categories()
    {
        return view('/properties/property-categories', [
            'title' => 'Post Categories',
            'categories' => Category::all()
        ]);
    }

    public function category(Category $category)
    {
        return view('/properties/property-category', [
            'title' => $category->name,
            'posts' => $category->posts,
            'category' => $category->name
        ]);
    }
}
