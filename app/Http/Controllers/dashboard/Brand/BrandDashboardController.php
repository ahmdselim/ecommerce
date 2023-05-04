<?php

namespace App\Http\Controllers\dashboard\Brand;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\dashboard\BrandsDashboardInterface;
use App\Http\Requests\Brand\StoreBrandRequest;
use App\Http\Requests\Brand\UpdateBrandRequest;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandDashboardController extends Controller
{
    private $brandsDashboardInterface;

    public function __construct(BrandsDashboardInterface $brandsDashboardInterface)
    {
        $this->brandsDashboardInterface  = $brandsDashboardInterface;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->brandsDashboardInterface->index();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return $this->brandsDashboardInterface->create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBrandRequest $request)
    {
        return $this->brandsDashboardInterface->store($request);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        return $this->brandsDashboardInterface->edit($brand);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBrandRequest $request, Brand $brand)
    {
        return $this->brandsDashboardInterface->update($request, $brand);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        return $this->brandsDashboardInterface->destroy($brand);
    }
}
