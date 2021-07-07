<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class courseFaculty extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('course_faculty')->insert(
            [  [
                  'course_code'=>'CSE 102',
                  'faculty_id' => '1',
                  'department' => 'CSE',
                  'intake' => '1',
                  'section'=>'1',
               ],
               [
                'course_code'=>'CSE 102',
                'faculty_id' => '1',
                'department' => 'CSE',
                'intake' => '1',
                'section'=>'2',
               ],
               [
                'course_code'=>'CSE 102', 
                'faculty_id' => '1',
                'department' => 'CSE',
                'intake' => '1',
                'section'=>'3',
               ],
               [
                'course_code'=>'CSE 102', 
                'faculty_id' => '1',
                'department' => 'CSE',
                'intake' => '1',
                'section'=>'4',
               ],
               [
                'course_code'=>'CSE 102', 
                'faculty_id' => '1',
                'department' => 'CSE',
                'intake' => '1',
                'section'=>'5',
               ],
               [
                'course_code'=>'PHY 101', 
                'faculty_id' => '2',
                'department' => 'CSE',
                'intake' => '1',
                'section'=>'1',
             ],
             [
              'course_code'=>'PHY 101', 
              'faculty_id' => '2',
              'department' => 'CSE',
              'intake' => '1',
              'section'=>'2',
             ],
             [
              'course_code'=>'PHY 101', 
              'faculty_id' => '2',
              'department' => 'CSE',
              'intake' => '1',
              'section'=>'3',
             ],
             [
              'course_code'=>'PHY 101', 
              'faculty_id' => '2',
              'department' => 'CSE',
              'intake' => '1',
              'section'=>'4',
             ],
             [
              'course_code'=>'PHY 101', 
              'faculty_id' => '2',
              'department' => 'CSE',
              'intake' => '1',
              'section'=>'5',
             ],
             [
                'course_code'=>'ENG 101',
                'faculty_id' => '3',
                'department' => 'CSE',
                'intake' => '1',
                'section'=>'1',
             ],
             [
              'course_code'=>'ENG 101',
              'faculty_id' => '3',
              'department' => 'CSE',
              'intake' => '1',
              'section'=>'2',
             ],
             [
              'course_code'=>'ENG 101', 
              'faculty_id' => '3',
              'department' => 'CSE',
              'intake' => '1',
              'section'=>'3',
             ],
             [
              'course_code'=>'ENG 101', 
              'faculty_id' => '3',
              'department' => 'CSE',
              'intake' => '1',
              'section'=>'4',
             ],
             [
              'course_code'=>'ENG 101', 
              'faculty_id' => '3',
              'department' => 'CSE',
              'intake' => '1',
              'section'=>'5',
             ],
             [
                'course_code'=>'CSE 101',
                'faculty_id' => '4',
                'department' => 'CSE',
                'intake' => '1',
                'section'=>'1',
             ],
             [
              'course_code'=>'CSE 101',
              'faculty_id' => '4',
              'department' => 'CSE',
              'intake' => '1',
              'section'=>'2',
             ],
             [
              'course_code'=>'CSE 101', 
              'faculty_id' => '4',
              'department' => 'CSE',
              'intake' => '1',
              'section'=>'3',
             ],
             [
              'course_code'=>'CSE 101', 
              'faculty_id' => '4',
              'department' => 'CSE',
              'intake' => '1',
              'section'=>'4',
             ],
             [
              'course_code'=>'CSE 101', 
              'faculty_id' => '4',
              'department' => 'CSE',
              'intake' => '1',
              'section'=>'5',
             ],
             [
                'course_code'=>'MAT 101',
                'faculty_id' => '5',
                'department' => 'CSE',
                'intake' => '1',
                'section'=>'1',
             ],
             [
              'course_code'=>'MAT 101',
              'faculty_id' => '5',
              'department' => 'CSE',
              'intake' => '1',
              'section'=>'2',
             ],
             [
              'course_code'=>'MAT 101', 
              'faculty_id' => '5',
              'department' => 'CSE',
              'intake' => '1',
              'section'=>'3',
             ],
             [
              'course_code'=>'MAT 101', 
              'faculty_id' => '5',
              'department' => 'CSE',
              'intake' => '1',
              'section'=>'4',
             ],
             [
              'course_code'=>'MAT 101', 
              'faculty_id' => '5',
              'department' => 'CSE',
              'intake' => '1',
              'section'=>'5',
             ]
            ]);
    }
}
