<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookTableSeeder extends Seeder
{
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('books')->truncate();

        DB::table('books')->insert([
            ['b_id' => 1, 'title' => '初めてのPHP5', 'author' => 'David Sklar', 'description' => '本書は、動的なWebサイトを構築するためのPHPプログラミングの基本を解説する書籍です。本書の特長は、バランスのとれた構成とサンプルコードを使った丁寧な解説。さらに各章末の演習問題が内容の理解を確実にします。本書で扱う内容は「テキストと数の操作」「決定と繰り返し」「配列の操作」「関数」「Webフォームの作成」「データベース」「クッキーとセッション」「日付と時間」「ファイルの操作」「XMLのパースと生成」「デバッギング」「正規表現の基礎」など。日本語版では、日本語処理に関する章と、PHP5.1で追加されたPDO(PHP Data Object)に関する章を追加しました。基礎的なHTMLの知識を持つ読者(Webデザイナーなど)がステップアップするのに最適な一冊です。', 'published_date' => NULL, 'ISBN' => '9784873112572', 'image_url' => '', 'created_at' => NULL, 'updated_at' => NULL],
            ['b_id' => 2, 'title' => 'PHPでつくるWEBアプリケーション制作講座', 'author' => '米田聡', 'description' => '', 'published_date' => NULL, 'ISBN' => '9784844360377', 'image_url' => '', 'created_at' => NULL, 'updated_at' => NULL],
            ['b_id' => 3, 'title' => 'PHPフレームワークLaravel入門', 'author' => '掌田津耶乃', 'description' => '', 'published_date' => NULL, 'ISBN' => '9784798060996', 'image_url' => '', 'created_at' => NULL, 'updated_at' => NULL],
            ['b_id' => 4, 'title' => '動かして学ぶ!Laravel開発入門', 'author' => '山崎大助', 'description' => '', 'published_date' => NULL, 'ISBN' => '9784798168883', 'image_url' => '', 'created_at' => NULL, 'updated_at' => NULL],
            ['b_id' => 5, 'title' => 'PHPフレームワーク Laravel実践開発', 'author' => '掌田津耶乃', 'description' => '', 'published_date' => NULL, 'ISBN' => '9784798059075', 'image_url' => '', 'created_at' => NULL, 'updated_at' => NULL],
            ['b_id' => 6, 'title' => 'スッキリわかるJava入門第4版', 'author' => '中山清喬', 'description' => '資格取得用の学習はもちろん、開発実務で求められる幅広い基礎知識と重要ポイントを、ひととおり獲得できる構成となっています。', 'published_date' => NULL, 'ISBN' => '9784295017936', 'image_url' => '', 'created_at' => NULL, 'updated_at' => NULL],
            ['b_id' => 7, 'title' => 'Javaパフォーマンス', 'author' => 'Scott Oaks', 'description' => '本書ではJVMのチューニングとJavaプラットフォームでの問題解決の双方からJavaパフォーマンスの「アート」と「サイエンス」を明らかにします。', 'published_date' => NULL, 'ISBN' => '9784873117188', 'image_url' => '', 'created_at' => NULL, 'updated_at' => NULL],
            ['b_id' => 8, 'title' => 'これだけで基本がしっかり身につく HTML/CSS&Webデザイン1冊目の本', 'author' => 'Capybara Design', 'description' => '', 'published_date' => NULL, 'ISBN' => '9784798170121', 'image_url' => '', 'created_at' => NULL, 'updated_at' => NULL],
            ['b_id' => 9, 'title' => 'これから学ぶHTML/CSS', 'author' => 'WINGSプロジェクト', 'description' => '', 'published_date' => NULL, 'ISBN' => '9784295006381', 'image_url' => '', 'created_at' => NULL, 'updated_at' => NULL],
            ['b_id' => 10, 'title' => 'よくわかるはじめてのHTML&CSSコーディング', 'author' => '富士通ラーニングメディア', 'description' => '本書は、Webサイト作成に必要な基礎スキルの習得を目指している方におすすめの書籍です。', 'published_date' => NULL, 'ISBN' => '9784867750995', 'image_url' => '', 'created_at' => NULL, 'updated_at' => NULL],
            ['b_id' => 11, 'title' => '新米IT担当者のための HTML/CSS&Webサービスがしっかりわかる本', 'author' => 'シープランニング', 'description' => '', 'published_date' => NULL, 'ISBN' => '9784774151304', 'image_url' => '', 'created_at' => NULL, 'updated_at' => NULL],
            ['b_id' => 12, 'title' => 'Web制作者のためのCSS設計の教科書', 'author' => '谷拓樹', 'description' => '「予測しやすい「保守しやすい「再利用しやすい「拡張しやすい」CSS設計の教科書が登場！コンポーネントやCSSプリプロセッサを意識した設計・管理の実践など「ちゃんとCSSを書く」ためのプロの考え方を徹底解説「セレクタが複雑になってしまう……「オブジェクト指向CSSってなに？「考え方はわかったけど、どう組めばいいの？」そんな人のバイブルになるのが、この本です', 'published_date' => NULL, 'ISBN' => '9784844336358', 'image_url' => '', 'created_at' => NULL, 'updated_at' => NULL],
            ['b_id' => 13, 'title' => 'スラスラわかるPython', 'author' => '岩崎圭', 'description' => 'Pythonに関する技術を基礎からやさしく解説した入門書の決定版!', 'published_date' => NULL, 'ISBN' => '9784798169361', 'image_url' => '', 'created_at' => NULL, 'updated_at' => NULL],
            ['b_id' => 14, 'title' => '問題解決のPythonプログラミング', 'author' => '黒川利明', 'description' => 'MITで20年にわたり教鞭を執る著者が、1、2年生を対象としたプログラミングの授業で実際に使っている教材をもとに執筆したものです。', 'published_date' => NULL, 'ISBN' => '9784873118512', 'image_url' => '', 'created_at' => NULL, 'updated_at' => NULL],
            ['b_id' => 15, 'title' => '入門Python3', 'author' => 'Bill Lubanovic', 'description' => 'データサイエンスやウェブ開発、セキュリティなど、さまざまな分野で人気を獲得してきているPython。本書は、ベストセラーの6年ぶりの改訂版で、プログラミング初級者を対象としたPythonの入門書です。', 'published_date' => NULL, 'ISBN' => '9784873119328', 'image_url' => '', 'created_at' => NULL, 'updated_at' => NULL],
            ['b_id' => 16, 'title' => 'パブロフくんと学ぶITパスポート', 'author' => 'よせだあつこ', 'description' => '文系やIT初心者にとって馴染みのない専門用語もわかりやすい!豊富なイラストで見たことがないモノもイメージしやすい!各チャプターのマンガでビジネスシーンをシミュレーションできる!', 'published_date' => NULL, 'ISBN' => '9784502381218', 'image_url' => '', 'created_at' => NULL, 'updated_at' => NULL],
            ['b_id' => 17, 'title' => 'かんたん合格基本情報技術者教科書', 'author' => '五十嵐順子', 'description' => '', 'published_date' => NULL, 'ISBN' => '9784295007821', 'image_url' => '', 'created_at' => NULL, 'updated_at' => NULL],
        ]);
        

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
