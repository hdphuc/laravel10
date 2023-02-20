<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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

    
    public function postLogin(Request $request)
    {
        return view('admin.auth.register');
    }

    public function register()
    {
        return view('admin.auth.register');
    }

    public function postRegister()
    {
        return view('admin.auth.register');
    }
}
