@extends('layouts.app')
@section('content')
@if($status==0)
             Registration have not started yet 
@else



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1><b><center>Choose Courses</center></b></h1>
            </br>
            </br>
       
            
            <table border="2" class="center table table-striped table-bordered">
            <tr> 
                    <th>Course Code   </th>
                    <th>Credit   </th>
                    <th>Intake   </th>
                    <th>Section   </th>
                    <th></th>

            </tr>
            @foreach ($valid_courses as $course)
                <tr>
                    <td>{{$course->course_code}}</td>
                    <td>{{$course->credit}}</td>
                    <td>{{$course->intakes->first()->intake ?? ''}}</td>
                    <td>
                        <form method="POST" action="{{ $course->isTakenThisSemester() == false ? route('selectCourse') : route('cancelCourse') }}">
                            <input type="hidden" name="credit" value="{{$course->credit}}">
                            <input type="hidden" name="course_code" value="{{$course->course_code}}">
                            <input type="hidden" name="intake" value="{{$course->intakes->first()->intake ?? ''}}">
                            @csrf
                            @if($course->isTakenThisSemester() == false)
                            <select name="section" id="">
                                @foreach ($course->intakes as $intake)
                                    <option value="{{$intake->section}}">{{$intake->section}}</option>
                                @endforeach  
                            </select>
                            <button>Select Course</button>
                            @else 
                            <input type="hidden" name="section" value="{{$course->isTakenThisSemester()->section}}">
                            Sec:{{ $course->isTakenThisSemester()->section}}
                            <button>Cancel Course</button>
                            @endif
                        </form>
                    </td>
                </tr>
            @endforeach  
            

           
            </table>
        </div>
        </div>
    </div>
</div>

@endif
@endsection