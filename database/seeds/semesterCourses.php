<?php

use Illuminate\Database\Seeder;

class semesterCourses extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('semester_courses')->insert(
            [  
                [
                  'semester_id' => 1,
                  'course_code' => 'CSE 101',
                  'department'=>'CSE',
                 'pre_requisite_id' =>NULL,
                 
                ],
                [
                    'semester_id' => 1,
                    'course_code' => 'MAT 101',
                    'department'=>'CSE',
                   'pre_requisite_id' =>NULL,
                   
                ],
                [
                    'semester_id' => 1,
                    'course_code' => 'CSE 102',
                    'department'=>'CSE',
                   'pre_requisite_id' =>NULL,
                   
                ],
                [
                    'semester_id' => 1,
                    'course_code' =>'PHY 101',
                    'department'=>'CSE',
                   'pre_requisite_id' =>NULL,
                   
                ],
                [
                    'semester_id' => 1,
                    'course_code' =>'ENG 101',
                    'department'=>'CSE',
                   'pre_requisite_id' =>NULL,
                   
                ],
                [
                    'semester_id' => 2,
                    'course_code' =>'CSE 111',
                    'department'=>'CSE',
                   'pre_requisite_id' =>NULL,
                   
                ],
                [
                    'semester_id' => 2,
                    'course_code' =>'EEE 101',
                    'department'=>'CSE',
                   'pre_requisite_id' =>NULL,
                   
                ],
                [
                    'semester_id' => 2,
                    'course_code' =>'ENG 111',
                    'department'=>'CSE',
                    'pre_requisite_id' =>'ENG 101',
                   
                ],
                [
                    'semester_id' => 2,
                    'course_code' =>'CSE 112',
                    'department'=>'CSE',
                   'pre_requisite_id' =>NULL,
                   
                ],
                [
                    'semester_id' => 2,
                    'course_code' =>'MAT 111',
                    'department'=>'CSE',
                   'pre_requisite_id' =>'MAT 101',
                   
                ],
                [
                    'semester_id' => 2,
                    'course_code' =>'EEE 102',
                    'department'=>'CSE',
                   'pre_requisite_id' =>NULL,
                   
                ],
                [
                    'semester_id' => 3,
                    'course_code' =>'CSE 122',
                    'department'=>'CSE',
                   'pre_requisite_id' =>'CSE 111',
                   
                ],
                [
                    'semester_id' => 3,
                    'course_code' =>'CSE 121',
                    'department'=>'CSE',
                    'pre_requisite_id' =>'CSE 111',
                   
                ],
                [
                    'semester_id' => 3,
                    'course_code' =>'CSE 103',
                    'department'=>'CSE',
                   'pre_requisite_id' =>NULL,
                   
                ],
                [
                    'semester_id' => 3,
                    'course_code' =>'CSE 100',
                    'department'=>'CSE',
                    'pre_requisite_id' =>'CSE 111',
                   
                ],
                [
                    'semester_id' => 3,
                    'course_code' =>'MAT 121',
                    'department'=>'CSE',
                   'pre_requisite_id' =>'MAT 111',
                   
                ],
                [
                    'semester_id' => 3,
                    'course_code' =>'ECO 101',
                    'department'=>'CSE',
                   'pre_requisite_id' =>NULL,
                   
                ],
                [
                    'semester_id' => 4,
                    'course_code' =>'EEE 212',
                    'department'=>'CSE',
                   'pre_requisite_id' =>'EEE 101',
                   
                ],
                [
                    'semester_id' => 4,
                    'course_code' =>'CSE 231',
                    'department'=>'CSE',
                    'pre_requisite_id' =>'CSE 121',
                   
                ],
                [
                    'semester_id' => 4,
                    'course_code' =>'STA 231',
                    'department'=>'CSE',
                   'pre_requisite_id' =>'MAT 121',
                   
                ],
                [
                    'semester_id' => 4,
                    'course_code' =>'EEE 211',
                    'department'=>'CSE',
                   'pre_requisite_id' =>'EEE 101',
                   
                ],
                [
                    'semester_id' => 4,
                    'course_code' =>'CSE 213',
                    'department'=>'CSE',
                   'pre_requisite_id' =>'CSE 103',
                   
                ],
                [
                    'semester_id' => 4,
                    'course_code' =>'CSE 232',
                    'department'=>'CSE',
                    'pre_requisite_id' =>'CSE 121',
                   
                ],
                [
                    'semester_id' => 5,
                    'course_code' =>'CSE 209',
                    'department'=>'CSE',
                    'pre_requisite_id' =>'CSE 205',
                   
                ],
                [
                    'semester_id' => 5,
                    'course_code' =>'CSE 206',
                    'department'=>'CSE',
                   'pre_requisite_id' =>NULL,
                   
                ],
                [
                    'semester_id' => 5,
                    'course_code' =>'MAT 231',
                    'department'=>'CSE',
                    'pre_requisite_id' =>'MAT 121',
                   
                ],
                [
                    'semester_id' => 5,
                    'course_code' =>'CSE 242',
                    'department'=>'CSE',
                    'pre_requisite_id' =>'CSE 231',
                   
                ],
                [
                    'semester_id' => 5,
                    'course_code' =>'CSE 205',
                    'department'=>'CSE',
                   'pre_requisite_id' =>NULL,
                   
                ],
                [
                    'semester_id' => 5,
                    'course_code' =>'CSE 241',
                    'department'=>'CSE',
                    'pre_requisite_id' =>'CSE 231',
                   
                ],
                [
                    'semester_id' => 6,
                    'course_code' =>'CSE 215',
                    'department'=>'CSE',
                   'pre_requisite_id' =>'CSE 205',
                   
                ],
                [
                    'semester_id' => 6,
                    'course_code' =>'CSE 208',
                    'department'=>'CSE',
                   'pre_requisite_id' =>'CSE 111',
                   
                ],
                [
                    'semester_id' => 6,
                    'course_code' =>'CSE 224',
                    'department'=>'CSE',
                   'pre_requisite_id' =>NULL,
                   
                ],
                [
                    'semester_id' => 6,
                    'course_code' =>'CSE 207',
                    'department'=>'CSE',
                   'pre_requisite_id' =>'CSE 111',
                   
                ],
                [
                    'semester_id' => 6,
                    'course_code' =>'CSE 200',
                    'department'=>'CSE',
                   'pre_requisite_id' =>'CSE 121',
                   
                ],
                [
                    'semester_id' => 6,
                    'course_code' =>'ACT 201',
                    'department'=>'CSE',
                   'pre_requisite_id' =>NULL,
                   
                ],
                [
                    'semester_id' => 6,
                    'course_code' =>'CSE 223',
                    'department'=>'CSE',
                   'pre_requisite_id' =>NULL,
                   
                ],
                [
                    'semester_id' => 7,
                    'course_code' =>'CSE 331',
                    'department'=>'CSE',
                   'pre_requisite_id' =>'CSE 121',
                   
                ],
                [
                    'semester_id' => 7,
                    'course_code' =>'CSE 316',
                    'department'=>'CSE',
                    'pre_requisite_id' =>'CSE 215',
                   
                ],
                [
                    'semester_id' => 7,
                    'course_code' =>'CSE 318',
                    'department'=>'CSE',
                    'pre_requisite_id' =>'CSE 207',
                   
                ],
                [
                    'semester_id' => 7,
                    'course_code' =>'CSE 315',
                    'department'=>'CSE',
                    'pre_requisite_id' =>'CSE 215',
                   
                ],
                [
                    'semester_id' => 7,
                    'course_code' =>'CSE 332',
                    'department'=>'CSE',
                   'pre_requisite_id' =>'CSE 121',
                   
                ],
                [
                    'semester_id' => 7,
                    'course_code' =>'CSE 317',
                    'department'=>'CSE',
                    'pre_requisite_id' =>'CSE 207',
                   
                ],
                [
                    'semester_id' => 8,
                    'course_code' =>'CSE 324',
                    'department'=>'CSE',
                    'pre_requisite_id' =>'CSE 213',
                   
                ],
                [
                    'semester_id' => 8,
                    'course_code' =>'CSE 310',
                    'department'=>'CSE',
                    'pre_requisite_id' =>'CSE 111',
                   
                ],
                [
                    'semester_id' => 8,
                    'course_code' =>'CSE 328',
                    'department'=>'CSE',
                   'pre_requisite_id' =>'CSE 317',
                   
                ],
                [
                    'semester_id' => 8,
                    'course_code' =>'CSE 323',
                    'department'=>'CSE',
                    'pre_requisite_id' =>'CSE 213',
                   
                ],
                [
                    'semester_id' => 8,
                    'course_code' =>'CSE 309',
                    'department'=>'CSE',
                   'pre_requisite_id' =>'CSE 111',
                   
                ],
                [
                    'semester_id' => 8,
                    'course_code' =>'CSE 327',
                    'department'=>'CSE',
                    'pre_requisite_id' =>'CSE 317',
                   
                ],
                [
                    'semester_id' => 8,
                    'course_code' =>'CSE 313',
                    'department'=>'CSE',
                    'pre_requisite_id' =>'STA 231',
                   
                ],
                [
                    'semester_id' => 8,
                    'course_code' =>'CSE 300',
                    'department'=>'CSE',
                    'pre_requisite_id' =>'CSE 207',
                   
                ],
                [
                    'semester_id' => 9,
                    'course_code' =>'CSE 342',
                    'department'=>'CSE',
                   'pre_requisite_id' =>'CSE 241',
                   
                ],
                [
                    'semester_id' => 9,
                    'course_code' =>'CSE 319',
                    'department'=>'CSE',
                   'pre_requisite_id' =>'CSE 209',
                   
                ],
                [
                    'semester_id' => 9,
                    'course_code' =>'CSE 352',
                    'department'=>'CSE',
                   'pre_requisite_id' =>'CSE 103',
                   
                ],
                [
                    'semester_id' => 9,
                    'course_code' =>'CSE 341',
                    'department'=>'CSE',
                    'pre_requisite_id' =>'CSE 241',
                   
                ],
                [
                    'semester_id' => 9,
                    'course_code' =>'CSE 351',
                    'department'=>'CSE',
                   'pre_requisite_id' =>'CSE 103',
                   
                ],
                [
                    'semester_id' => 9,
                    'course_code' =>'CSE 320',
                    'department'=>'CSE',
                    'pre_requisite_id' =>'CSE 209',
                   
                ],
                [
                    'semester_id' => 10,
                    'course_code' =>'CSE 418',
                    'department'=>'CSE',
                   'pre_requisite_id' =>'CSE 207',
                   
                ],
                [
                    'semester_id' => 10,
                    'course_code' =>'CSE 400',
                    'department'=>'CSE',
                   'pre_requisite_id' =>'CSE 300',
                   
                ],
                [
                    'semester_id' => 10,
                    'course_code' =>'CSE 426',
                    'department'=>'CSE',
                   'pre_requisite_id' =>'CSE 315',
                   
                ],
                [
                    'semester_id' => 10,
                    'course_code' =>'CSE 417',
                    'department'=>'CSE',
                   'pre_requisite_id' =>'CSE 207',
                   
                ],
                [
                    'semester_id' => 10,
                    'course_code' =>'CSE 425',
                    'department'=>'CSE',
                   'pre_requisite_id' =>'CSE 315',
                   
                ],
                [
                    'semester_id' => 10,
                    'course_code' =>'CSE 407',
                    'department'=>'CSE',
                   'pre_requisite_id' =>NULL,
                   
                ],
                [
                    'semester_id' => 10,
                    'course_code' =>'CSE 499',
                    'department'=>'CSE',
                   'pre_requisite_id' =>'CSE 300',
                   
                ],
                [
                    'semester_id' => 11,
                    'course_code' =>'CSE 478',
                    'department'=>'CSE',
                   'pre_requisite_id' =>'CSE 351',
                   
                ],
                [
                    'semester_id' => 11,
                    'course_code' =>'CSE 414',
                    'department'=>'CSE',
                   'pre_requisite_id' =>'CSE 319',
                   
                ],
                [
                    'semester_id' => 11,
                    'course_code' =>'CSE 477',
                    'department'=>'CSE',
                   'pre_requisite_id' =>'CSE 351',
                   
                ],
                [
                    'semester_id' => 11,
                    'course_code' =>'CSE 413',
                    'department'=>'CSE',
                    'pre_requisite_id' =>'CSE 319',
                   
                ],
                [
                    'semester_id' => 11,
                    'course_code' =>'CSE 465',
                    'department'=>'CSE',
                   'pre_requisite_id' =>'CSE 351',
                   
                ],
                [
                    'semester_id' => 12,
                    'course_code' =>'CSE 467',
                    'department'=>'CSE',
                   'pre_requisite_id' =>NULL,
                   
                ],
                [
                    'semester_id' => 12,
                    'course_code' =>'CSE 476',
                    'department'=>'CSE',
                   'pre_requisite_id' =>'CSE 351',
                   
                ],
                [
                    'semester_id' => 12,
                    'course_code' =>'CSE 475',
                    'department'=>'CSE',
                    'pre_requisite_id' =>'CSE 351',
                   
                ]
            ]);
    }
}
