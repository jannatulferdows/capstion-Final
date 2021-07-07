<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    //
    protected $fillable=['student_id','semester_id','course_code','mid','attendance','assignment','ct','final','grade'];
}
