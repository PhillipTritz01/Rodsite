<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CrewMember extends Model
{
    protected $fillable = [
        'name',
        'role',
        'bio',
        'email',
        'phone',
        'location',
        'image_url',
        'image_path',
        'social_links',
        'core_team',
        'published',
        'sort_order'
    ];

    protected $casts = [
        'social_links' => 'array',
        'core_team' => 'boolean',
        'published' => 'boolean'
    ];

    // Scopes
    public function scopePublished($query)
    {
        return $query->where('published', true);
    }

    public function scopeCoreTeam($query)
    {
        return $query->where('core_team', true);
    }

    public function scopeExtendedTeam($query)
    {
        return $query->where('core_team', false);
    }

    // Helper method to get the image (prioritizes uploaded file over URL)
    public function getImageAttribute()
    {
        if ($this->image_path && file_exists(storage_path('app/public/' . $this->image_path))) {
            return asset('storage/' . $this->image_path);
        }
        
        return $this->image_url ?: 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=400&h=400&fit=crop&crop=face&auto=format';
    }

    // Check if member has an uploaded image
    public function hasUploadedImage()
    {
        return $this->image_path && file_exists(storage_path('app/public/' . $this->image_path));
    }
}
