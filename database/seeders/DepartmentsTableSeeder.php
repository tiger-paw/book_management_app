<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('departments')->insert([
            [
                'd_name' => '一般',
                'department_code' => '一般',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'd_name' => '総務',
                'department_code' => '総務',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}


//
// namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// use Illuminate\Database\Seeder;

// class DepartmentsTableSeeder extends Seeder
// {
//     /**
//      * Run the database seeds.
//      */
//     public function run(): void
//     {
//         //
//     }
// }
