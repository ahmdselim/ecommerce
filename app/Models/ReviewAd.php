<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewAd extends Model
{
    use HasFactory;

    protected $fillable = ["ad_id", "user_id", "comment"];

    public function replayViews()
    {
        return $this->hasMany(ReplayReviewAd::class);
    }

    public function getCreatedAtAttribute($date)
    {
        $customDate = new Carbon($date);
        return $customDate->diffForHumans();
    }
}
