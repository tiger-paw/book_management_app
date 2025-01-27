<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // 追加
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    // 主キーの指定（'r_id' を主キーとして指定）
    protected $primaryKey = 'r_id';

    // 挿入を許可するカラムを指定
    protected $fillable = [
        'rating', // 評価（必須）
        'comment', // レビューコメント
    ];

    public function book() // 書籍ID（外部キー）
    {
        return $this->belongsTo(Book::class);
    }

    public function user() // ユーザーID（外部キー）
    {
        return $this->belongsTo(User::class);
    }
}