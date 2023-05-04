<?php

namespace App\Http\Controllers\endUser\Product;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\endUser\ProductsInterface;
use App\Http\Requests\Products\StoreProductRequest;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    private $productsInterface;

    public function __construct(ProductsInterface $productsInterface)
    {
        $this->productsInterface = $productsInterface;
    }

    public function create()
    {
        return $this->productsInterface->create();
    }

    public function store(StoreProductRequest $request)
    {
        return $this->productsInterface->store($request);
    }
}
