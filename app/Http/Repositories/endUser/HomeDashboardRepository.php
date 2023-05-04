<?php

namespace App\Http\Repositories\endUser;

use App\Http\Interfaces\endUser\AdsInterface;
use App\Http\Interfaces\endUser\HomeDashboardInterface;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;

class HomeDashboardRepository implements HomeDashboardInterface
{
    private $profileModel;

    public function __construct(Profile $profileModel)
    {
        $this->profileModel = $profileModel;
    }

    public function index()
    {
        $profile = $this->profileModel::where("user_id", Auth::user()->id)->first();
        return \view("pages.endUser.dashboard.homeDashboard.index", compact("profile"));
    }
}
