<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LaundryService;

class LaundryServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        LaundryService::create([
            'type' => 'Cuci Express',
            'price_per_kilo' => 10000,
        ]);

        LaundryService::create([
            'type' => 'Cuci Reguler',
            'price_per_kilo' => 6000,
        ]);
    }
}
