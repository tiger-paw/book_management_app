<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('users')->truncate();

        DB::table('users')->insert([
            ['u_id' => 1, 'u_name' => '山田太郎', 'password' => 'password', 'd_id' => 1, 'user_code' => 'general', 'created_at' => now(), 'updated_at' => now()],
            ['u_id' => 2, 'u_name' => '佐藤花子', 'password' => 'password', 'd_id' => 2, 'user_code' => 'admin', 'created_at' => now(), 'updated_at' => now()],
            ['u_id' => 3, 'u_name' => '鈴木一郎', 'password' => 'password', 'd_id' => 1, 'user_code' => 'general', 'created_at' => now(), 'updated_at' => now()],
            ['u_id' => 4, 'u_name' => '田中美咲', 'password' => 'password', 'd_id' => 2, 'user_code' => 'admin', 'created_at' => now(), 'updated_at' => now()],
            ['u_id' => 5, 'u_name' => '高橋健太', 'password' => 'password', 'd_id' => 1, 'user_code' => 'general', 'created_at' => now(), 'updated_at' => now()],
            ['u_id' => 6, 'u_name' => '山本真理', 'password' => 'password', 'd_id' => 2, 'user_code' => 'admin', 'created_at' => now(), 'updated_at' => now()],
            ['u_id' => 7, 'u_name' => '伊藤愛', 'password' => 'password', 'd_id' => 1, 'user_code' => 'general', 'created_at' => now(), 'updated_at' => now()],
            ['u_id' => 8, 'u_name' => '渡辺裕子', 'password' => 'password', 'd_id' => 2, 'user_code' => 'admin', 'created_at' => now(), 'updated_at' => now()],
            ['u_id' => 9, 'u_name' => '中村和也', 'password' => 'password', 'd_id' => 1, 'user_code' => 'general', 'created_at' => now(), 'updated_at' => now()],
            ['u_id' => 10, 'u_name' => '加藤真理子', 'password' => 'password', 'd_id' => 2, 'user_code' => 'admin', 'created_at' => now(), 'updated_at' => now()],
            ['u_id' => 11, 'u_name' => '吉田誠', 'password' => 'password', 'd_id' => 1, 'user_code' => 'general', 'created_at' => now(), 'updated_at' => now()],
            ['u_id' => 12, 'u_name' => '小林直樹', 'password' => 'password', 'd_id' => 2, 'user_code' => 'admin', 'created_at' => now(), 'updated_at' => now()],
            ['u_id' => 13, 'u_name' => '藤田理恵', 'password' => 'password', 'd_id' => 1, 'user_code' => 'general', 'created_at' => now(), 'updated_at' => now()],
            ['u_id' => 14, 'u_name' => '岡田翔太', 'password' => 'password', 'd_id' => 2, 'user_code' => 'admin', 'created_at' => now(), 'updated_at' => now()],
            ['u_id' => 15, 'u_name' => '西村雄太', 'password' => 'password', 'd_id' => 1, 'user_code' => 'general', 'created_at' => now(), 'updated_at' => now()],
            ['u_id' => 16, 'u_name' => '高山茜', 'password' => 'password', 'd_id' => 2, 'user_code' => 'admin', 'created_at' => now(), 'updated_at' => now()],
            ['u_id' => 17, 'u_name' => '大野絵里', 'password' => 'password', 'd_id' => 1, 'user_code' => 'general', 'created_at' => now(), 'updated_at' => now()],
            ['u_id' => 18, 'u_name' => '小田亮', 'password' => 'password', 'd_id' => 2, 'user_code' => 'admin', 'created_at' => now(), 'updated_at' => now()],
            ['u_id' => 19, 'u_name' => '近藤千春', 'password' => 'password', 'd_id' => 1, 'user_code' => 'general', 'created_at' => now(), 'updated_at' => now()],
            ['u_id' => 20, 'u_name' => '村田美紀', 'password' => 'password', 'd_id' => 2, 'user_code' => 'admin', 'created_at' => now(), 'updated_at' => now()],
            ['u_id' => 21, 'u_name' => '斉藤翔', 'password' => 'password', 'd_id' => 1, 'user_code' => 'general', 'created_at' => now(), 'updated_at' => now()],
            ['u_id' => 22, 'u_name' => '浜田夏美', 'password' => 'password', 'd_id' => 2, 'user_code' => 'admin', 'created_at' => now(), 'updated_at' => now()],
            ['u_id' => 23, 'u_name' => '松本悠太', 'password' => 'password', 'd_id' => 1, 'user_code' => 'general', 'created_at' => now(), 'updated_at' => now()],
            ['u_id' => 24, 'u_name' => '山崎麻衣', 'password' => 'password', 'd_id' => 2, 'user_code' => 'admin', 'created_at' => now(), 'updated_at' => now()],
            ['u_id' => 25, 'u_name' => '木村哲也', 'password' => 'password', 'd_id' => 1, 'user_code' => 'general', 'created_at' => now(), 'updated_at' => now()],
            ['u_id' => 26, 'u_name' => '森下優子', 'password' => 'password', 'd_id' => 2, 'user_code' => 'admin', 'created_at' => now(), 'updated_at' => now()],
            ['u_id' => 27, 'u_name' => '藤井佳代', 'password' => 'password', 'd_id' => 1, 'user_code' => 'general', 'created_at' => now(), 'updated_at' => now()],
            ['u_id' => 28, 'u_name' => '井上亮', 'password' => 'password', 'd_id' => 2, 'user_code' => 'admin', 'created_at' => now(), 'updated_at' => now()],
            ['u_id' => 29, 'u_name' => '松井千尋', 'password' => 'password', 'd_id' => 1, 'user_code' => 'general', 'created_at' => now(), 'updated_at' => now()],
            ['u_id' => 30, 'u_name' => '中島誠', 'password' => 'password', 'd_id' => 2, 'user_code' => 'admin', 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
