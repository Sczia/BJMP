<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            announcementSeeder::class,
            appointmentSeeder::class,
            attendanceSeeder::class,
            confirmSeeder::class,
            contactSeeder::class,
            medicalSeeder::class,
            medicalrecyclebinSeeder::class,
            pdlSeeder::class,
            pdlrecyclebinSeeder::class,
            scheduleSeeder::class,
            eventSeeder::class,
            UserSeeder::class
        ]);
    }
}
