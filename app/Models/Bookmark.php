<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    use HasFactory;

    protected $fillable = ["user_id", "ad_id"];

    public function ads()
    {
        return $this->belongsTo(Ad::class);
    }
}
