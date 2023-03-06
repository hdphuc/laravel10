@extends('admin.layouts.app')

@php
    $name = Request::get('name') ?? old('name', '');
@endphp

@section('content')
    <div class="container bg-white p-4 pt-5 pb-5 border-radius-xl">
        <h1 class="h1 mb-4 text-center">Create a Post</h1>
        <form method="POST" action="{{ route('admin.categories.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-4">
                <label for="name">name</label>
                <input type="text" class="form-control border p-2 border-radius-5 @if($errors->has('name')) is-invalid @endif" id="name" name="name" value="{{ $name }}">
                 @if($errors->has('name')) 
                 <div class="invalid-feedback">
                    {{ $errors->first('name') }}
                 </div>
                @endif
            </div>
            <div class="form-group mb-4">
                <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary shadow me-3">Back</a>
                <button type="submit" class="btn btn-primary ">Add</button>
            </div>
        </form>
    </div>
@endsection
