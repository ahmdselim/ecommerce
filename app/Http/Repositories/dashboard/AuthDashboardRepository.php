<?php

namespace App\Http\Repositories\dashboard;

use App\Http\Interfaces\dashboard\AuthDashboardInterface;
use Illuminate\Support\Facades\Auth;

class AuthDashboardRepository implements AuthDashboardInterface
{

    public function index()
    {
        return \view('pages.dashboard.auth.login');
    }

    public function login($request)
    {
        $credentials = $request->only(['email', 'password']);

        if (Auth::attempt($credentials) && Auth::user()->user_role() == 1) {

            toast('Welcome again 😍 ' . Auth::user()->fname . '  ' .  Auth::user()->lname, 'success');
            return redirect(route('admin.home'));
        } else if (Auth::attempt($credentials) && Auth::user()->user_role() == 2) {
            \session()->flush();
            Auth::logout();

            toast('Warning Toast', 'warning');
            return redirect(route('admin.auth'));
        } else {
            toast('Error credentials', 'error');
            return redirect(route('admin.auth'));
        }
    }
}
