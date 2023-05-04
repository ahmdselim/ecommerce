<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Department extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = ["name", "image"];

    public $translatable = ['name'];

    const PATH = "assets/uploads/department";


    public function getCreatedAtAttribute($date)
    {
        $customDate =   new Carbon($date);
        return $customDate->diffForHumans();
    }

    public function getImageAttribute($image)
    {
        return asset(self::PATH) . DIRECTORY_SEPARATOR . $image;
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
