<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Service extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'features',
        'icon',
        'image_url',
        'price_from',
        'featured',
        'published',
        'sort_order',
        'is_active'
    ];

    protected $casts = [
        'featured' => 'boolean',
        'published' => 'boolean',
        'price_from' => 'decimal:2',
        'features' => 'array',
        'is_active' => 'boolean'
    ];

    // Auto-generate slug from title
    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($service) {
            if (empty($service->slug)) {
                $service->slug = Str::slug($service->title);
            }
            if (is_null($service->sort_order)) {
                $service->sort_order = static::max('sort_order') + 1;
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

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order');
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    // Helper methods
    public function getFeaturesListAttribute()
    {
        return is_array($this->features) ? $this->features : [];
    }

    public function getFeaturesTextAttribute()
    {
        if (is_array($this->features)) {
            return implode("\n", $this->features);
        }
        return '';
    }

    // Get placeholder image URL based on service icon or title
    public function getPlaceholderImageAttribute()
    {
        // Service-specific placeholders based on common service types
        $serviceKeywords = [
            'film' => 'https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=600&h=400&fit=crop&auto=format',
            'video' => 'https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=600&h=400&fit=crop&auto=format',
            'photo' => 'https://images.unsplash.com/photo-1554048612-b6a482b224dd?w=600&h=400&fit=crop&auto=format',
            'design' => 'https://images.unsplash.com/photo-1561070791-2526d30994b5?w=600&h=400&fit=crop&auto=format',
            'graphic' => 'https://images.unsplash.com/photo-1561070791-2526d30994b5?w=600&h=400&fit=crop&auto=format'
        ];

        $titleLower = strtolower($this->title);
        
        foreach ($serviceKeywords as $keyword => $placeholder) {
            if (str_contains($titleLower, $keyword)) {
                return $placeholder;
            }
        }

        // Default service placeholder
        return 'https://images.unsplash.com/photo-1552664730-d307ca884978?w=600&h=400&fit=crop&auto=format';
    }

    // Get the image URL with fallback to placeholder
    public function getImageAttribute()
    {
        return $this->image_url ?: $this->placeholder_image;
    }
}
