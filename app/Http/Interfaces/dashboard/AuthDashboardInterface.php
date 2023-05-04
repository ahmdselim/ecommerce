<?php

namespace App\Http\Interfaces\dashboard;

interface AuthDashboardInterface
{
    public function index();
    public function login($request);
}
