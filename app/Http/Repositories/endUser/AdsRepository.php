<?php

namespace App\Http\Repositories\endUser;

use App\Events\AdVisitor;
use App\Http\Interfaces\endUser\AdsInterface;
use App\Http\Traits\ImageTrait;
use App\Listeners\IncreaseVisitor;
use App\Models\Ad;
use App\Models\AdsImage;
use App\Models\Bookmark;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Profile;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdsRepository implements AdsInterface
{
    use ImageTrait;
    private $profileModel, $adsModel, $categoryModel, $brandModel, $bookmarkModel;

    public function __construct(Profile $profileModel, Ad $adsModel, Category $categoryModel, Brand $brandModel, Bookmark $bookmarkModel)
    {
        $this->profileModel = $profileModel;
        $this->adsModel = $adsModel;
        $this->brandModel = $brandModel;
        $this->categoryModel = $categoryModel;
        $this->bookmarkModel = $bookmarkModel;
    }

    public function index()
    {
        $ads = $this->adsModel::where("status", "accept")->paginate(9);
        $last_ten_ads = $this->adsModel::where("status", "accept")->orderBy('id', 'desc')->take(10)->get();
        $ads_ids = $this->adsModel::pluck("id")->toArray();

        $bookmarks = $this->bookmarkModel::whereIn("ad_id", $ads_ids)->pluck("user_id", "ad_id");

        return \view("pages.endUser.ads.index", compact("ads", "last_ten_ads", "bookmarks"));
    }


    public function show($id)
    {
        $ad = $this->adsModel::with("adImages", "reviews")->where("status", "accept")->findOrFail($id);

        event(new AdVisitor($ad));

        return \view("pages.endUser.ads.show", compact("ad"));
    }

    public function create()
    {
        $profile = $this->profileModel::where("user_id", Auth::user()->id)->first();
        $brands = $this->brandModel::get(["name", "id"]);
        $categories = $this->categoryModel::get(["name", "id"]);


        return \view("pages.endUser.dashboard.Ads.create", compact("profile", "brands", "categories"));
    }

    public function store($request)
    {
        $requests = $request->validated();
        $newImageName =  $this->uploadImage($requests["image"], $this->adsModel::PATH);

        DB::transaction(function () use ($requests, $newImageName) {

            $ad = $this->adsModel::create([
                "name" => ["en" => $requests["name_en"], "ar" => $requests["name_ar"]],
                "description" => $requests["description"],
                "image" => $newImageName,
                "category_id" => $requests["category_id"],
                "user_id" => auth()->id(),
                "price" => $requests["price"],
                "condition" => $requests["condition"],
                "status" => "pindling",
            ]);

            $ad->brands()->attach($requests["brand_id"]);

            foreach ($requests["images"] as $image) {
                $imageName =  $this->uploadImage($image, $this->adsModel::PATH);

                AdsImage::create([
                    "ad_id" => $ad->id,
                    "image" => $imageName
                ]);
            }
        });

        toast('Congrats ads Added Successfully 😍 ', 'success');
        return redirect()->route("dashboard.ad.create");
    }
}
