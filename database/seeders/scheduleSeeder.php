<?php

namespace Database\Seeders;

use App\Models\Schedule;
use Illuminate\Database\Seeder;

class scheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [


            [
                'name' => 'Paabot',
                'sched_type' => 'Paabot',
                'day' => 'Monday to Friday',
                'time' => '9am-12noon 1:00pm-5:00pm',
                'dorm' => 'Dorm Schedule: All Dorms',
            ],

            [
                'name' => 'Tawag',
                'sched_type' => 'Tawag',
                'day' => 'Monday to Friday',
                'time' => '9am- 11:00am – 1:00pm- 3:00pm',
                'dorm' => 'Dorm Schedule: All Dorms',
            ],

            [
                'name' => 'Dalaw',
                'sched_type' => 'Dalaw',
                'day' => 'Tuesday to Friday',
                'time' => '1:00Pm -4:00pm',
                'dorm' => 'Tuesday and Thursday: Female Dorm, Dorm 3,4&5
                Wednesday and Friday: Dorm 1& 2',
            ]


        ];

        foreach ($data as $key ) {
             Schedule::create( $key);
        }

    }
}
