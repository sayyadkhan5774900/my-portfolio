<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\WorkSection;

class WorkSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WorkSection::create([
            'heading_meta' => 'My Work',
            'heading' => 'Recent Work',
            'works' => [
                [
                    'title' => 'Work 01',
                    'category' => 'Website',
                    'image' => 'images/img-1.jpg',
                    'link' => 'work.html',
                    'icon_share' => 'icon-share3',
                    'icon_eye' => 'icon-eye',
                    'icon_heart' => 'icon-heart',
                    'views' => 100,
                    'likes' => 49,
                ],
                [
                    'title' => 'Work 02',
                    'category' => 'Animation',
                    'image' => 'images/img-2.jpg',
                    'link' => 'work.html',
                    'icon_share' => 'icon-share3',
                    'icon_eye' => 'icon-eye',
                    'icon_heart' => 'icon-heart',
                    'views' => 100,
                    'likes' => 49,
                ],
                [
                    'title' => 'Work 03',
                    'category' => 'Illustration',
                    'image' => 'images/img-3.jpg',
                    'link' => 'work.html',
                    'icon_share' => 'icon-share3',
                    'icon_eye' => 'icon-eye',
                    'icon_heart' => 'icon-heart',
                    'views' => 100,
                    'likes' => 49,
                ],
                [
                    'title' => 'Work 04',
                    'category' => 'Application',
                    'image' => 'images/img-4.jpg',
                    'link' => 'work.html',
                    'icon_share' => 'icon-share3',
                    'icon_eye' => 'icon-eye',
                    'icon_heart' => 'icon-heart',
                    'views' => 100,
                    'likes' => 49,
                ],
                [
                    'title' => 'Work 05',
                    'category' => 'Graphic, Logo',
                    'image' => 'images/img-5.jpg',
                    'link' => 'work.html',
                    'icon_share' => 'icon-share3',
                    'icon_eye' => 'icon-eye',
                    'icon_heart' => 'icon-heart',
                    'views' => 100,
                    'likes' => 49,
                ],
                [
                    'title' => 'Work 06',
                    'category' => 'Web Design',
                    'image' => 'images/img-6.jpg',
                    'link' => 'work.html',
                    'icon_share' => 'icon-share3',
                    'icon_eye' => 'icon-eye',
                    'icon_heart' => 'icon-heart',
                    'views' => 100,
                    'likes' => 49,
                ],
            ],
            'status' => true,
        ]);
    }
}
