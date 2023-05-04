<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReplayReviewAd extends Model
{
    use HasFactory;

    public function getCreatedAtAttribute($date)
    {
        $customDate = new Carbon($date);
        return $customDate->diffForHumans();
    }
}
