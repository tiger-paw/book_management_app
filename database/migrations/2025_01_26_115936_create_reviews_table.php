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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id('r_id'); // 主キー
            $table->tinyInteger('rating')->unsigned(); // 評価
            $table->text('comment'); // レビューコメント
            $table->unsignedBigInteger('u_id'); // ユーザーID（外部キー）
            $table->unsignedBigInteger('b_id'); // 書籍ID（外部キー）
            $table->timestamps();

            // 外部キー制約
            $table->foreign('u_id')->references('u_id')->on('users')->onDelete('cascade');
            $table->foreign('b_id')->references('b_id')->on('books')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
