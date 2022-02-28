<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Menu;

class MenuFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Menu::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->word,
            'harga' => $this->faker->numberBetween(0, 10000),
            'gambar' => $this->faker->imageUrl(400, 300),
            'deskripsi' => $this->faker->text,
            'stok' => $this->faker->numberBetween(0, 10000),
        ];
    }
}
