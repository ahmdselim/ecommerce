<?php

namespace App\Http\Controllers\dashboard\Auth;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\dashboard\AuthDashboardInterface;
use App\Http\Requests\Auth\SignInAuthRequest;

class AuthDashboardController extends Controller
{
    private $authDashboardInterface;

    public function __construct(AuthDashboardInterface $authDashboardInterface)
    {
        $this->authDashboardInterface = $authDashboardInterface;
    }

    public function index()
    {
        return $this->authDashboardInterface->index();
    }

    public function login(SignInAuthRequest $request)
    {
        return $this->authDashboardInterface->login($request);
    }
}
