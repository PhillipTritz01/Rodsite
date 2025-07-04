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
        Schema::table('services', function (Blueprint $table) {
            // Page-specific fields
            $table->text('page_subtitle')->nullable()->after('description');
            $table->string('image_path')->nullable()->after('image_url');
            $table->boolean('has_dedicated_page')->default(false)->after('published');
            $table->string('page_template')->default('default')->after('has_dedicated_page');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn(['page_subtitle', 'image_path', 'has_dedicated_page', 'page_template']);
        });
    }
}; 