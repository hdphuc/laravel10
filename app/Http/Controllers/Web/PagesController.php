<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function show($url)
    {
        return view('web.pages.show', compact('url'));
    }
}
