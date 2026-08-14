<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;

    // Optional: allow mass assignment for these fields later
    protected $fillable = ['title', 'slug', 'excerpt', 'body', 'image_path'];

    protected static function boot()
    {
        parent::boot();

        // This runs automatically every time a new Post is created
        static::creating(function ($blog) {
            
            // 1. Create the initial slug from the title
            $slug = Str::slug($blog->title);
            $originalSlug = $slug;
            $count = 1;

            // 2. Check the database to see if this slug already exists
            // If it does, append a number and check again
            while (static::where('slug', $slug)->exists()) {
                $slug = "{$originalSlug}-{$count}";
                $count++;
            }

            // 3. Assign the guaranteed unique slug to the post
            $blog->slug = $slug;
        });
    }
}
