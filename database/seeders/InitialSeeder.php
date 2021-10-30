<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Product;
use Illuminate\Database\Seeder;

class InitialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::firstOrCreate([
            'name' => 'Spotify Premium',
            'discord' => 'https://discord.com/api/webhooks/897543956492091392/9EouO1jvhy5Qh244vd5efAukfh7ynFpY3F5uD3QUcOb-8De_eg-UitHFXeqmspM1Ppsr',
        ]);

        Client::create(
            ['name' => 'Hakaink'],
        );

        Client::create(
            ['name' => 'Cesao'],
        );

        Client::create(
            ['name' => 'Hakaink'],
        );
        
    }
}
