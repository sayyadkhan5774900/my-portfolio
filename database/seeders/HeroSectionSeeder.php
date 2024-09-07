<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HeroSection;

class HeroSectionSeeder extends Seeder
{
    public function run(): void
    {
        HeroSection::create([
            'title' => "Hi! <br>I'm Jackson",
            'subtitle' => '100% html5 bootstrap templates Made by <a href="https://colorlib.com/" target="_blank">colorlib.com</a>',
            'button_text' => 'Download CV',
            'button_icon' => 'icon-download4',
            'button_link' => '#',
            'background_image' => 'images/img_bg_1.jpg',
            'status' => true,
        ]);

        HeroSection::create([
            'title' => 'I am <br>a Designer',
            'subtitle' => '100% html5 bootstrap templates Made by <a href="https://colorlib.com/" target="_blank">colorlib.com</a>',
            'button_text' => 'View Portfolio',
            'button_icon' => 'icon-briefcase3',
            'button_link' => '#',
            'background_image' => 'images/img_bg_2.jpg',
            'status' => true,
        ]);
    }
}
