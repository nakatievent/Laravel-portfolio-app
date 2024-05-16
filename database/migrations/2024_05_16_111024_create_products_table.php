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
        Schema::create('products', function (Blueprint $table) {
            $table->id()->comment('ID');

            $table->unsignedInteger('category_id')->comment('商品カテゴリーID');
            $table->unsignedInteger('brand_id')->comment('ブランドID');
            $table->unsignedInteger('review_id')->comment('レビューID');

            // 商品情報
            $table->string('name')->comment('商品名');
            $table->text('description')->nullable()->comment('商品説明');
            $table->unsignedInteger('price')->comment('価格');
            $table->unsignedInteger('stock')->comment('在庫数量');
            $table->string('sku')->unique()->comment('商品管理コード');
            $table->string('image_url')->nullable()->comment('商品画像URL');
            $table->string('brand')->nullable()->comment('ブランド名');
            $table->string('size')->nullable()->comment('サイズ');
            $table->boolean('status')->default(true)->comment('商品ステータス');
            $table->decimal('discount', 5, 2)->nullable()->comment('割引率');
            $table->unsignedInteger('reviews_count')->default(0)->comment('レビュー数');

            // 日付情報
            $table->timestamps();

            // 外部キー制約
            // $table->foreign('category_id')->references('id')->on('categories');
            // $table->foreign('brand_id')->references('id')->on('brands');
            // $table->foreign('review_id')->references('id')->on('reviews');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
