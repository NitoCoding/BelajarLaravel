<?php

namespace Database\Seeders;

use App\Models\TransaksiItem;
use Illuminate\Database\Seeder;

class TransaksiItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TransaksiItem::factory()->count(5)->create();
    }
}
