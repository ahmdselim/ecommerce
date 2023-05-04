<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Brand extends Model
{
    use HasFactory, HasTranslations;

    public $table = "brands";
    public $translatable = ['name'];

    protected $fillable = ["name", "image"];

    const PATH = "assets/uploads/brands";

    public function getImageAttribute($image)
    {
        return asset(self::PATH) . DIRECTORY_SEPARATOR . $image;
    }

    public function getCreatedAtAttribute($date)
    {
        $customDate = new Carbon($date);
        return $customDate->diffForHumans();
    }

    public function ads()
    {
        return $this->belongsToMany(Ad::class, "ads_brands", "brand_id", "ad_id");
    }
}
