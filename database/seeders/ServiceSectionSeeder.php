<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ServiceSection;

class ServiceSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ServiceSection::create([
            'heading_meta' => 'What I do?',
            'heading' => 'Here are some of my expertise',
            'services' => [
                [
                    'title' => 'Innovative Ideas',
                    'icon' => 'icon-bulb',
                    'color_class' => 'color-1',
                    'description' => 'Separated they live in Bookmarksgrove right at the coast of the Semantics',
                ],
                [
                    'title' => 'Software',
                    'icon' => 'icon-data',
                    'color_class' => 'color-2',
                    'description' => 'Separated they live in Bookmarksgrove right at the coast of the Semantics',
                ],
                [
                    'title' => 'Application',
                    'icon' => 'icon-phone3',
                    'color_class' => 'color-3',
                    'description' => 'Separated they live in Bookmarksgrove right at the coast of the Semantics',
                ],
                [
                    'title' => 'Graphic Design',
                    'icon' => 'icon-layers2',
                    'color_class' => 'color-4',
                    'description' => 'Separated they live in Bookmarksgrove right at the coast of the Semantics',
                ],
                [
                    'title' => 'Software',
                    'icon' => 'icon-data',
                    'color_class' => 'color-5',
                    'description' => 'Separated they live in Bookmarksgrove right at the coast of the Semantics',
                ],
                [
                    'title' => 'Application',
                    'icon' => 'icon-phone3',
                    'color_class' => 'color-6',
                    'description' => 'Separated they live in Bookmarksgrove right at the coast of the Semantics',
                ],
            ],
            'status' => true,
        ]);
    }
}
