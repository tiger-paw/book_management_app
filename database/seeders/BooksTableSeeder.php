<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    public function run()
    {
        $books = [];
        for ($i = 1; $i <= 50; $i++) {
            $books[] = [
                'title' => "本のタイトル {$i}",
                'author' => "著者名 {$i}",
                'description' => "これは本 {$i} の説明です。",
                'published_date' => now()->subDays(rand(1, 1000)),
                'ISBN' => '978' . str_pad(rand(1, 999999999), 10, '0', STR_PAD_LEFT),
                'image_url' => "https://placehold.co/100x150?text=本+{$i}",
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        DB::table('books')->insert($books);
    }
}


// namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// use Illuminate\Database\Seeder;

// class BooksTableSeeder extends Seeder
// {
//     /**
//      * Run the database seeds.
//      */
//     public function run(): void
//     {
//         //
//     }
// }
