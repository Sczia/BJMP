<?php

namespace Database\Seeders;

use App\Models\Announcement;
use Illuminate\Database\Seeder;

class announcementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [

            'announce' => 'There will be no further changes regarding to our schedule for this week.',
        ];

            Announcement::create($data);
    }
}
