<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'video_id',
        'rating'//number of stars
    ];

    public function video(){
        return $this->belongsTo(Video::class);
     }
     public function user(){
         return $this->hasMany(User::class);
     }
}
