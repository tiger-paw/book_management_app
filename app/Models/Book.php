<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // 追加
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // 追加
    use HasFactory;

    // primaryKey：主キーの指定（'b_id' を主キーとして指定）
    protected $primaryKey = 'b_id'; //書籍ID

    // fillable：データ登録・更新をを許可するカラムを指定
    protected $fillable = [
        'title',         // 書籍タイトル（必須）
        'author',        // 著者名（NULL許容）
        'description',   // 書籍の説明（NULL許容）
        'published_date', // 出版日（NULL許容）
        'ISBN',          // ISBN（NULL許容）
        'image_url',     // 画像URL（NULL許容）
    ];

    // 日付型のカラムを指定（'published_date' を日付型として扱う）
    protected $dates = [
        'published_date', // 出版日
    ];

    // リレーションシップの設定
    // 相手テーブル名（複数形）：reviews
    public function reviews(){
        return $this->hasMany(Review::class, 'b_id');
        // 相手モデル名（単数形）：Review
    }

}
