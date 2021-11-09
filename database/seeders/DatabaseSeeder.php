<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Classroom;
// use database\seeders\ClassroomSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        if(!Classroom::count())
        {
            $this->call(ClassroomSeeder::class);
        }
    }
}
