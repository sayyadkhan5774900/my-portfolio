<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ContactSection;

class ContactSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ContactSection::create([
            'heading_meta' => 'Get in Touch',
            'heading' => 'Contact',
            'email' => 'info@domain.com',
            'address' => '198 West 21th Street, Suite 721 New York NY 10016',
            'phone' => '+123 456 7890',
            'status' => true,
        ]);
    }
}
