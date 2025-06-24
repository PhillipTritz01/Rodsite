<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('home_pages', function (Blueprint $table) {
            // Check if columns don't exist before adding them
            if (!Schema::hasColumn('home_pages', 'hero_video_url')) {
                $table->string('hero_video_url')->nullable();
            }
            if (!Schema::hasColumn('home_pages', 'hero_video_path')) {
                $table->string('hero_video_path')->nullable();
            }
            if (!Schema::hasColumn('home_pages', 'hero_poster_url')) {
                $table->string('hero_poster_url')->nullable();
            }
            if (!Schema::hasColumn('home_pages', 'hero_poster_path')) {
                $table->string('hero_poster_path')->nullable();
            }
            
            // Full-screen photo section
            if (!Schema::hasColumn('home_pages', 'fullscreen_photo_url')) {
                $table->string('fullscreen_photo_url')->nullable();
            }
            if (!Schema::hasColumn('home_pages', 'fullscreen_photo_path')) {
                $table->string('fullscreen_photo_path')->nullable();
            }
            
            // Service section backgrounds
            if (!Schema::hasColumn('home_pages', 'film_service_bg_url')) {
                $table->string('film_service_bg_url')->nullable();
            }
            if (!Schema::hasColumn('home_pages', 'film_service_bg_path')) {
                $table->string('film_service_bg_path')->nullable();
            }
            if (!Schema::hasColumn('home_pages', 'photography_service_bg_url')) {
                $table->string('photography_service_bg_url')->nullable();
            }
            if (!Schema::hasColumn('home_pages', 'photography_service_bg_path')) {
                $table->string('photography_service_bg_path')->nullable();
            }
            if (!Schema::hasColumn('home_pages', 'design_service_bg_url')) {
                $table->string('design_service_bg_url')->nullable();
            }
            if (!Schema::hasColumn('home_pages', 'design_service_bg_path')) {
                $table->string('design_service_bg_path')->nullable();
            }
            if (!Schema::hasColumn('home_pages', 'other_service_bg_url')) {
                $table->string('other_service_bg_url')->nullable();
            }
            if (!Schema::hasColumn('home_pages', 'other_service_bg_path')) {
                $table->string('other_service_bg_path')->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('home_pages', function (Blueprint $table) {
            $table->dropColumn([
                'hero_video_url', 'hero_video_path', 'hero_poster_url', 'hero_poster_path',
                'fullscreen_photo_url', 'fullscreen_photo_path',
                'film_service_bg_url', 'film_service_bg_path',
                'photography_service_bg_url', 'photography_service_bg_path',
                'design_service_bg_url', 'design_service_bg_path',
                'other_service_bg_url', 'other_service_bg_path'
            ]);
        });
    }
};
