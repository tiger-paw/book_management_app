<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'u_name' => '佐藤 太郎',
                'password' => bcrypt('password'),
                'd_id' => 1,
                'user_code' => '一般',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'u_name' => '鈴木 花子',
                'password' => bcrypt('password'),
                'd_id' => 2,
                'user_code' => '総務',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'u_name' => '高橋 一郎',
                'password' => bcrypt('password'),
                'd_id' => 1,
                'user_code' => '一般',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'u_name' => '田中 美咲',
                'password' => bcrypt('password'),
                'd_id' => 2,
                'user_code' => '総務',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'u_name' => '中村 健太',
                'password' => bcrypt('password'),
                'd_id' => 1,
                'user_code' => '一般',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'u_name' => '小林 直子',
                'password' => bcrypt('password'),
                'd_id' => 2,
                'user_code' => '総務',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'u_name' => '山本 昇',
                'password' => bcrypt('password'),
                'd_id' => 1,
                'user_code' => '一般',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'u_name' => '森 由美',
                'password' => bcrypt('password'),
                'd_id' => 2,
                'user_code' => '総務',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'u_name' => '池田 翔',
                'password' => bcrypt('password'),
                'd_id' => 1,
                'user_code' => '一般',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'u_name' => '石田 美穂',
                'password' => bcrypt('password'),
                'd_id' => 2,
                'user_code' => '総務',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

// namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// use Illuminate\Database\Seeder;

// class UsersTableSeeder extends Seeder
// {
//     /**
//      * Run the database seeds.
//      */
//     public function run(): void
//     {
//         //
//     }
// }
