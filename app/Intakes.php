<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Intakes extends Model
{
    //
    
    protected $fillable = [
        'id','intake','semester_id', 'department'
     ];
}
