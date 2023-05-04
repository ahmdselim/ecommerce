<?php

namespace App\Http\Repositories\dashboard;

use App\Http\Interfaces\dashboard\AdsDashboardInterface;
use App\Http\Interfaces\dashboard\AuthDashboardInterface;
use App\Http\Traits\ImageTrait;
use App\Models\Ad;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Department;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdsDashboardRepository implements AdsDashboardInterface
{

    use ImageTrait;

    private $departmentModel, $adsModel, $categoryModel, $userModel, $brandModel;



    public function __construct(Department $departmentModel, Ad $adsModel, Category $categoryModel, User $userModel, Brand $brandModel)
    {
        $this->departmentModel = $departmentModel;
        $this->adsModel = $adsModel;
        $this->categoryModel = $categoryModel;
        $this->userModel = $userModel;
        $this->brandModel = $brandModel;
    }

    public function index()
    {
        $departments = $this->departmentModel::get(["name", "id"]);
        $ads = $this->adsModel::with(["category", "user", "brands"])->get();


        return \view('pages.dashboard.ads.index', compact("departments", "ads"));
    }

    public function create()
    {
        $categories = $this->categoryModel::get(["name", "id"]);
        $users = $this->userModel::get(["fname", "id"]);
        $brands = $this->brandModel::get(["name", "id"]);

        return \view('pages.dashboard.ads.create', compact("categories", "users", "brands"));
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
                "user_id" => $requests["user_id"],
                "price" => $requests["price"],
                "condition" => $requests["condition"],
                "status" => $requests["status"],
            ]);

            $ad->brands()->attach($requests["brand_id"]);
        });

        toast('Congrats ads Added Successfully 😍 ', 'success');
        return redirect()->route("admin.ads.index");
    }

    public function edit($ad)
    {
        $categories = $this->categoryModel::get(["name", "id"]);
        $users = $this->userModel::get(["fname", "id"]);
        $brands = $this->brandModel::get(["name", "id"]);

        return \view('pages.dashboard.ads.edit', compact("ad", "categories", "users", "brands"));
    }

    public function update($request, $ad)
    {
        $requests = $request->validated();

        if (isset($request->image)) {
            $newImageName =  $this->uploadImage($requests["image"], $this->adsModel::PATH, $this->adsModel::PATH . '/' . $ad->getRawOriginal('image'));
        }

        DB::transaction(function () use ($ad, $requests, $request) {
            $adUpdated =  $ad->update([
                "name" => ["en" => $requests["name_en"] ?? $ad->getTranslation("name", "en"), "ar" => $requests["name_ar"] ?? $ad->getTranslation("name", "ar")],
                "description" => $requests["description"]  ?? $ad->description,
                "image" => $newImageName ?? $ad->getRawOriginal('image'),
                "category_id" => $requests["category_id"] ?? $ad->category_id,
                "user_id" => $requests["user_id"] ?? $ad->user_id,
                "price" => intval($requests["price"]) ?? $ad->price,
                "condition" => $requests["condition"] ?? $ad->condition,
                "status" => $requests["status"] ?? $ad->status,

            ]);

            $ad->brands()->sync($request->brand_id);
        });

        toast('Congrats ad updated Successfully 😍 ', 'success');
        return redirect()->route("admin.ads.index");
    }

    public function destroy($ad)
    {
        $this->removeImage($this->adsModel::PATH . '/' . $ad->getRawOriginal('image'));

        $ad->brands()->detach($ad->brand_id);
        $ad->delete();



        toast('Congrats ads deleted Successfully 😍 ', 'success');
        return redirect()->route("admin.ads.index");
    }
}
