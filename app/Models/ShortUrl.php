<?php

namespace App\Models;
use Tuupola\Base62;
use Illuminate\Database\Eloquent\Model;

class ShortUrl extends Model
{
    protected $fillable = ['original_url', 'short_code', 'clicks'];

    public static function boot()
    {
        parent::boot();
        static::creating(function ($shortUrl) {
            $base62 = new Base62();
            $shortUrl->short_code = $base62->encode(time()); // Ensures uniqueness
        });
    }
}

