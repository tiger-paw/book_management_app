<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 以下の実行コマンド: php artisan db:seed
        $this->call([
            DepartmentsTableSeeder::class,
            // UsersTableSeeder::class,
            HashedPasswordsUsersTableSeeder::class, // Usersと差替
            BooksTableSeeder::class,
            ReviewsTableSeeder::class,
        ]);
    }
}
