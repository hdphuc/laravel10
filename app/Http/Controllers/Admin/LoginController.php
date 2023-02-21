<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use App\Services\LineServices;
use App\Services\UserService;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /** @var LineServices */
    protected $lineServices;

    /** @var UserService */
    protected $userService;

    /**
     * LoginController constructor.
     * @param LineServices $lineService
     */
    public function __construct(LineServices $lineServices, UserService $userService)
    {
        $this->lineServices = $lineServices;
        $this->userService = $userService;
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
        $code = $request->get('code');         
        $dataUser = (array) $response = $this->lineServices->getLineToken($code);
        $profile = null;

        if (isset($response['access_token'])) {
            // // Get profile from access token.
            $profile = $this->lineServices->getUserProfile($response['access_token']);
            $dataUser = \array_merge($response, (array) $profile);
        }
        $responUser = $this->userService->create($dataUser);
        return \response()->json([$response, $responUser]);
    }
}
