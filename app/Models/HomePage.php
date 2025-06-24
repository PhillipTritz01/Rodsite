<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class HomePage extends Model
{
    protected $fillable = [
        'hero_title',
        'hero_subtitle',
        'hero_description',
        'hero_video_url',
        'hero_video_path',
        'hero_poster_url',
        'hero_poster_path',
        'hero_button_text',
        'hero_button_url',
        'about_title',
        'about_description',
        'services_title',
        'services_description',
        'contact_title',
        'contact_description',
        'fullscreen_photo_url',
        'fullscreen_photo_path',
        'film_service_bg_url',
        'film_service_bg_path',
        'photography_service_bg_url',
        'photography_service_bg_path',
        'design_service_bg_url',
        'design_service_bg_path',
        'other_service_bg_url',
        'other_service_bg_path',
    ];

    // Helper methods for background images
    public function getHeroVideoAttribute()
    {
        if ($this->hero_video_path && Storage::disk('public')->exists($this->hero_video_path)) {
            return Storage::url($this->hero_video_path);
        }
        return $this->hero_video_url ?: 'https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4';
    }

    public function getHeroPosterAttribute()
    {
        if ($this->hero_poster_path && Storage::disk('public')->exists($this->hero_poster_path)) {
            return Storage::url($this->hero_poster_path);
        }
        return $this->hero_poster_url ?: 'https://images.unsplash.com/photo-1478720568477-b2709d1e07c6?w=1920&h=1080&fit=crop&auto=format';
    }

    public function getFullscreenPhotoAttribute()
    {
        if ($this->fullscreen_photo_path && Storage::disk('public')->exists($this->fullscreen_photo_path)) {
            return Storage::url($this->fullscreen_photo_path);
        }
        return $this->fullscreen_photo_url ?: 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=1920&h=1080&fit=crop&auto=format';
    }

    public function getFilmServiceBgAttribute()
    {
        if ($this->film_service_bg_path && Storage::disk('public')->exists($this->film_service_bg_path)) {
            return Storage::url($this->film_service_bg_path);
        }
        return $this->film_service_bg_url ?: 'https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=1200&h=800&fit=crop&auto=format';
    }

    public function getPhotographyServiceBgAttribute()
    {
        if ($this->photography_service_bg_path && Storage::disk('public')->exists($this->photography_service_bg_path)) {
            return Storage::url($this->photography_service_bg_path);
        }
        return $this->photography_service_bg_url ?: 'https://images.unsplash.com/photo-1606983340126-99ab4feaa64a?w=1200&h=800&fit=crop&auto=format';
    }

    public function getDesignServiceBgAttribute()
    {
        if ($this->design_service_bg_path && Storage::disk('public')->exists($this->design_service_bg_path)) {
            return Storage::url($this->design_service_bg_path);
        }
        return $this->design_service_bg_url ?: 'https://images.unsplash.com/photo-1561070791-2526d30994b5?w=1200&h=800&fit=crop&auto=format';
    }

    public function getOtherServiceBgAttribute()
    {
        if ($this->other_service_bg_path && Storage::disk('public')->exists($this->other_service_bg_path)) {
            return Storage::url($this->other_service_bg_path);
        }
        return $this->other_service_bg_url ?: 'https://images.unsplash.com/photo-1552664730-d307ca884978?w=1200&h=800&fit=crop&auto=format';
    }

    // Check if uploaded files exist
    public function hasUploadedHeroVideo()
    {
        return $this->hero_video_path && Storage::disk('public')->exists($this->hero_video_path);
    }

    public function hasUploadedHeroPoster()
    {
        return $this->hero_poster_path && Storage::disk('public')->exists($this->hero_poster_path);
    }

    public function hasUploadedFullscreenPhoto()
    {
        return $this->fullscreen_photo_path && Storage::disk('public')->exists($this->fullscreen_photo_path);
    }
}
