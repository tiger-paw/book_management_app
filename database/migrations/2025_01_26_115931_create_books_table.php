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
        Schema::create('books', function (Blueprint $table) {
            $table->id('b_id'); // 主キー
            $table->string('title'); // 書籍タイトル（必須）
            $table->string('author')->nullable(); // 著者名（NULL許容）
            $table->text('description')->nullable(); // 書籍の説明（NULL許容）
            $table->date('published_date')->nullable(); // 出版日（NULL許容）
            $table->string('ISBN')->nullable(); // ISBN（NULL許容）
            $table->string('image_url')->nullable(); // 画像URL（NULL許容）
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
