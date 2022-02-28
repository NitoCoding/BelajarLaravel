<?php

namespace Database\Seeders;

use App\Models\TransaksiDetail;
use Illuminate\Database\Seeder;

class TransaksiDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TransaksiDetail::factory()->count(5)->create();
    }
}
