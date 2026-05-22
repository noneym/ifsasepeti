<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sites', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('url');
            $table->string('logo_path')->nullable();
            $table->string('logo_emoji', 16)->nullable();
            $table->text('description')->nullable();
            $table->text('review')->nullable();
            $table->boolean('is_ai')->default(false);
            $table->boolean('is_new')->default(false);
            $table->boolean('is_premium')->default(false);
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_sale')->default(false);
            $table->unsignedInteger('click_count')->default(0);
            $table->unsignedInteger('sort_order')->default(0);
            $table->decimal('rating', 3, 2)->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();

            $table->index(['category_id', 'is_active', 'sort_order']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sites');
    }
};
