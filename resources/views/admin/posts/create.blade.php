@extends('admin.layouts.app')

@php
    $title = Request::get('title') ?? old('title', '');
    $url = Request::get('url') ?? old('url', '');
    $description = Request::get('description') ?? old('description', '');
    $image = Request::get('image') ?? old('image', '');
    $categoryId = Request::get('category_id') ?? old('category_id', '');
@endphp

@section('content')
    <div class="container bg-white p-4 pt-5 pb-5 border-radius-xl">
        <h1 class="h1 mb-4 text-center">Create a Post</h1>
        <form method="POST" action="{{ route('admin.posts.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-4">
                <label for="title">Title</label>
                <input type="text" class="form-control border p-2 border-radius-5 @if($errors->has('title')) is-invalid @endif" id="title" name="title" value="{{ $title }}">
                 @if($errors->has('title')) 
                 <div class="invalid-feedback">
                    {{ $errors->first('title') }}
                 </div>
                @endif
            </div>
            <div class="form-group mb-4">
                <label for="url">URL</label>
                <input type="text" class="form-control border p-2 border-radius-5 @if($errors->has('url')) is-invalid @endif" id="url" name="url" value="{{ $url }}">
                 @if($errors->has('url')) 
                 <div class="invalid-feedback">
                    {{ $errors->first('url') }}
                 </div>
                @endif
            </div>
            <div class="form-group mb-4">
                <label for="description">Description</label>
                <textarea class="form-control border p-2 border-radius-5 @if($errors->has('description')) is-invalid @endif" id="description" name="description"  rows="3">{{ $description }}</textarea>
                 @if($errors->has('description')) 
                 <div class="invalid-feedback">
                    {{ $errors->first('description') }}
                 </div>
                @endif
            </div>
            <div class="form-group mb-4">
                <label for="image">Image</label>
                <div class="form-control border p-2 border-radius-5 @if($errors->has('image')) is-invalid @endif">
                    <input type="file" class="form-control form-control-sm" id="image" name="image" value="{{ $image }}">
                </div>
                @if($errors->has('image')) 
                    <div class="invalid-feedback">
                    {{ $errors->first('image') }}
                    </div>
                @endif
            </div>
            <div class="form-group mb-4">
                <label for="category">Category</label>
                <select class="form-control border p-2 border-radius-5 @if($errors->has('category')) is-invalid @endif" id="category" name="category_id">
                    <option value="">Select a category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" @if($categoryId == $category->id) selected @endif>{{ $category->name }}</option>
                    @endforeach
                </select>
                @if($errors->has('category_id')) 
                <div class="invalid-feedback">
                   {{ $errors->first('category_id') }}
                </div>
               @endif
            </div>
            <div class="form-group mb-4">
                <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary shadow me-3">Back</a>
                <button type="submit" class="btn btn-primary ">Add</button>
            </div>
        </form>
    </div>
@endsection
