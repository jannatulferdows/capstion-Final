<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'id','course_code', 'course_name', 'credit', 'department'
     ];
 
    public function  faculties()
    {
        return $this->belongsToMany(Faculty::class);
    }
    public function isTakenThisSemester()
    {
        $student = Student::where('email', '=', auth()->user()->email )->first();
        $registered = RegisteredCourses::where([
            'student_id'=>$student->id,
            'course_code'=>$this->course_code,
        ])->first();
        if($registered) return $registered;
        return false;
    }
}
