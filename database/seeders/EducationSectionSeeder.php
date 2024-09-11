<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EducationSection;

class EducationSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EducationSection::create([
            'heading_meta' => 'Education',
            'heading' => 'Education',
            'educations' => [
                [
                    'degree' => 'Master Degree',
                    'field' => 'Graphic Design',
                    'description' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.',
                ],
                [
                    'degree' => 'Bachelor Degree',
                    'field' => 'Computer Science',
                    'description' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.',
                ],
                [
                    'degree' => 'Diploma',
                    'field' => 'Information Technology',
                    'description' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.',
                ],
                [
                    'degree' => 'Diploma',
                    'field' => 'Information Technology',
                    'description' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.',
                ],
                [
                    'degree' => 'High School',
                    'field' => 'Secondary Education',
                    'description' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.',
                ],
            ],
            'status' => true,
        ]);
    }
}
