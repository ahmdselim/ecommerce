<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdsImage extends Model
{
    use HasFactory;

    const PATH = "assets/uploads/ads";

    protected $fillable = ["ad_id", "image"];

    public function getImageAttribute($image)
    {
        return asset(self::PATH) . DIRECTORY_SEPARATOR . $image;
    }
}
