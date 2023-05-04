<?php

namespace App\Http\Controllers\endUser\MyAds;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\endUser\MyAdsInterface;
use App\Models\Ad;
use Illuminate\Http\Request;

class MyAdsController extends Controller
{
    private $myAdsInterface;

    public function __construct(MyAdsInterface $myAdsInterface)
    {
        $this->myAdsInterface = $myAdsInterface;
    }


    public function index()
    {
        return $this->myAdsInterface->index();
    }

    public function addToBookmark(Request $request, string $id)
    {
        return $this->myAdsInterface->addToBookmark($request, $id);
    }
}
