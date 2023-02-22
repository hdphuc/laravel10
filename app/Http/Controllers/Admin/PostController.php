<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * index function
     *
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {

        $posts = [];
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * create function
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.posts.edit');
    }
}
