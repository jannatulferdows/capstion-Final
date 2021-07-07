<?php

use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert(
            [  
                [
                 
                  'name' => 'nishat',
                  'email'=>'nishat@gmail.com',
                  'password'=>bcrypt('123456789'),
               
                ],
                [
                 
                    'name' => 'aysha',
                    'email'=>'aysha@gmail.com',
                    'password'=>bcrypt('123456789'),
                 
               ],
               [
                 
                'name' => 'ritu',
                'email'=>'ritu@gmail.com',
                'password'=>bcrypt('123456789'),
             
           ],
           [
                 
            'name' => 'mim',
            'email'=>'mim@gmail.com',
            'password'=>bcrypt('123456789'),
         
       ]
            ]
           );
  

    }
}
