<?php

namespace App\Http\Interfaces\endUser;

interface MessageInterface
{
    public function index($id);
    public function store($request, $id);
}
