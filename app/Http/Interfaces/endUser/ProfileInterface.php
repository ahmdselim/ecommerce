<?php

namespace App\Http\Interfaces\endUser;

interface ProfileInterface
{
    public function index();
    public function update($request, $id);
}
