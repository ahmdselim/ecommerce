<?php

namespace App\Http\Repositories\endUser;

use App\Http\Interfaces\endUser\SettingsInterface;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SettingsRepository implements SettingsInterface
{

    private $userModel;
    private $profileModel;


    public function __construct(User $userModel, Profile $profileModel)
    {
        $this->userModel = $userModel;
        $this->profileModel = $profileModel;
    }

    public function index()
    {
        $profile = $this->profileModel::where("user_id", Auth::user()->id)->first();
        $user = $this->userModel::where("id", Auth::user()->id)->first();

        return \view('pages.endUser.dashboard.settings.settings', compact("profile", "user"));
    }
}
