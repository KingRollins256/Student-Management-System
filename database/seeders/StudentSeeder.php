<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Student::create([
            'course_id'=>'Business Admin',
            'first_name'=>'Rollins',
            'last_name'=>'King',
            'dob'=>'2000-12-12',
            'phone'=>'0758160119',
        ]);




    }
}
