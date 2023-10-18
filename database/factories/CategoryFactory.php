<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = collect([
            'Pizza',
            'Snacks',
            'Soups',
            'Desserts',
            'Kids menu',
            'Drinks',
            'Salads',
            'Chicken',
            'Duck',
            'Pork',
            'Beef',
            'Fish',
            'Pasta',
            'Burgers',
            'Dumplings',
            'Ramen',
        ]);

        return [
            'name' => $categories->random(),
        ];
    }
}
