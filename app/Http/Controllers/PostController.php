<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(5);
        return view('admin.post.index', compact('posts'));
    }
    public function create()
    {
        return view("admin.post.create");
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'body' => ['required', 'string', 'max:255'],
        ]);
        Post::create([
            'title' => $request->title,
            'body' => $request->body
        ]);

        return redirect()->route('admin.post.index');
    }
}
