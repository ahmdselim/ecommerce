<?php

namespace App\Http\Repositories\endUser;

use App\Http\Interfaces\endUser\ProfileInterface;
use App\Http\Traits\ImageTrait;
use App\Models\Ad;
use App\Models\Profile;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileRepository implements ProfileInterface
{

    use ImageTrait;

    private $userModel;
    private $adModel;
    private $profileModel;

    public function __construct(User $userModel, Ad $adModel, Profile $profileModel)
    {
        $this->userModel = $userModel;
        $this->adModel = $adModel;
        $this->profileModel = $profileModel;
    }

    public function index()
    {
        $ads = $this->adModel::where("user_id", Auth::user()->id)->count();
        $profile = $this->profileModel::where("user_id", Auth::user()->id)->first();

        return view("pages.endUser.dashboard.profile.profile", compact("ads", "profile"));
    }

    public function update($request, $id)
    {
        $requests = $request->validated();
        $profile = $this->profileModel::where("user_id", $id)->first();
        $user = $this->userModel::findOrFail($id);
        $newImageName = $request->image ? $this->uploadImage($requests["image"], $this->profileModel::PATH) : null;

        DB::transaction(function () use ($id, $requests, $user, $profile, $newImageName, $request) {
            DB::table('users')
                ->where('id', $id)->update([
                    "fname" => $requests["fname"] ?? $user->fname,
                    "lname" => $requests["lname"] ?? $user->lname,
                    "email" => $requests["email"] ?? $user->email,

                ]);

            DB::table('profiles')
                ->where('id', $id)->update([
                    "phone" => $requests->phone ?? $profile->phone,
                    "city" => $requests->city ?? $profile->city,
                    "state" => $requests->state ?? $profile->state,
                    "zip" => $requests->zip ?? $profile->zip,
                    "country" => $requests->country ?? $profile->country,
                    "company" => $requests->company ?? $profile->company,
                    "dateOfBirth" => Carbon::createFromDate($requests["dateOfBirth"])->toDateTimeString()
                ]);

            if ($request->hasFile('image')) {

                DB::table('profiles')
                    ->where('id', $id)->update([
                        "image" => $request->image ? $newImageName : $profile->image,
                    ]);
            }
        }, 5);



        toast('Congrats User Updated Successfully 😍 ', 'success');
        return redirect()->route("dashboard.settings");
    }
}
