<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class U_id extends Model
{
    use HasFactory;

    // 主キーの指定（'u_id' を主キーとして指定）
    protected $primaryKey = 'u_id';

    // 挿入を許可するカラムを指定
    protected $fillable = [
        'u_name',         // 社員名（必須）
        'password',        // パスワード（必須）
        'd_id',   // 部署ID（必須）
        'user_code', // 社員コード（必須）
        'remember_token',          // 予備（NULL許容）
    ];
            //リレーションシップの作成
    public function department(){
        return $this->belongsTo(D_id::class);
    }
}
