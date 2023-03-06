<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Services\CategoriesService;
class CategoriesController extends Controller
{
    protected $categoriesService;
    
    /**
     * __construct
     *
     * @param  mixed $categoriesService
     * @return void
     */
    public function __construct(CategoriesService $categoriesService)
    {
        $this->categoriesService = $categoriesService;
    }
    
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $categories = Category::latest()->paginate(10);
        return view('admin.categories.index', compact('categories'));
    }
    
    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('admin.categories.create');
    }
    
    /**
     * store
     *
     * @param  mixed $request
     * @return void
     */
    public function store(CategoryRequest $request)
    {
        $category = $this->categoriesService->createCategory($request->validated());

        return redirect()->route('admin.categories.index')
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
        $category = Category::find($id);
        return view('admin.categories.show', compact('category'));
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
        $category = Category::find($id);
        return view('admin.categories.edit', compact('post'));
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
        $this->categoriesService->updateCategory($post, $request->validated());

        return redirect()->route('admin.categories.index')
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
        $category = Category::find($id);
        $this->categoriesService->deleteCategory($category);

        return redirect()->route('admin.categories.index')
            ->with('success', 'Post deleted successfully.');
    }
}
