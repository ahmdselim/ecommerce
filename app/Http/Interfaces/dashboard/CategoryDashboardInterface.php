<?php

namespace App\Http\Interfaces\dashboard;

interface CategoryDashboardInterface
{
    public function index();
    public function create();
    public function store($request);
    public function edit($department);
    public function update($request, $department);
    public function destroy($department);
}
