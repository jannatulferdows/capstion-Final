<?php

use Illuminate\Database\Seeder;

class students extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('students')->insert(
            [  
                [
                  'id' => 1,
                  'name' => 'nishat',
                  'email'=>'nishat@gmail.com',
                  'department'=>'CSE',
                  'intake' =>1,
                  'section'=>1,
                 
                ],
                [
                    'id' => 2,
                    'name' => 'ritu',
                    'email'=>'ritu@gmail.com',
                    'department'=>'CSE',
                    'intake' =>1,
                    'section'=>2,
                   
                ],
                [
                    'id' => 3,
                    'name' => 'aysha',
                    'email'=>'aysha@gmail.com',
                    'department'=>'CSE',
                    'intake' =>1,
                    'section'=>3,
                   
                ],
                [
                    'id' => 4,
                    'name' => 'mim',
                    'email'=>'mim@gmail.com',
                    'department'=>'CSE',
                    'intake' =>1,
                    'section'=>3,
                   
                  ]
            ]
                );
    }
}
