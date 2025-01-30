<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    // primaryKey：主キーの指定（'u_id' を主キーとして指定）
    protected $primaryKey = 'u_id'; // ユーザーID（ログインID）

    // リレーションシップの設定
    // 相手テーブル名（複数形）：reviews
    public function reviews(){
        return $this->hasMany(Review::class);
        // 相手モデル名（単数形）：Review
    }

    // ここから以下はデフォルトの記述です

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'u_name',         // 社員名（必須）
        'password',        // パスワード（必須）
        'd_id',   // 部署ID（必須）
        'user_code', // 社員コード（必須）
        'remember_token',          // 予備（NULL許容）
    ];
    //リレーションシップの作成
    public function department(){
        return $this->belongsTo(Department::class);
    }

    public function review(){
        return $this->hasMany(Review::class, 'u_id', 'u_id');
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
