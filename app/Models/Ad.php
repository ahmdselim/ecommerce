<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Ad extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = ["name", "image", "category_id", "user_id", "price", "description", "status", "visitors"];

    public $translatable = ['name'];

    const PATH = "assets/uploads/ads";


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function brands()
    {
        return $this->belongsToMany(Brand::class, "ads_brands", "ad_id", "brand_id");
    }

    public function bookmarks()
    {
        return $this->belongsTo(Bookmark::class);
    }

    public function adImages()
    {
        return $this->hasMany(AdsImage::class);
    }

    public function reviews()
    {
        return $this->hasMany(ReviewAd::class);
    }

    public function getCreatedAtAttribute($date)
    {
        $customDate = new Carbon($date);
        return $customDate->diffForHumans();
    }

    public function getImageAttribute($image)
    {
        return asset(self::PATH) . DIRECTORY_SEPARATOR . $image;
    }
}
