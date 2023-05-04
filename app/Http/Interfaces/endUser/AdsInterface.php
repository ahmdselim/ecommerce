<?php

namespace App\Http\Interfaces\endUser;

interface AdsInterface
{
    public function index();
    public function create();
    public function show($id);
    public function store($request);
}
