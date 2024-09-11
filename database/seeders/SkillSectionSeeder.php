<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SkillSection;

class SkillSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SkillSection::create([
            'heading_meta' => 'My Specialty',
            'heading' => 'My Skills',
            'description' => 'The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.',
            'skills' => [
                [
                    'name' => 'Photoshop',
                    'color' => 'color-1',
                    'percentage' => 75,
                ],
                [
                    'name' => 'jQuery',
                    'color' => 'color-2',
                    'percentage' => 60,
                ],
                [
                    'name' => 'HTML5',
                    'color' => 'color-3',
                    'percentage' => 85,
                ],
                [
                    'name' => 'CSS3',
                    'color' => 'color-4',
                    'percentage' => 90,
                ],
                [
                    'name' => 'WordPress',
                    'color' => 'color-5',
                    'percentage' => 70,
                ],
                [
                    'name' => 'SEO',
                    'color' => 'color-6',
                    'percentage' => 80,
                ],
            ],
            'status' => true,
        ]);
    }
}
