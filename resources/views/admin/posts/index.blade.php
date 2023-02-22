@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <form action="">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mx-3 z-index-2">
                            <h6 class="text-capitalize ps-3 pt-3 pe-3">Filter</h6>
                        </div>
                        <div class="card-body pb-4">
                            <div class="row">
                                <div class="col-3">
                                    <div class="input-group w-100">
                                        <div class="form-outline w-75">
                                            <input type="search" id="form1"
                                                class="form-control border border-end-0 ps-2" />
                                            <label class="form-label ps-2" for="form1">Search</label>
                                        </div>
                                        <button type="button" class="btn btn-primary w-25 m-0">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="input-group">
                                        <div class="form-outline w-100">
                                            <input type="email" id="form2" class="form-control border ps-2" />
                                            <label class="form-label ps-2" for="form2">Email</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="input-group">
                                        <select class="form-control border form-select ps-2 pe-2" id="select01">
                                            <option value="">Select</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-auto">
                                    <a href="{{ route('admin.posts.add') }}" class="btn btn-sm btn-primary m-0">Add</a>
                                </div>
                                <div class="col-auto">
                                    <a href="javascripts:;" class="btn btn-sm btn-danger m-0">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">List post</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                            width="10">
                                            stt
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                            width="10">
                                            Title
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"
                                            width="20">
                                            Description
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                            width="20">
                                            Status
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                            width="10">
                                            Employed
                                        </th>
                                        <th class="text-secondary opacity-7" width="10"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($posts) <= 0)
                                        <tr>
                                            <td colspan="7" class="text-center">
                                                <p class="m-0 text-bold text-secondary">Not found</p>
                                            </td>
                                        </tr>
                                    @else
                                        @foreach ($posts as $post)
                                            <tr>
                                                <td>
                                                    <p class="text-xs ps-3 font-weight-bold mb-0">1</p>
                                                </td>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">
                                                                <a href="#1">New post 1</a>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0">content post ...</p>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <span class="badge badge-sm bg-gradient-success">Online</span>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                                                </td>
                                                <td class="align-middle">
                                                    <a href="javascript:;" class="text-info font-weight-bold text-xs"
                                                        data-toggle="tooltip" data-original-title="Edit user">
                                                        Edit
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="pagination-warp d-flex flex-warp justify-content-center">
                    <nav aria-label="Page navigation text-center">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
