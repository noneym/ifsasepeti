<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('sites', function (Blueprint $table) {
            $table->string('screenshot_path')->nullable()->after('logo_emoji');
            $table->string('tagline')->nullable()->after('description');
            $table->longText('review_long')->nullable()->after('review');
            $table->json('pros')->nullable()->after('review_long');
            $table->json('cons')->nullable()->after('pros');
            $table->string('meta_title')->nullable();
            $table->string('meta_description', 320)->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('sites', function (Blueprint $table) {
            $table->dropColumn([
                'screenshot_path', 'tagline', 'review_long',
                'pros', 'cons', 'meta_title', 'meta_description',
            ]);
        });
    }
};
