<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AboutSection;

class AboutSectionSeeder extends Seeder
{
    public function run(): void
    {
        AboutSection::create([
            'heading_meta' => 'About Us',
            'heading' => 'Who Am I?',
            'description' => '<p><strong>Hi I\'m Jackson Ford</strong> On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country.</p><p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>',
            'services' => [
                [
                    'title' => 'Graphic Design',
                    'icon' => 'icon-bulb',
                    'color_class' => 'color-1',
                ],
                [
                    'title' => 'Web Design',
                    'icon' => 'icon-globe-outline',
                    'color_class' => 'color-2',
                ],
                [
                    'title' => 'Software',
                    'icon' => 'icon-data',
                    'color_class' => 'color-3',
                ],
                [
                    'title' => 'Application',
                    'icon' => 'icon-phone3',
                    'color_class' => 'color-4',
                ],
            ],
            'hire_heading' => 'I am happy to know you <br>that 300+ projects done successfully!',
            'hire_button_text' => 'Hire me',
            'hire_button_link' => '#',
            'status' => true,
        ]);
    }
}
