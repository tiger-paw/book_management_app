<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewsTableSeeder extends Seeder
{
    public function run()
    {
        $reviews = [];
        for ($i = 1; $i <= 200; $i++) {
            $reviews[] = [
                'rating' => rand(0, 5),
                'comment' => "このレビューは本 " . rand(1, 50) . " に関する感想です。",
                'u_id' => rand(1, 10),
                'b_id' => rand(1, 50),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        DB::table('reviews')->insert($reviews);
    }
}


// namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// use Illuminate\Database\Seeder;

// class ReviewsTableSeeder extends Seeder
// {
//     /**
//      * Run the database seeds.
//      */
//     public function run(): void
//     {
//         //
//     }
// }
