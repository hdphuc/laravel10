@extends('admin.auth.layouts.app')

@php
    $username = old("username", "");
    $password = old("password", "");
    $remember = old("remember", false);
@endphp
@section('content')
    <div class="page-header align-items-start min-vh-100" style="background-image: url('{{ asset('assets/web/img/login/bg_login.avif') }}');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Sign in <br> Admin dashboard</h4>
                  <div class="row mt-3">
                    <div class="col-2 text-center ms-auto">
                      <a class="btn btn-link px-3" id="btn-login-by-facebook" href="javascript:;" title="Login with facebook">
                        <i class="fa fa-facebook text-white text-lg"></i>
                      </a>
                    </div>
                    <div class="col-2 text-center px-1">
                      <a class="btn btn-link px-3" id="btn-login-by-github" href="javascript:;" title="Login with github">
                        <i class="fa fa-github text-white text-lg"></i>
                      </a>
                    </div>
                    <div class="col-2 text-center">
                      <a class="btn btn-link px-3" id="btn-login-by-google" href="javascript:;" title="Login with google">
                        <i class="fa fa-google text-white text-lg"></i>
                      </a>
                    </div>
                    <div class="col-2 text-center me-auto">
                      <a class="btn btn-link px-3" id="btn-login-by-line" href="{{ $lineUrl }}" title="Login with line">
                        <i class="fab fa-line text-white text-lg"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <form role="form" class="text-start" action="{{ route('admin.postLogin') }}" method="POST">
                  @csrf
                  <div class="input-group input-group-outline my-3 @if($username) is-focused @endif @if($username && !$errors->has('username')) is-valid @endif">
                    <label class="form-label">Username</label>
                    <input type="text" name="username" class="form-control @if ($errors->has('username')) is-invalid @endif" value="{{ $username }}">
                    @if($errors->has('username'))
                      <div class="invalid-feedback">{{ $errors->first('username') }}</div>
                    @endif
                  </div>
                  <div class="input-group input-group-outline mb-3 @if($password) is-focused @endif @if($password && !$errors->has('password')) is-valid @endif">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control @if ($errors->has('password')) is-invalid @endif" value="{{ $password }}">
                    @if($errors->has('password'))
                      <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                    @endif
                  </div>
                  <div class="form-check form-switch d-flex align-items-center mb-3">
                    <input class="form-check-input" type="checkbox" id="rememberMe" name="remember" @if($remember ) checked @endif>
                    <label class="form-check-label mb-0 ms-3" for="rememberMe">Remember me</label>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2 btn-submit btn-login">Sign in</button>
                  </div>
                  <p class="mt-4 text-sm text-center">
                    Don't have an account?
                    <a href="{{ route('admin.register') }}" class="text-primary text-gradient font-weight-bold">Sign up</a>
                  </p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection