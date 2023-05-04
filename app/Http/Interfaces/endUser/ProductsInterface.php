<?php

namespace App\Http\Interfaces\endUser;

interface ProductsInterface
{
    public function create();
    public function store($request);
}
