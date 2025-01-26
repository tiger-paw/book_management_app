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
        Schema::create('users', function (Blueprint $table) {
            $table->id('u_id'); // 主キーをu_idに変更
            $table->string('u_name'); // ユーザー名
            $table->string('password'); // パスワード
            $table->unsignedBigInteger('d_id'); // 部署ID（外部キー）
            $table->string('user_code'); // ユーザーコード
            $table->rememberToken();
            $table->timestamps();

            // 外部キー制約
            $table->foreign('d_id')->references('d_id')->on('departments')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
