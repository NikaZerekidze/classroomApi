<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classrooms = [
            [
                'name' => 'class1',
                'lecturerId' => '1'
            ],
            [
                'name' => 'class2',
                'lecturerId' => '2'
            ]
        ];

        DB::table('classrooms')->insert($classrooms);
        
    }

  
}
