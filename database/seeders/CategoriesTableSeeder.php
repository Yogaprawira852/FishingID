<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str; // Import class Str untuk menghasilkan slug

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Joran', 'Reel', 'Kail', 'Umpan', 'Senar'];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name' => $category,
                'slug' => Str::slug($category), // Menggunakan Str::slug untuk menghasilkan slug dari nama kategori
            ]);
        }
    }
}