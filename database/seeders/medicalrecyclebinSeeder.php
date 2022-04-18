<?php

namespace Database\Seeders;

use App\Models\MedicalRecyclebin;
use Illuminate\Database\Seeder;

class medicalrecyclebinSeeder extends Seeder
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
            'birth_date' => 'Hernandez',
            'age' => '21',
            'address' => '158 silangan, St. Brgy. Dayap, Calaan, Laguna',
            'emergency_contact' => '09192054322',
            'relationship' => 'single',
            'allergies' => 'none',
            'current_medication' => 'good',
            'current_health_status' => 'stable',
            'medical_history' => 'none',
            'deleted_date' => '22-10-22',

        ];

        MedicalRecyclebin::create($data);
    }
}
