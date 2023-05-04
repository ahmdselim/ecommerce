<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = ["sender", "receiver", "message"];

    public function getCreatedAtAttribute($date)
    {
        $customDate = new Carbon($date);

        return $customDate->diffForHumans();
    }
}
