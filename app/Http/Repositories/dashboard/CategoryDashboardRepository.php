<?php

namespace App\Http\Repositories\dashboard;

use App\Http\Interfaces\dashboard\AdsDashboardInterface;
use App\Http\Interfaces\dashboard\AuthDashboardInterface;
use App\Http\Interfaces\dashboard\CategoryDashboardInterface;
use App\Http\Traits\ImageTrait;
use App\Models\Category;
use App\Models\Department;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CategoryDashboardRepository implements CategoryDashboardInterface
{

    use ImageTrait;

    private $categoryModel;
    private $departmentModel;

    public function __construct(Category $categoryModel, Department $departmentModel)
    {
        $this->categoryModel = $categoryModel;
        $this->departmentModel = $departmentModel;
    }

    public function index()
    {
        $categories = $this->categoryModel::with("department")->get();
        return \view('pages.dashboard.category.index', compact("categories"));
    }

    public function create()
    {
        $departments = $this->departmentModel::get(["name", "id"]);
        return \view('pages.dashboard.category.create', compact("departments"));
    }

    public function store($request)
    {
        $requests = $request->validated();
        $newImageName =  $this->uploadImage($requests["image"], $this->categoryModel::PATH);

        $this->categoryModel::create([
            "name" => ["en" => $requests["name_en"], "ar" => $requests["name_ar"]],
            "image" => $newImageName,
            "department_id" => $requests["department_id"],
        ]);

        toast('Congrats category Added Successfully 😍 ', 'success');
        return redirect()->route("admin.category.index");
    }

    public function edit($category)
    {
        $departments = $this->departmentModel::get(["name", "id"]);
        return \view('pages.dashboard.category.edit', compact("category", "departments"));
    }

    public function update($request, $category)
    {
        $requests = $request->validated();
        if ($request->image) {
            $newImageName =  $this->uploadImage($requests["image"], $this->categoryModel::PATH, $this->categoryModel::PATH . '/' . $category->getRawOriginal('image'));
        }

        $category->update([
            "name" => ["en" => $requests["name_en"] ?? $category->getTranslation("name", "en"), "ar" => $requests["name_ar"] ?? $category->getTranslation("name", "ar")],
            "image" => $newImageName ?? $category->getRawOriginal('image'),
            "department_id" => $requests["department_id"] ?? $category->department_id,
        ]);

        toast('Congrats category updated Successfully 😍 ', 'success');
        return redirect()->route("admin.category.index");
    }

    public function destroy($category)
    {
        $this->removeImage($this->categoryModel::PATH . '/' . $category->getRawOriginal('image'));
        $category->delete();

        toast('Congrats category deleted Successfully 😍 ', 'success');
        return redirect()->route("admin.category.index");
    }
}
