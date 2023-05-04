<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Product extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [
        "name", "image", "category_id", "user_id", "price", "description", "status",
        "visitors", "condition"
    ];

    public $translatable = ['name'];


    const PATH = "assets/uploads/products";

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function productImages()
    {
        return $this->belongsTo(ProductImage::class);
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
