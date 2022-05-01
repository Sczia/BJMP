<?php

namespace Database\Seeders;

use App\Models\Confirm;
use Illuminate\Database\Seeder;

class confirmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [

            'first_name' => 'Krysia Hernandez',
            'last_name' => 'Hernandez',
            'middle_name' => 'A.',
            'age' => '21',
            'gender' => 'female',
            'email' => 'krysialee023@gmail.com',
            'address' => '158 silangan, St. Brgy. Dayap, Calaan, Laguna',
            'date' => '22-10-22',
            'prisoner_name' => 'Alfredo Lo',
            'prisoner_relationship' => 'Nothing',
            'phone_number' => '09192054322',
            'health_poll' => 'Fully Vaccinated',

            'temp'=> 'no',
            'resp'=> 'none',
            'travel'=> 'no',
            'history'=> 'no',
            'hospital'=> 'no',
            'public'=> 'no',
            'close'=> 'no',
            'front'=> 'no',
            'place'=> 'no',
        ];

        Confirm::create($data);
    }
}
