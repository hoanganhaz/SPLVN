<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'content',
        'description',
        'thumbnail',
    ];
     public static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            if (empty($post->slug)) {
                $post->slug = Str::slug($post->title);
            }
        });

        static::updating(function ($post) {
            if ($post->isDirty('title')) {
                $post->slug = Str::slug($post->title);
            }
        });
        
}
public function getFormattedDateAttribute()
    {
        return $this->created_at->format('F d, Y');
    }

    // Format ngày tháng tiếng Việt
    public function getFormattedDateViAttribute()
    {
        return $this->created_at->format('d/m/Y');
    }
}
