<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class PhotographySection extends Model
{
    protected $fillable = [
        'title',
        'description',
        'button_text',
        'button_url',
        'image_url',
        'image_path',
        'sort_order',
        'published'
    ];

    protected $casts = [
        'published' => 'boolean'
    ];

    // Scopes
    public function scopePublished($query)
    {
        return $query->where('published', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order')->orderBy('id');
    }

    // Get the image URL with fallback to placeholder
    public function getImageAttribute()
    {
        if ($this->image_path && Storage::disk('public')->exists($this->image_path)) {
            return Storage::url($this->image_path);
        }
        return $this->image_url ?: $this->getPlaceholderImage();
    }

    // Check if uploaded image exists
    public function hasUploadedImage()
    {
        return $this->image_path && Storage::disk('public')->exists($this->image_path);
    }

    // Get placeholder image based on title
    private function getPlaceholderImage()
    {
        $titleLower = strtolower($this->title);
        
        $placeholders = [
            'air show' => '/storage/air-show/DSC_1244.jpg',
            'portrait' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=1200&h=800&fit=crop&auto=format',
            'wedding' => 'https://images.unsplash.com/photo-1519741497674-611481863552?w=1200&h=800&fit=crop&auto=format',
            'commercial' => 'https://images.unsplash.com/photo-1560472354-b33ff0c44a43?w=1200&h=800&fit=crop&auto=format',
            'event' => 'https://images.unsplash.com/photo-1511795409834-ef04bbd61622?w=1200&h=800&fit=crop&auto=format',
            'lifestyle' => 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=1200&h=800&fit=crop&auto=format',
            'real estate' => 'https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=1200&h=800&fit=crop&auto=format'
        ];

        foreach ($placeholders as $keyword => $placeholder) {
            if (str_contains($titleLower, $keyword)) {
                return $placeholder;
            }
        }

        return 'https://images.unsplash.com/photo-1554048612-b6a482b224dd?w=1200&h=800&fit=crop&auto=format';
    }
} 