<?php

namespace Database\Seeders;

use App\Models\Attendance;
use Illuminate\Database\Seeder;

class attendanceSeeder extends Seeder
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
            'pdl_name' => 'Alfredo Lo',
            'date' => '04-11-2022',
            'time_in' => '12:00pm',
            'time_out' => '1:00pm'
        ];

        Attendance::create($data);
      
    }
}
