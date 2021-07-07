@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
      <div class="col-3">
        <div class="card">
           <img src="{{asset('/setting.jpg')}}"   height="200" class="card-img-top" alt="...">
           <div class="card-body">
             <!-- <h5 class="card-title">Profile</h5> -->
             <!-- <p class="card-text"></p> -->
             <a href="/faculties_personal_information" class="btn btn-success" style="center">Profile Setting</a>
           </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card ">
           <img src="{{asset('/course.jpg')}}"  height="200" class="card-img-top" alt="...">
           <div class="card-body">
             <!-- <h5 class="card-title">Courses</h5> -->
             <!-- <p class="card-text"></p> -->
             <a href="/faculty_courses" class="btn btn-success" style="center">Courses</a>
           </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card h-100">
           <img src="{{asset('/resource.jpg')}}"  height="200" class="card-img-top" alt="...">
           <div class="card-body">
             <!-- <h5 class="card-title">Courses</h5> -->
             <!-- <p class="card-text"></p> -->
             <a href="/uploadResources" class="btn btn-success" style="center">Upload Files</a>
           </div>
        </div>
        
           <!-- <button class="personal_info"><h1><b><a href="/faculties_personal_information">Personal Info</a></b></h1></button> -->
           <!-- <button class="faculty_courses"><h1><b><a href="/faculty_courses">Courses</a></b></h1></button> -->
           <!-- <button class="uploadResources"><h1><b><a href="/uploadResources">Upload Resources</a></b></h1></button> -->
      </div>
      <div class="col-3">
        <div class="card ">
           <img src="{{asset('/download.png')}}"  height="200" class="card-img-top" alt="...">
           <div class="card-body">
             <!-- <h5 class="card-title">Courses</h5> -->
             <!-- <p class="card-text"></p> -->
             <a href="/findResourcesFaculty" class="btn btn-success" style="center">Find Resources</a>
           </div>
        </div>
      </div>
    </div>
</div>
@endsection
