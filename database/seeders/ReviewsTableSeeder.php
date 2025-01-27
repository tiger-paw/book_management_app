<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewsTableSeeder extends Seeder
{
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('reviews')->truncate();

        DB::table('reviews')->insert([
            ['r_id' => 1, 'b_id' => 1, 'u_id' => 1, 'rating' => 5, 'comment' => '非常に良い入門書で、Laravelを理解するのに役立ちました。', 'created_at' => now(), 'updated_at' => now()],
            ['r_id' => 2, 'b_id' => 2, 'u_id' => 2, 'rating' => 4, 'comment' => 'PHP初心者にはわかりやすいですが、少し内容が薄いと感じました。', 'created_at' => now(), 'updated_at' => now()],
            ['r_id' => 3, 'b_id' => 3, 'u_id' => 3, 'rating' => 5, 'comment' => 'デザインパターンを学ぶには最適な本です。実際のプロジェクトにも応用できます。', 'created_at' => now(), 'updated_at' => now()],
            ['r_id' => 4, 'b_id' => 4, 'u_id' => 4, 'rating' => 3, 'comment' => 'JavaScript初心者には少し難易度が高いが、内容は深いです。', 'created_at' => now(), 'updated_at' => now()],
            ['r_id' => 5, 'b_id' => 5, 'u_id' => 5, 'rating' => 4, 'comment' => 'データベース設計について理解が深まりましたが、事例がもっと欲しかったです。', 'created_at' => now(), 'updated_at' => now()],
            ['r_id' => 6, 'b_id' => 6, 'u_id' => 6, 'rating' => 5, 'comment' => 'Reactを学ぶにはこの本が非常に有益です。サンプルコードが豊富で実践的でした。', 'created_at' => now(), 'updated_at' => now()],
            ['r_id' => 7, 'b_id' => 7, 'u_id' => 7, 'rating' => 4, 'comment' => 'Pythonと機械学習の基礎を学べる良書。コード例がわかりやすいです。', 'created_at' => now(), 'updated_at' => now()],
            ['r_id' => 8, 'b_id' => 8, 'u_id' => 1, 'rating' => 3, 'comment' => 'Laravelの基本的な使い方は学べましたが、実践的な内容が不足しています。', 'created_at' => now(), 'updated_at' => now()],
            ['r_id' => 9, 'b_id' => 9, 'u_id' => 2, 'rating' => 4, 'comment' => 'デザインパターンを実際に使うための手順がしっかりと書かれています。', 'created_at' => now(), 'updated_at' => now()],
            ['r_id' => 10, 'b_id' => 10, 'u_id' => 3, 'rating' => 5, 'comment' => 'SQLの基礎がしっかりと理解できました。初心者にも非常に親切です。', 'created_at' => now(), 'updated_at' => now()],
            ['r_id' => 11, 'b_id' => 11, 'u_id' => 4, 'rating' => 5, 'comment' => 'Vue.jsの基礎から応用まで網羅的に学べる素晴らしい本です。', 'created_at' => now(), 'updated_at' => now()],
            ['r_id' => 12, 'b_id' => 12, 'u_id' => 5, 'rating' => 4, 'comment' => 'React Nativeの使い方がわかりやすく、モバイルアプリ開発が楽しくなります。', 'created_at' => now(), 'updated_at' => now()],
            ['r_id' => 13, 'b_id' => 13, 'u_id' => 6, 'rating' => 5, 'comment' => 'データ解析の基本を非常に分かりやすく学べます。初心者にもおすすめ。', 'created_at' => now(), 'updated_at' => now()],
            ['r_id' => 14, 'b_id' => 14, 'u_id' => 7, 'rating' => 3, 'comment' => 'Go言語の基本を学べますが、内容が少し薄いと感じました。', 'created_at' => now(), 'updated_at' => now()],
            ['r_id' => 15, 'b_id' => 15, 'u_id' => 1, 'rating' => 5, 'comment' => 'KotlinでAndroidアプリを開発したい人には必須の本です。内容が丁寧に解説されています。', 'created_at' => now(), 'updated_at' => now()],
            ['r_id' => 16, 'b_id' => 16, 'u_id' => 2, 'rating' => 4, 'comment' => 'Javaをしっかり学べる本。内容も充実していますが、初心者には少し難しい部分もありました。', 'created_at' => now(), 'updated_at' => now()],
            ['r_id' => 17, 'b_id' => 17, 'u_id' => 3, 'rating' => 5, 'comment' => 'SwiftでiOSアプリを作るために必要な知識がこの本で学べました。', 'created_at' => now(), 'updated_at' => now()],
            ['r_id' => 18, 'b_id' => 18, 'u_id' => 4, 'rating' => 4, 'comment' => 'データ解析の手法がわかりやすく解説されています。Python初心者にもおすすめです。', 'created_at' => now(), 'updated_at' => now()],
            ['r_id' => 19, 'b_id' => 19, 'u_id' => 5, 'rating' => 5, 'comment' => 'AIによる画像認識技術が実践的に学べる素晴らしい本です。', 'created_at' => now(), 'updated_at' => now()],
            ['r_id' => 20, 'b_id' => 20, 'u_id' => 6, 'rating' => 4, 'comment' => 'C++を基礎から学べる本ですが、少し難しい内容がありました。', 'created_at' => now(), 'updated_at' => now()],
            ['r_id' => 21, 'b_id' => 21, 'u_id' => 7, 'rating' => 5, 'comment' => 'Railsの基礎が非常にわかりやすく学べます。これからRailsを学ぶ人にぴったりの本です。', 'created_at' => now(), 'updated_at' => now()],
            ['r_id' => 22, 'b_id' => 22, 'u_id' => 1, 'rating' => 4, 'comment' => 'Dockerの基本が理解できましたが、もう少し実践的な例が欲しかったです。', 'created_at' => now(), 'updated_at' => now()],
            ['r_id' => 23, 'b_id' => 23, 'u_id' => 2, 'rating' => 5, 'comment' => 'Springフレームワークを使いこなすために必要な知識がまとめられています。', 'created_at' => now(), 'updated_at' => now()],
            ['r_id' => 24, 'b_id' => 24, 'u_id' => 3, 'rating' => 5, 'comment' => 'Vue.jsの実践的な使い方が学べ、実際のプロジェクトにすぐに役立ちました。', 'created_at' => now(), 'updated_at' => now()],
            ['r_id' => 25, 'b_id' => 25, 'u_id' => 4, 'rating' => 4, 'comment' => 'MongoDBについて詳しく学べる良書ですが、少し難易度が高いです。', 'created_at' => now(), 'updated_at' => now()],
            ['r_id' => 26, 'b_id' => 26, 'u_id' => 5, 'rating' => 5, 'comment' => 'Angularの基本がしっかり学べ、実際に使うための知識が身に付きました。', 'created_at' => now(), 'updated_at' => now()],
            ['r_id' => 27, 'b_id' => 27, 'u_id' => 6, 'rating' => 3, 'comment' => 'コンピュータネットワークの基礎が学べますが、少し内容が古いと感じました。', 'created_at' => now(), 'updated_at' => now()],
            ['r_id' => 28, 'b_id' => 28, 'u_id' => 7, 'rating' => 5, 'comment' => '機械学習を学ぶための最適な本で、実践的な例が豊富にあります。', 'created_at' => now(), 'updated_at' => now()],
            ['r_id' => 29, 'b_id' => 29, 'u_id' => 1, 'rating' => 4, 'comment' => 'Gitの基本的な操作方法が学べ、初心者にもわかりやすいです。', 'created_at' => now(), 'updated_at' => now()],
            ['r_id' => 30, 'b_id' => 30, 'u_id' => 2, 'rating' => 5, 'comment' => 'Go言語を使ったWeb開発が詳細に解説されており、非常に勉強になりました。', 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
