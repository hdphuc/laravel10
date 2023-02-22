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
@endsection
