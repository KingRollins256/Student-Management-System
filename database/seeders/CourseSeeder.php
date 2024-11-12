<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Course::create([
            'course_name'=>'Business computing',
            'course_desc'=>'programming, develpoment and understaning systems',
            'credit_hrs'=>'26 hrs',
        ]);
    }
}
