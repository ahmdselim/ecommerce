<?php

namespace App\Http\Repositories\dashboard;

use App\Http\Interfaces\dashboard\AuthDashboardInterface;
use App\Http\Interfaces\dashboard\BrandsDashboardInterface;
use App\Http\Traits\ImageTrait;
use App\Models\Ad;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Department;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class BrandsDashboardRepository implements BrandsDashboardInterface
{

    use ImageTrait;

    private $departmentModel, $categoryModel, $userModel, $brandModel;



    public function __construct(Department $departmentModel, Category $categoryModel, User $userModel, Brand $brandModel)
    {
        $this->departmentModel = $departmentModel;
        $this->categoryModel = $categoryModel;
        $this->userModel = $userModel;
        $this->brandModel = $brandModel;
    }

    public function index()
    {
        $brands = $this->brandModel::get();
        return \view('pages.dashboard.brands.index', compact("brands"));
    }

    public function create()
    {
        return \view('pages.dashboard.brands.create');
    }

    public function store($request)
    {
        $requests = $request->validated();
        $newImageName =  $this->uploadImage($requests["image"], $this->brandModel::PATH);

        $this->brandModel::create([
            "name" => ["en" => $requests["name_en"], "ar" => $requests["name_ar"]],
            "image" => $newImageName,
        ]);



        toast('Congrats brand Added Successfully 😍 ', 'success');
        return redirect()->route("admin.brands.index");
    }

    public function edit($ad)
    {
        return \view('pages.dashboard.brands.edit', compact("ad"));
    }

    public function update($request, $brand)
    {
        $requests = $request->validated();

        if (isset($request->image)) {
            $newImageName =  $this->uploadImage($requests["image"], $this->brandModel::PATH, $this->brandModel::PATH . '/' . $brand->getRawOriginal('image'));
        }

        $brand->update([
            "name" => ["en" => $requests["name_en"] ?? $brand->getTranslation("name", "en"), "ar" => $requests["name_ar"] ?? $brand->getTranslation("name", "ar")],
            "image" => $newImageName ?? $brand->getRawOriginal('image'),
        ]);

        toast('Congrats brand updated Successfully 😍 ', 'success');
        return redirect()->route("admin.brands.index");
    }

    public function destroy($brand)
    {
        $this->removeImage($this->brandModel::PATH . '/' . $brand->getRawOriginal('image'));
        $brand->delete();

        toast('Congrats brand deleted Successfully 😍 ', 'success');
        return redirect()->route("admin.brands.index");
    }
}
