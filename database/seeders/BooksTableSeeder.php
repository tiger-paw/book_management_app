<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('books')->truncate();

        DB::table('books')->insert([
            ['b_id' => 1, 'title' => 'はじめてのLaravel', 'author' => '田中一郎', 'description' => 'Laravelの基礎から学ぶ実践書。', 'published_date' => '2022-01-15', 'ISBN' => '978-1234567890', 'image_url' => 'https://example.com/book1.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['b_id' => 2, 'title' => 'PHPプログラミング入門', 'author' => '', 'description' => 'PHPをゼロから学べる入門書。', 'published_date' => NULL, 'ISBN' => '', 'image_url' => '', 'created_at' => now(), 'updated_at' => now()],
            ['b_id' => 3, 'title' => 'デザインパターン入門', 'author' => '佐藤哲也', 'description' => '', 'published_date' => NULL, 'ISBN' => '978-1357924680', 'image_url' => '', 'created_at' => now(), 'updated_at' => now()],
            ['b_id' => 4, 'title' => 'JavaScript実践プログラミング', 'author' => '', 'description' => 'JavaScriptの基本から応用までを学べる実践書。', 'published_date' => '2019-11-30', 'ISBN' => '', 'image_url' => 'https://example.com/book4.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['b_id' => 5, 'title' => 'データベース設計の基本', 'author' => '山田太郎', 'description' => '', 'published_date' => NULL, 'ISBN' => '', 'image_url' => '', 'created_at' => now(), 'updated_at' => now()],
            ['b_id' => 6, 'title' => 'Reactの基礎', 'author' => '山口晃', 'description' => 'Reactを用いたウェブアプリケーションの開発方法。', 'published_date' => NULL, 'ISBN' => '978-9876542111', 'image_url' => '', 'created_at' => now(), 'updated_at' => now()],
            ['b_id' => 7, 'title' => 'Pythonで学ぶ機械学習', 'author' => '', 'description' => '機械学習の基礎から応用までをPythonで学べる書籍。', 'published_date' => '2020-09-25', 'ISBN' => '', 'image_url' => 'https://example.com/book7.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['b_id' => 8, 'title' => 'Laravelの実践', 'author' => '岡田茂', 'description' => '', 'published_date' => NULL, 'ISBN' => '978-7418529630', 'image_url' => '', 'created_at' => now(), 'updated_at' => now()],
            ['b_id' => 9, 'title' => 'デザインパターンの実践', 'author' => '佐藤義男', 'description' => '', 'published_date' => '2022-01-17', 'ISBN' => '', 'image_url' => '', 'created_at' => now(), 'updated_at' => now()],
            ['b_id' => 10, 'title' => 'SQLの基本', 'author' => '中村英一', 'description' => '', 'published_date' => NULL, 'ISBN' => '', 'image_url' => '', 'created_at' => now(), 'updated_at' => now()],
            ['b_id' => 11, 'title' => 'Vue.js実践ガイド', 'author' => '', 'description' => '', 'published_date' => '2021-07-30', 'ISBN' => '978-1112131415', 'image_url' => 'https://example.com/book11.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['b_id' => 12, 'title' => 'React Native入門', 'author' => '井上智博', 'description' => '', 'published_date' => NULL, 'ISBN' => '', 'image_url' => 'https://example.com/book12.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['b_id' => 13, 'title' => 'データ解析の基礎', 'author' => '', 'description' => 'データ分析の基礎から機械学習に至るまで。', 'published_date' => NULL, 'ISBN' => '', 'image_url' => '', 'created_at' => now(), 'updated_at' => now()],
            ['b_id' => 14, 'title' => 'Go言語プログラミング', 'author' => '高橋忍', 'description' => '', 'published_date' => NULL, 'ISBN' => '978-1357986422', 'image_url' => '', 'created_at' => now(), 'updated_at' => now()],
            ['b_id' => 15, 'title' => 'KotlinによるAndroid開発', 'author' => '', 'description' => 'Kotlinを使ったAndroidアプリ開発の基礎。', 'published_date' => NULL, 'ISBN' => '', 'image_url' => '', 'created_at' => now(), 'updated_at' => now()],
            ['b_id' => 16, 'title' => 'Java基礎講座', 'author' => '金子裕介', 'description' => '', 'published_date' => NULL, 'ISBN' => '978-1122334455', 'image_url' => '', 'created_at' => now(), 'updated_at' => now()],
            ['b_id' => 17, 'title' => 'Swift入門', 'author' => '', 'description' => 'Swiftを使ったiOSアプリ開発の入門書。', 'published_date' => NULL, 'ISBN' => '978-3322114455', 'image_url' => '', 'created_at' => now(), 'updated_at' => now()],
            ['b_id' => 18, 'title' => 'Pythonによるデータ解析', 'author' => '遠藤健太', 'description' => '', 'published_date' => NULL, 'ISBN' => '978-6677889900', 'image_url' => '', 'created_at' => now(), 'updated_at' => now()],
            ['b_id' => 19, 'title' => 'AIによる画像認識', 'author' => '', 'description' => '', 'published_date' => NULL, 'ISBN' => '978-5554443332', 'image_url' => 'https://example.com/book19.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['b_id' => 20, 'title' => 'C++プログラミング入門', 'author' => '竹内亮介', 'description' => '', 'published_date' => NULL, 'ISBN' => '', 'image_url' => '', 'created_at' => now(), 'updated_at' => now()],
            ['b_id' => 21, 'title' => 'Ruby on Rails入門', 'author' => '斉藤美香', 'description' => 'Railsを使ったウェブアプリケーション開発。', 'published_date' => '2019-08-05', 'ISBN' => '978-1237894560', 'image_url' => 'https://example.com/book21.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['b_id' => 22, 'title' => 'Dockerで学ぶコンテナ技術', 'author' => '岩田真一', 'description' => 'Dockerを用いたコンテナ技術の実践的な使い方。', 'published_date' => '2021-02-22', 'ISBN' => '978-3216548769', 'image_url' => 'https://example.com/book22.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['b_id' => 23, 'title' => 'Spring Framework実践ガイド', 'author' => '加藤勝也', 'description' => 'Springを使ったウェブアプリケーション開発。', 'published_date' => '2020-11-18', 'ISBN' => '978-6655442211', 'image_url' => 'https://example.com/book23.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['b_id' => 24, 'title' => 'Vue.js基礎講座', 'author' => '前田浩志', 'description' => 'Vue.jsの基礎から実践的なアプリケーションの作成方法。', 'published_date' => '2022-06-10', 'ISBN' => '978-3222110045', 'image_url' => 'https://example.com/book24.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['b_id' => 25, 'title' => 'MongoDB実践ガイド', 'author' => '大西良太', 'description' => 'MongoDBを使った非関係データベースの活用法。', 'published_date' => '2021-05-25', 'ISBN' => '978-2345678910', 'image_url' => 'https://example.com/book25.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['b_id' => 26, 'title' => 'Angular実践入門', 'author' => '高山賢一', 'description' => 'Angularを使ったシングルページアプリケーションの作成方法。', 'published_date' => '2020-04-12', 'ISBN' => '978-1122336677', 'image_url' => 'https://example.com/book26.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['b_id' => 27, 'title' => 'コンピュータネットワーク', 'author' => '横田智也', 'description' => 'コンピュータネットワークの基礎を学べる書籍。', 'published_date' => '2020-09-08', 'ISBN' => '978-4567890123', 'image_url' => 'https://example.com/book27.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['b_id' => 28, 'title' => '機械学習基礎講座', 'author' => '本田幸雄', 'description' => '機械学習の基礎的な手法とその実装。', 'published_date' => '2021-03-30', 'ISBN' => '978-3579110000', 'image_url' => 'https://example.com/book28.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['b_id' => 29, 'title' => 'Git実践ガイド', 'author' => '川村龍太', 'description' => 'Gitの基本的な使い方と実践的なテクニック。', 'published_date' => '2021-04-10', 'ISBN' => '978-5671234098', 'image_url' => 'https://example.com/book29.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['b_id' => 30, 'title' => 'Go言語によるWeb開発', 'author' => '柳田裕治', 'description' => 'Go言語を使ったWebアプリケーションの開発方法。', 'published_date' => '2021-09-25', 'ISBN' => '978-8901234567', 'image_url' => 'https://example.com/book30.jpg', 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
