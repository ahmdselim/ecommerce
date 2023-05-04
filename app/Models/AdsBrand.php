<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdsBrand extends Model
{
    use HasFactory;

    public $table = "ads_brands";

    protected $fillable = ["ad_id", "brand_id"];
}
