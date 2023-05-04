<?php

namespace App\Http\Controllers\dashboard\Department;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\dashboard\DepartmentDashboardInterface;
use App\Http\Requests\Department\StoreDepartmentRequest;
use App\Http\Requests\Department\UpdateDepartmentRequest;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentDashboardController extends Controller
{

    private $departmentDashboardInterface;

    public function __construct(DepartmentDashboardInterface $departmentDashboardInterface)
    {
        $this->departmentDashboardInterface = $departmentDashboardInterface;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->departmentDashboardInterface->index();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return $this->departmentDashboardInterface->create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDepartmentRequest $request)
    {
        return $this->departmentDashboardInterface->store($request);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Department $department)
    {
        return $this->departmentDashboardInterface->edit($department);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDepartmentRequest $request, Department $department)
    {
        return $this->departmentDashboardInterface->update($request, $department);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $department)
    {
        return $this->departmentDashboardInterface->destroy($department);
    }
}
