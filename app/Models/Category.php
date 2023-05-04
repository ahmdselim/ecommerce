<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = ["name", "image", "department_id"];

    public $translatable = ['name'];

    const PATH = "assets/uploads/category";

    public function ad()
    {
        return $this->hasMany(Ad::class);
    }

    public function getImageAttribute($image)
    {
        return asset(self::PATH) . DIRECTORY_SEPARATOR . $image;
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
