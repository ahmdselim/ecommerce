<?php

namespace App\Http\Repositories\endUser;

use App\Http\Interfaces\endUser\AuthInterface;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthRepository implements AuthInterface
{
    private $userModel;

    public function __construct(User $userModel)
    {
        $this->userModel = $userModel;
    }
    public function index()
    {
        return view('pages.endUser.auth.auth');
    }

    public function login($request)
    {
        $requests = $request->validated();

        if (Auth::attempt(['email' => $requests["email"], 'password' => $requests["password"], 'active' => "true"])) {

            $user = Auth::getProvider()->retrieveByCredentials($requests);

            Auth::login($user);
            return redirect()->route('home.index')->with('success', 'go ahead');
        } else if (Auth::attempt(['email' => $requests["email"], 'password' => $requests["password"], 'active' => "false"])) {
            return redirect()->route('auth')->with('invalid', 'Your are not active in our website we are sorry');
        } else {
            return redirect()->route('auth')->with('invalid', 'Invalid Credentials');
        }
    }

    public function signup($request)
    {
        $requests = $request->validated();
        $requests["password"] = Hash::make($requests["password"]);

        // used observer to insert user in users_groups by default rule user
        $user = $this->userModel::create($requests);
        auth()->login($user);

        toast('Congrats You are in now 😍 ', 'success');
        return redirect()->route("/");
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        toast('You are logout ', 'success');
        return redirect()->route("auth");
    }
}
