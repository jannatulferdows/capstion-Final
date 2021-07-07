<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class intakes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('intakes')->insert(
            [  [
                  'intake' => 1,
                  'section' => 1,
                  'semester_id'=>0,
                  'department' => 'CSE',
                  //'password' => '$2y$10$ZM66NzrMsoQxNtHJpOvJ5OpkN0agcu6WtwPk51VhpLdVQoOUmwNGy',
               ],
               [
                'intake' => 1,
                'section' => 2,
                'semester_id'=>0,
                'department' => 'CSE',
                //'password' => '$2y$10$ZM66NzrMsoQxNtHJpOvJ5OpkN0agcu6WtwPk51VhpLdVQoOUmwNGy',
             ],
             [
                'intake' => 1,
                'section' => 3,
                'semester_id'=>0,
                'department' => 'CSE',
                //'password' => '$2y$10$ZM66NzrMsoQxNtHJpOvJ5OpkN0agcu6WtwPk51VhpLdVQoOUmwNGy',
             ],
             [
                'intake' => 1,
                'section' => 4,
                'semester_id'=>0,
                'department' => 'CSE',
                //'password' => '$2y$10$ZM66NzrMsoQxNtHJpOvJ5OpkN0agcu6WtwPk51VhpLdVQoOUmwNGy',
             ],
             [
                'intake' => 1,
                'section' => 5,
                'semester_id'=>0,
                'department' => 'CSE',
                //'password' => '$2y$10$ZM66NzrMsoQxNtHJpOvJ5OpkN0agcu6WtwPk51VhpLdVQoOUmwNGy',
             ]
            ]);
    }
}
