<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentsTableSeeder extends Seeder
{
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('departments')->truncate();

        DB::table('departments')->insert([
            [
                'd_id' => 1,
                'd_name' => '一般',
                'department_code' => 'general',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'd_id' => 2,
                'd_name' => '総務',
                'department_code' => 'admin',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
