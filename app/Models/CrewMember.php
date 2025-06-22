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
}
