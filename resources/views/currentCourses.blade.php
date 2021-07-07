@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           <h1><b><center>Current Semester Courses</center></b></h1>
           </br>
           </br>
           <table border="2" class="center table table-striped table-bordered">
           <tr> <th>Course Code   </th>
           <th>Credit   </th>
           <th>Mid   </th>
           <th>Attendance </th>
           <th>Assignment/Presentation</th>
           <th>CT/Quiz Test </th>
           <th>Final </th>
           <th>Grade</th>
           </tr>
            @foreach ($currentCourses as $course)
            <tr> <td>{{$course->course_code}}</td>
            <td>{{$course->credit}}</td>
            @foreach($results as $result)
                     @if($result['course_code']==$course->course_code)
                             @php
                             $mid=$result['mid'];
                             $attendance=$result['attendance'];
                             $assignment=$result['assignment'];
                             $ct=$result['ct'];
                             $final=$result['final'];
                             $grade=$mid+$attendance+$assignment+$ct+$final;
                             
                             if($grade<40)
                                  $grade='F';
                             elseif($grade<45)
                                  $grade='D';
                            elseif($grade<50)
                                  $grade='C';
                                  elseif($grade<55)
                                  $grade='C+';
                                  elseif($grade<60)
                                  $grade='B-';
                                  elseif($grade<65)
                                  $grade='B';
                                  elseif($grade<70)
                                  $grade='B+';
                                  elseif($grade<75)
                                  $grade='A-';
                                  elseif($grade<80)
                                  $grade='A';
                                  elseif($grade>=80)
                                  $grade='A+';
                                
                                 
                            @endphp
                             
                               
                             @endif
                             @endforeach
            <td>{{$mid}}</td>
            <td>{{$attendance}}</td>
            <td>{{$assignment}}</td>
            <td> {{$ct}}</td>
            <td>{{ $final}}</td>
            
            <td>{{$grade}}</td>
            </tr>
            @endforeach  

            </table>
        
        </div>
    </div>
</div>
@endsection
