<?php

namespace App\Http\Interfaces\endUser;

interface AuthInterface
{
    public function index();
    public function login($request);
    public function signup($request);
    public function logout();
}
