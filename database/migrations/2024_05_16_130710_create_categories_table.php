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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('カテゴリー名');
            $table->text('description')->nullable()->comment('カテゴリーの説明');
            // $table->string('slug')->unique()->comment('カテゴリーのスラッグ');
            $table->string('image_url')->nullable()->comment('カテゴリーの画像のURL');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
