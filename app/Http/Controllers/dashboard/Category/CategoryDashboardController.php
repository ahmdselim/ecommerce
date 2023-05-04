<?php

namespace App\Http\Controllers\dashboard\Category;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\dashboard\CategoryDashboardInterface;
use App\Http\Requests\Category\StoreCategoryRequest;
use App\Http\Requests\Category\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryDashboardController extends Controller
{
    private $categoryDashboardInterface;

    public function __construct(CategoryDashboardInterface $categoryDashboardInterface)
    {
        $this->categoryDashboardInterface = $categoryDashboardInterface;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->categoryDashboardInterface->index();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return $this->categoryDashboardInterface->create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        return $this->categoryDashboardInterface->store($request);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return $this->categoryDashboardInterface->edit($category);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        return $this->categoryDashboardInterface->update($request, $category);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        return $this->categoryDashboardInterface->destroy($category);
    }
}
