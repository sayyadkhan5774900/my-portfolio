<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CounterSection;

class CounterSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CounterSection::create([
            'heading_meta' => 'Counters',
            'heading' => 'Counters',
            'background_image' => 'images/cover_bg_1.jpg',
            'counters' => [
                [
                    'label' => 'Cups of coffee',
                    'icon' => 'icon-coffee',
                    'data_to' => 309,
                    'data_speed' => 5000,
                    'data_refresh_interval' => 50,
                ],
                [
                    'label' => 'Projects',
                    'icon' => 'icon-briefcase',
                    'data_to' => 356,
                    'data_speed' => 5000,
                    'data_refresh_interval' => 50,
                ],
                [
                    'label' => 'Clients',
                    'icon' => 'icon-users',
                    'data_to' => 30,
                    'data_speed' => 5000,
                    'data_refresh_interval' => 50,
                ],
                [
                    'label' => 'Partners',
                    'icon' => 'icon-handshake',
                    'data_to' => 10,
                    'data_speed' => 5000,
                    'data_refresh_interval' => 50,
                ],
            ],
            'status' => true,
        ]);
    }
}
