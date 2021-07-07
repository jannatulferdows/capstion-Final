@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row justify-content-center">
        <!-- <div class="col-md-8">
          
          <button class="btn add_intake"><h1><b><a href="/add_intake">Add new intake</a></b></h1></button>
          <button class="btn add_course_faculty"><h1><b><a href="/add_course_faculty">Assaign faculty a course</a></b></h1></button>
          <button class="btn start_registration"><h1><b><a href="/start_registration">Start Registration </a></b></h1></button>
          <button class="btn stop_registration"><h1><b><a href="/stop_registration">Stop Registration </a></b></h1></button>
          <button class="btn endSemester"><h1><b><a href="/endSemester">End Semester</a></b></h1></button>
        </div> -->
        <div class="col-3">
          <div class="card">
            <img src="{{asset('/semester.jpg')}}"   height="200" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Add Intake</h5>
              <a href="/add_intake" class="btn btn-success" style="center">Add</a>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card">
            <img src="{{asset('/faculty.jpg')}}"   height="200" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Assaign faculty a course</h5>
              <a href="/add_course_faculty" class="btn btn-success" style="center">Add</a>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card">
            <img src="{{asset('/start.jpg')}}"   height="200" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Start Registration</h5>
              <a href="/start_registration" class="btn btn-success" style="center">Start</a>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card">
            <img src="{{asset('/stop3.jpg')}}"   height="200" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Stop Registration</h5>
              <a href="/stop_registration" class="btn btn-success" style="center">Stop</a>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card">
            <img src="{{asset('/semester2.jpg')}}"   height="200" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">End Semestter</h5>
              <a href="/endSemester" class="btn btn-success" style="center">End</a>
            </div>
          </div>
        </div>
       
  </div>
</div>
@endsection
