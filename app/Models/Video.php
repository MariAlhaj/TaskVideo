<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'url',
        'subcategory_id'
    ];
    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($video) {
            $video->ratings()->delete();
            $video->likes()->delete();

        });
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
     }
     public function likes()
     {
         return $this->hasMany(Like::class);
     }

     public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    public function category()
    {
        return $this->belongsToThrough(Category::class, Subcategory::class);
    }

}
