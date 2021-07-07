@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row justify-content-center">
      
    <div class="col-3">
        <div class="card">
          <img src="{{asset('/course.jpg')}}"   height="200" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Add Course</h5></br>
            <a href="/add_course" class="btn btn-success" style="center">Add</a>
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card">
          <img src="{{asset('/course2.png')}}"   height="200" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Add semester and pre-requisite id</h5>
            <a href="/add_semester_course" class="btn btn-success" style="center">Add</a>
          </div>
        </div>
      </div>
        <!-- <div class="col-md-8">
        <button class="btn add_course"><h1><b><a href="/add_course">Add new course</a></b></h1></button>
        <button class="btn add_sem_course"><h1><b><a href="/add_semester_course">Add semester and pre-requisite id</a></b></h1></button>
        </div> -->
       
  </div>
</div>
@endsection
