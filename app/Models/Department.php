<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    // 主キーの指定（'d_id' を主キーとして指定）
    protected $primaryKey = 'd_id';

            // 挿入を許可するカラムを指定
    protected $fillable = [
        'd_name',         // 部署名（必須）
        'department_code',        // 部署コード（必須）

    ];
    //リレーションシップの作成
    public function users(){
        return $this->hasMany(User::class);
    }
}
