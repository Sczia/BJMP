<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class contactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [

            'name' => 'Krysia Lee A. Hernandez',
            'email' => 'krysialee023@gmail.com',
            'message' => 'There will be no further changes regarding to our schedule for this week.',
        ];

           Contact::create($data);
    }
}
