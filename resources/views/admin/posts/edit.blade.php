@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <form action="">
                    <div class="card my-4 p-4">
                        <div class="car-header mb-4">
                            <h4>Add new</h4>
                        </div>
                        <div class="form-group mb-3 has-error">
                            <label for="slug">Slug <span class="require text-danger">*</span> <small>(This field use in url path.)</small></label>
                            <input type="text" class="form-control border" name="slug" />
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for="title">Title <span class="require text-danger">*</span></label>
                            <input type="text" class="form-control border" name="title" />
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for="description">Description</label>
                            <textarea rows="5" class="form-control border" name="description" ></textarea>
                        </div>
                        
                        <div class="form-group mb-3">
                            <p><span class="require text-danger">*</span> - required fields</p>
                        </div>
                        
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">
                                Create
                            </button>
                            <button class="btn btn-default">
                                Cancel
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <h1>Edit Post</h1>
        <form method="POST" action="{{ route('admin.posts.update', $post->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" required>
            </div>
            <div class="form-group">
                <label for="url">URL</label>
                <input type="text" class="form-control" id="url" name="url" value="{{ $post->url }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required>{{ $post->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control-file" id="image" name="image">
                <img src="{{ asset('storage/'.$post->image) }}" alt="Post Image" class="img-thumbnail mt-2" style="max-width: 200px;">
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <select class="form-control" id="category" name="category" required>
                    <option value="">Select a category</option>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $post->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">Back</a>
            </div>
        </form>
    </div>
@endsection
