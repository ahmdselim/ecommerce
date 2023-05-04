<?php

namespace App\Http\Repositories\endUser;

use App\Http\Interfaces\endUser\MyAdsInterface;
use App\Http\Interfaces\endUser\ProfileInterface;
use App\Models\Ad;
use App\Models\Bookmark;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MyAdsRepository implements MyAdsInterface
{

    private $adModel, $bookmarkModel, $profileModel;

    public function __construct(Ad $adModel,  Profile $profileModel, Bookmark $bookmarkModel)
    {
        $this->adModel = $adModel;
        $this->profileModel = $profileModel;
        $this->bookmarkModel = $bookmarkModel;
    }

    public function index()
    {
        $myAds = $this->adModel::where("user_id", Auth::user()->id)->with(["category", "user"])->paginate(5);
        $profile = $this->profileModel::where("user_id", Auth::user()->id)->first();

        return view("pages.endUser.dashboard.profile.myAds", compact("myAds", "profile"));
    }

    public function addToBookmark($request, $id)
    {
        $bookmarkModel = $this->bookmarkModel::create([
            "user_id" => Auth::user()->id,
            "ad_id" => $id,
        ]);

        toast('Congrats ad added to Bookmark Successfully 😍 ', 'success');
        return redirect()->route("dashboard.myAds");
    }
}
