<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\Course;

class StudentCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $s1 = Student :: create(['name'=>'Alamgir']);
        $s2 = Student :: create(['name'=>'Rejvi']);

        $c1 = Course::create(['title'=>'Laravel']);
        $c2 = Course::create(['title'=>'React']);
        $c3 = Course::create(['title'=>'PHP']);

        //attach courses to students
        $s1->courses()->attach([$c1->id, $c2->id]);
        $s2->courses()->attach([$c2->id, $c3->id]);
    }
}
