<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(courses::class);
         $this->call(faculty::class);
         $this->call(courseFaculty::class);
        
         $this->call(intakes::class);
         
         $this->call(semesterCourses::class);
         $this->call(students::class);
         $this->call(admins::class);
        // $this->call(users::class);
    }
}
