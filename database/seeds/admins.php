<?php

use Illuminate\Database\Seeder;

class admins extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('admins')->insert(
            [  
                [
                 'name' => 'admin',
                  'email'=>'admin@gmail.com',
                  'password'=>bcrypt('123456789'),
                ]
            ]);
    }
}
