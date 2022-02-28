<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Menu;
use App\Models\TransaksiDetail;
use App\Models\TransaksiItem;

class TransaksiDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TransaksiDetail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_transaksi_item' => TransaksiItem::factory(),
            'id_menu' => Menu::factory(),
            'jumlah' => $this->faker->numberBetween(0, 10000),
        ];
    }
}
