<?php

namespace App\Http\Interfaces\dashboard;

interface BrandsDashboardInterface
{
    public function index();
    public function create();
    public function store($request);
    public function edit($ad);
    public function update($request, $ad);
    public function destroy($ad);
}
