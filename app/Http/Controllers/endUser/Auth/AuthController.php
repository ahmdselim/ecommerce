<?php

namespace App\Http\Controllers\endUser\Auth;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\endUser\AuthInterface;
use App\Http\Requests\Auth\SignInAuthRequest;
use App\Http\Requests\Auth\SignupAuthRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    private $authInterface;

    public function __construct(AuthInterface $authInterface)
    {
        $this->authInterface = $authInterface;
    }
    public function index()
    {
        return $this->authInterface->index();
    }

    public function login(SignInAuthRequest $request)
    {
        return $this->authInterface->login($request);
    }

    public function signup(SignupAuthRequest $request)
    {
        return $this->authInterface->signup($request);
    }

    public function logout()
    {
        return $this->authInterface->logout();
    }
}
