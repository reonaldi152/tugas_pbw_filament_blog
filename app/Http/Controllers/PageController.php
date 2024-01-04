<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $posts = Post::where("is_publish", true)->get();
        return view("welcome", ["posts" => $posts]);
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view("detail", ["post" => $post]);
    }
}
