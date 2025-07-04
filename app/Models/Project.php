<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'type',
        'image_url',
        'image_path',
        'video_url',
        'gallery',
        'client',
        'completion_date',
        'featured',
        'published',
        'sort_order'
    ];

    protected $casts = [
        'gallery' => 'array',
        'featured' => 'boolean',
        'published' => 'boolean',
        'completion_date' => 'date'
    ];

    // Auto-generate slug from title
    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($project) {
            if (empty($project->slug)) {
                $project->slug = Str::slug($project->title);
            }
        });
    }

    // Scopes
    public function scopePublished($query)
    {
        return $query->where('published', true);
    }

    public function scopeFeatured($query)
    {
        return $query->where('featured', true);
    }

    public function scopeByType($query, $type)
    {
        return $query->where('type', $type);
    }

    // Get placeholder image URL based on project type
    public function getPlaceholderImageAttribute()
    {
        $placeholders = [
            'film' => 'https://images.unsplash.com/photo-1489599328050-8d548c4c9d4c?w=600&h=400&fit=crop&auto=format',
            'photography' => 'https://images.unsplash.com/photo-1554048612-b6a482b224dd?w=600&h=400&fit=crop&auto=format',
            'graphic_design' => 'https://images.unsplash.com/photo-1561070791-2526d30994b5?w=600&h=400&fit=crop&auto=format',
            'other' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?w=600&h=400&fit=crop&auto=format'
        ];

        return $placeholders[$this->type] ?? $placeholders['other'];
    }

    // Get the image URL with fallback to placeholder (prioritizes uploaded file over URL)
    public function getImageAttribute()
    {
        if ($this->image_path && file_exists(storage_path('app/public/' . $this->image_path))) {
            return asset('storage/' . $this->image_path);
        }
        
        return $this->image_url ?: $this->placeholder_image;
    }

    // Check if project has an uploaded image
    public function hasUploadedImage()
    {
        return $this->image_path && file_exists(storage_path('app/public/' . $this->image_path));
    }

    // Get gallery images with proper URLs
    public function getGalleryImagesAttribute()
    {
        if (!$this->gallery || !is_array($this->gallery)) {
            return [];
        }
        
        return array_map(function($imagePath) {
            return asset('storage/' . $imagePath);
        }, $this->gallery);
    }

    // Check if project has gallery images
    public function hasGallery()
    {
        return $this->gallery && is_array($this->gallery) && count($this->gallery) > 0;
    }
}
