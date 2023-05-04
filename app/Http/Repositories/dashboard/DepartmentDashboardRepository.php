<?php

namespace App\Http\Repositories\dashboard;

use App\Http\Interfaces\dashboard\AdsDashboardInterface;
use App\Http\Interfaces\dashboard\AuthDashboardInterface;
use App\Http\Interfaces\dashboard\DepartmentDashboardInterface;
use App\Http\Traits\ImageTrait;
use App\Models\Department;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DepartmentDashboardRepository implements DepartmentDashboardInterface
{

    use ImageTrait;

    private $departmentModel;

    public function __construct(Department $departmentModel)
    {
        $this->departmentModel = $departmentModel;
    }

    public function index()
    {
        $departments = $this->departmentModel::get();
        return \view('pages.dashboard.department.index', compact("departments"));
    }

    public function create()
    {
        return \view('pages.dashboard.department.create');
    }

    public function store($request)
    {
        $requests = $request->validated();
        $newImageName =  $this->uploadImage($requests["image"], $this->departmentModel::PATH);

        $this->departmentModel::create([
            "name" => ["en" => $requests["name_en"], "ar" => $requests["name_ar"]],
            "image" => $newImageName
        ]);

        toast('Congrats Department Added Successfully 😍 ', 'success');
        return redirect()->route("admin.department.index");
    }

    public function edit($department)
    {
        return \view('pages.dashboard.department.edit', compact("department"));
    }

    public function update($request, $department)
    {
        $requests = $request->validated();
        if ($request->image) {
            $newImageName =  $this->uploadImage($requests["image"], $this->departmentModel::PATH, $this->departmentModel::PATH . '/' . $department->getRawOriginal('image'));
        }

        $department->update([
            "name" => ["en" => $requests["name_en"], "ar" => $requests["name_ar"]],
            "image" => $newImageName ?? $department->getRawOriginal('image')
        ]);

        toast('Congrats Department updated Successfully 😍 ', 'success');
        return redirect()->route("admin.department.index");
    }

    public function destroy($department)
    {
        $this->removeImage($this->departmentModel::PATH . '/' . $department->getRawOriginal('image'));
        $department->delete();

        toast('Congrats Department deleted Successfully 😍 ', 'success');
        return redirect()->route("admin.department.index");
    }
}
