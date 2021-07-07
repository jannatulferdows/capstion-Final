@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           <h1><b><center>SGPA :: {{$sgpa}}</center></b></h1>
           </br>
           </br>
           <table border="2" class="center table table-striped table-bordered">
           <tr> <th>Course Code   </th>
           <th>Semester Id  </th>
           <th>Grade</th></tr>
            @foreach ($courses as $course)
            <tr> <td>{{$course->course_code}}</td>
            <td>{{$course->semester_id}}</td>
            <td>{{$course->grade}}</td>

           
            </tr>
            @endforeach  

            </table>
        
        </div>
    </div>
</div>
@endsection
