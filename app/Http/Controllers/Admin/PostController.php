<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Services\PostService;

class PostController extends Controller
{
    protected $postService;
    
    /**
     * __construct
     *
     * @param  mixed $postService
     * @return void
     */
    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }
    
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $categories = Category::all();
        $posts = Post::latest()->paginate(10);
        return view('admin.posts.index', compact('posts', 'categories'));
    }
    
    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.posts.create', compact('categories'));
    }
    
    /**
     * store
     *
     * @param  mixed $request
     * @return void
     */
    public function store(StorePostRequest $request)
    {
        $post = $this->postService->createPost($request->validated());

        return redirect()->route('admin.posts.index')
            ->with('success', 'Post created successfully.');
    }
    
    /**
     * show
     *
     * @param  mixed $id
     * @return void
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('admin.posts.show', compact('post'));
    }
    
    /**
     * edit
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return void
     */
    public function edit(Request $request, $id)
    {
        $post = Post::find($id);
        $categories = Category::all();
        return view('admin.posts.edit', compact('post', 'categories'));
    }
    
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $post
     * @return void
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $this->postService->updatePost($post, $request->validated());

        return redirect()->route('admin.posts.index')
        ->with('success', 'Post updated successfully.');
    }
    
    /**
     * destroy
     *
     * @param  mixed $id
     * @return void
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $this->postService->deletePost($post);

        return redirect()->route('admin.posts.index')
            ->with('success', 'Post deleted successfully.');
    }
}