<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'thumbnail',
        'tag',
        'author',
        'content',
        'read_time',
    ];

    // Auto-generate slug dari title
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($post) {
            $post->slug = Str::slug($post->title);
        });
    }
    
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;
}
