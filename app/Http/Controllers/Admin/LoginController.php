<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * index function
     *
     * @return void
     */
    public function index()
    {
        return view('admin.auth.login');
    }

    
    public function postLogin(AdminLoginRequest $request)
    {
        return redirect()->route('admin.dashboard');
    }

    public function register()
    {
        return view('admin.auth.register');
    }

    public function postRegister()
    {
        return view('admin.auth.login');
    }

    public function logout()
    {
        return view('admin.auth.login');
    }
}
