<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_management extends Model
{
    use HasFactory;

    public function users(){
        return $this->hasMany(D_id::class);
    }
}
