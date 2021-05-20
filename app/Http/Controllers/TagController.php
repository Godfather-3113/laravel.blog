<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
//use Illuminate\Routing\Controller;

class TagController extends Controller
{
    public function show($slug)
    {
        $tag= Tag::where('slug', $slug)->firstOrFail();
        $posts=$tag->posts()->with('category')->orderBy('id', 'desc')->paginate(4);
        return view('tags.show', compact('tag', 'posts'));
    }
//    public function index()
//    {
//        $category = Category::with('category')->orderBy('id','desc')->paginate(5);
//        return view('posts.index',compact('category'));
//    }
}
