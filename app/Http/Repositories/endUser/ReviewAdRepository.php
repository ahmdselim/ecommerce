<?php

namespace App\Http\Repositories\endUser;

use App\Http\Interfaces\endUser\ReviewAdInterface;
use App\Models\ReviewAd;

class ReviewAdRepository implements ReviewAdInterface
{

    public function store($request)
    {
        $requests = $request->validated();

        $reviewAd = ReviewAd::create([
            "ad_id" => $requests["ad_id"],
            "user_id" => $requests["user_id"],
            "comment" => $requests["comment"],
            "rating" => $requests["rating"]
        ]);

        return response()->json($reviewAd, 200);
    }
}
