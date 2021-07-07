<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegisteredCourses extends Model
{
    //
    protected $fillable = [
        'student_id','course_code','intake','section', 'credit'
     ];
}
