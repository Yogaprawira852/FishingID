<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Dicky Rahmanto',
            'email' => 'dicky@gmail.com',
            'password' => bcrypt('12345')
        ]);
    }
}
