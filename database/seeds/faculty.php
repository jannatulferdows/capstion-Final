<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class faculty extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('faculties')->insert(
            [  [
                  'faculty_id' => '1',
                  'name' => 'SAM',
                  'email'=>'sam@gmail.com',
                  'department' => 'CSE',
                  'password'=>bcrypt('123456789'),
            ],
            [
                'faculty_id' => '2',
                'name' => 'KKD',
                'email'=>'kkd@gmail.com',
                'department' => 'CSE',
                'password'=>bcrypt('123456789'),
            ],
            [
                'faculty_id' => '3',
                'name' => 'Shanto',
                'email'=>'shanto@gmail.com',
                'department' => 'CSE',
                'password'=>bcrypt('123456789'),
            ],
            [
                'faculty_id' => '4',
                'name' => 'Tonny',
                'email'=>'tonny@gmail.com',
                'department' => 'CSE',
                'password'=>bcrypt('123456789'),
            ],
            [
                'faculty_id' => '5',
                'name' => 'Tahmina',
                'email'=>'tahmina@gmail.com',
                'department' => 'CSE',
                'password'=>bcrypt('123456789'),
            ]
            ]);
    }
}
