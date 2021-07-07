@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1><b><center>Upload Resources</center></b></h1>
           </br>
           </br>
           <table border="2" class="center table table-striped table-bordered">
           <tr> <th>Course Code   </th>
           <th>Course Name  </th>
           <th> </th>
           </tr>
            @foreach ($courses as $course)
            <tr> <td>{{$course->course_code}}</td>
            <td>{{$course->course_name}}</td>
            <td> <a class="btn btn-secondary" href="/upload/{{ $course->course_code }}">Upload</a> </td>
            </tr>
            @endforeach  

            </table>
        
        </div>
    </div>
</div>
@endsection
