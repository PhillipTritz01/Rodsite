<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class FilmSection extends Model
{
    protected $fillable = [
        'title',
        'description',
        'button_text',
        'button_url',
        'video_url',
        'thumbnail_url',
        'thumbnail_path',
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

    // Get the thumbnail URL with fallback to placeholder
    public function getThumbnailAttribute()
    {
        if ($this->thumbnail_path && Storage::disk('public')->exists($this->thumbnail_path)) {
            return Storage::url($this->thumbnail_path);
        }
        return $this->thumbnail_url ?: $this->getPlaceholderThumbnail();
    }

    // Check if uploaded thumbnail exists
    public function hasUploadedThumbnail()
    {
        return $this->thumbnail_path && Storage::disk('public')->exists($this->thumbnail_path);
    }

    // Get placeholder thumbnail based on title
    private function getPlaceholderThumbnail()
    {
        $titleLower = strtolower($this->title);
        
        $placeholders = [
            'music' => 'https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=1200&h=800&fit=crop&auto=format',
            'commercial' => 'https://images.unsplash.com/photo-1485846234645-a62644f84728?w=1200&h=800&fit=crop&auto=format',
            'short film' => 'https://images.unsplash.com/photo-1489599328050-8d548c4c9d4c?w=1200&h=800&fit=crop&auto=format',
            'event' => 'https://images.unsplash.com/photo-1511795409834-ef04bbd61622?w=1200&h=800&fit=crop&auto=format',
            'documentary' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=1200&h=800&fit=crop&auto=format',
            'streaming' => 'https://images.unsplash.com/photo-1516450360452-9312f5e86fc7?w=1200&h=800&fit=crop&auto=format'
        ];

        foreach ($placeholders as $keyword => $placeholder) {
            if (str_contains($titleLower, $keyword)) {
                return $placeholder;
            }
        }

        return 'https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=1200&h=800&fit=crop&auto=format';
    }
} 