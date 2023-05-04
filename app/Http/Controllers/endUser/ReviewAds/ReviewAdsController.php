<?php

namespace App\Http\Controllers\endUser\ReviewAds;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\endUser\ReviewAdInterface as EndUserReviewAdInterface;
use App\Http\Requests\ReviewAds\StoreReviewAdRequest;
use Illuminate\Http\Request;

class ReviewAdsController extends Controller
{
    private $reviewAdsInterface;

    public function __construct(EndUserReviewAdInterface $reviewAdsInterface)
    {
        $this->reviewAdsInterface = $reviewAdsInterface;
    }

    public function store(StoreReviewAdRequest $request)
    {
        $this->reviewAdsInterface->store($request);
    }
}
