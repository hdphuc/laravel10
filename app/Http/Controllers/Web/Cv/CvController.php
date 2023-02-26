<?php

namespace App\Http\Controllers\Web\Cv;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CvController extends Controller
{
    /**
     * index function
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $skills = config("skills");
        return view('cv.index', compact('skills'));
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @param string $url
     * @return void
     */
    public function show(Request $request, $url)
    {

        return view('cv.projects.show');
    }
}
