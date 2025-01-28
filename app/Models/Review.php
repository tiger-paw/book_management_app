<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // 追加
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    // 追加
    use HasFactory;

    // primaryKey：主キーの指定（'r_id' を主キーとして指定）
    protected $primaryKey = 'r_id'; //レビューID

    // fillable：データ登録・更新をを許可するカラムを指定
    protected $fillable = [
        'rating', // 評価
        'comment', // コメント
        'u_id', // ログインID（ユーザーID）
        'b_id', // 書籍ID 
    ];

    // リレーションシップの設定
    // 相手テーブル名（単数形）：book
    public function book(){
        return $this->belongsTo(Book::class);
        // 相手モデル名（単数形）：Book
    }
    // 相手テーブル名（単数形）：user
    public function user(){
        return $this->belongsTo(User::class, 'u_id');
        // 相手モデル名（単数形）：User
    }
}
