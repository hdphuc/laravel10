<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * index function
     *
     * @return Illuminate\Contracts\View\View
    */
    public function index() {
        return redirect()->route('admin.login');
    }

    /**
     * dashboard function
     *
     * @return Illuminate\Contracts\View\View
    */
    public function dashboard() {
        return view('admin.dashboard');
    }
}
