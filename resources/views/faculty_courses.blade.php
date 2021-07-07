<html>
<head>
<style>
body {
  background-color: coral;
}
</style>
</head>
<body>
</html>
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           <h1><b><center>Course List</center></b></h1>
           </br>
           </br>
           <table border="2" class="center table table-striped table-bordered">
           <tr> <th>Course Code   </th>
           <th>Department   </th>
           <th>Intake   </th>
           <th>Section   </th>
           <th>  </th></tr>
            @foreach ($faculty_courses as $course)
            <tr> <td>{{$course->course_code}}</td>
            <td>{{$course->pivot->department}}</td>
            <td>{{$course->pivot->intake}}</td>
            <td>{{$course->pivot->section}}</td>
            <td> <a class="btn btn-secondary" href="/studentList/{{$course->course_code}}/{{$course->pivot->department}}/{{$course->pivot->intake}}/{{$course->pivot->section}}">Student List</a> </td>
            
            </tr>
            @endforeach  

            </table>
        
        </div>
    </div>
</div>
@endsection
