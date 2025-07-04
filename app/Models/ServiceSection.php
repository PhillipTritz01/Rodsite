<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class ServiceSection extends Model
{
    protected $fillable = [
        'service_id',
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

    // Relationships
    public function service()
    {
        return $this->belongsTo(Service::class);
    }

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

    // Get placeholder image based on service type
    private function getPlaceholderImage()
    {
        if ($this->service) {
            return $this->service->placeholder_image;
        }
        return 'https://images.unsplash.com/photo-1552664730-d307ca884978?w=1200&h=800&fit=crop&auto=format';
    }
} 