<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ExperienceSection;

class ExperienceSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companies = [
            'Google',
            'Facebook',
            'Amazon',
            'Apple',
            'Microsoft',
            'Netflix',
            'Tesla',
            'Adobe',
            'IBM',
            'Intel',
        ];

        ExperienceSection::create([
            'heading_meta' => 'Experience',
            'heading' => 'Work Experience',
            'experiences' => [
                [
                    'title' => 'Full Stack Developer',
                    'company' => $companies[array_rand($companies)],
                    'duration' => '2017-2018',
                    'description' => 'Tolerably earnestly middleton extremely distrusts she boy now not. Add and offered prepare how cordial two promise. Greatly who affixed suppose but enquire compact prepare all put. Added forth chief trees but rooms think may.',
                    'icon' => 'icon-pen2',
                    'color' => 'color-1',
                ],
                [
                    'title' => 'Front End Developer at Google Company',
                    'company' => $companies[array_rand($companies)],
                    'duration' => '2017-2018',
                    'description' => 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.',
                    'icon' => 'icon-pen2',
                    'color' => 'color-2',
                ],
                [
                    'title' => 'System Analyst',
                    'company' => $companies[array_rand($companies)],
                    'duration' => '2017-2018',
                    'description' => 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.',
                    'icon' => 'icon-pen2',
                    'color' => 'color-3',
                ],
                [
                    'title' => 'Creative Designer',
                    'company' => $companies[array_rand($companies)],
                    'duration' => '2017-2018',
                    'description' => 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.',
                    'icon' => 'icon-pen2',
                    'color' => 'color-4',
                ],
                [
                    'title' => 'UI/UX Designer at Envato',
                    'company' => $companies[array_rand($companies)],
                    'duration' => '2017-2018',
                    'description' => 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.',
                    'icon' => 'icon-pen2',
                    'color' => 'color-5',
                ],
            ],
            'status' => true,
        ]);
    }
}
