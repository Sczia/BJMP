<?php

namespace Database\Seeders;

use App\Models\Pdl;
use Illuminate\Database\Seeder;

class pdlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [

            'name' => 'Krysia Hernandez',
            'birth_date' => '22-04-18',
            'address' => '158 silangan, St. Brgy. Dayap, Calaan, Laguna',
            'religion' => 'Roman Catholic',
            'civil_status' => 'married',
            'built' => 'none',
            'complexion' => 'none',
            'eye_color' => 'black',
            'sex' => 'male',
            'blood_type' => 'B',
            'educational_attainment' => 'none',
            'date_of_commitment' => '09-11-1997',
            'offense' => 'none',
            'case_number' => '001',
            'deleted_date' => '22-10-22',
        ];

     Pdl::create($data);
    }
}
