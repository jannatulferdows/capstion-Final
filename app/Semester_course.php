<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semester_course extends Model
{
     protected $fillable = [
        'id','semester_id','course_code', 'department','pre_requisite_id'
     ];
 
}