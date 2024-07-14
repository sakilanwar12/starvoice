<?php

namespace App\Http\Controllers;


class PostController extends Controller
{
    public function index()
    {
        return view("admin.post.index");
    }
    public function create()
    {
        return view("admin.post.create");
    }
}
