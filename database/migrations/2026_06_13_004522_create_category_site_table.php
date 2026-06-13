<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('category_site', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
            $table->foreignId('site_id')->constrained()->cascadeOnDelete();
            $table->unsignedInteger('sort_order')->default(0);

            $table->unique(['category_id', 'site_id']);
            $table->index(['category_id', 'sort_order']);
        });

        // Backfill: each site's current primary category becomes its first pivot row
        DB::statement('
            INSERT INTO category_site (category_id, site_id, sort_order)
            SELECT category_id, id, sort_order FROM sites WHERE category_id IS NOT NULL
        ');
    }

    public function down(): void
    {
        Schema::dropIfExists('category_site');
    }
};
