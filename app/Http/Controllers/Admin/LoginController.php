<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use App\Http\Services\LineServices;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /** @var LineServices */
    protected $lineServices;

    /**
     * LoginController constructor.
     * @param LineServices $lineService
     */
    public function __construct(LineServices $lineServices)
    {
        $this->lineServices = $lineServices;
    }

    /**
     * index function
     *
     * @return void
     */
    public function index()
    {
        $lineUrl = $this->lineServices->getLoginBaseUrl();

        return view('admin.auth.login', compact('lineUrl'));
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

    /**
     * Handle result which Line API returned.
     * @param Request $request
     * @return void
     */
    public function handleLineCallback(Request $request) {
        $code = $request->input('code', '');
        $response = $this->lineServices->getLineToken($code);
        // Get profile from access token.
        $profile = $this->lineServices->getLineToken($response['access_token']);
        // Get profile from ID token
        $profile = $this->lineServices->verifyIDToken($response['id_token']);
    }
}
