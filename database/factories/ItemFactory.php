<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Item;

class ItemFactory extends Factory
{
    protected $model = Item::class;

    public function definition()
    {
        return [
            'title' => $this->faker->word,
            'price' => $this->faker->randomNumber(2),
            'body' => $this->faker->paragraph,
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}