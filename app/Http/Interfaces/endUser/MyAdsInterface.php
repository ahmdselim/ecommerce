<?php

namespace App\Http\Interfaces\endUser;

interface MyAdsInterface
{
    public function index();
    public function addToBookmark($request, $id);
}
