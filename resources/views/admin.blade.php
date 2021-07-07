@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      
      <div class="col-3">
        <div class="card">
           <img src="{{asset('/semester.jpg')}}"   height="200" class="card-img-top" alt="...">
           <div class="card-body">
             <!-- <h5 class="card-title">Profile</h5> -->
             <!-- <p class="card-text"></p> -->
             <a href="/manageSemester" class="btn btn-success" style="center">Semester Management</a>
           </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card ">
           <img src="{{asset('/course.jpg')}}"  height="200" class="card-img-top" alt="...">
           <div class="card-body">
             <!-- <h5 class="card-title">Courses</h5> -->
             <!-- <p class="card-text"></p> -->
             <a href="/manageCourses" class="btn btn-success" style="center">Course Management</a>
           </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card h-100">
           <img src="{{asset('/student.jpg')}}"  height="200" class="card-img-top" alt="...">
           <div class="card-body">
             <!-- <h5 class="card-title">Courses</h5> -->
             <!-- <p class="card-text"></p> -->
             <!-- <a href="/manageStudents" class="btn btn-success" style="center">Student Management</a> -->
             <a href="/add_student" class="btn btn-success" style="center">Add student</a>
           </div>
        </div>
        
           <!-- <button class="personal_info"><h1><b><a href="/faculties_personal_information">Personal Info</a></b></h1></button> -->
           <!-- <button class="faculty_courses"><h1><b><a href="/faculty_courses">Courses</a></b></h1></button> -->
           <!-- <button class="uploadResources"><h1><b><a href="/uploadResources">Upload Resources</a></b></h1></button> -->
      </div>
      <div class="col-3">
        <div class="card ">
           <img src="{{asset('/faculty.jpg')}}"  height="200" class="card-img-top" alt="...">
           <div class="card-body">
             <!-- <h5 class="card-title">Courses</h5> -->
             <!-- <p class="card-text"></p> -->
             <!-- <a href="/manageFaculty" class="btn btn-success" style="center">Faculty Management</a> -->
             <a href="/add_faculty" class="btn btn-success" style="center">Add Faculty</a>
           </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card ">
           <img src="{{asset('/admin.jpg')}}"  height="200" class="card-img-top" alt="...">
           <div class="card-body">
             <!-- <h5 class="card-title">Courses</h5> -->
             <!-- <p class="card-text"></p> -->
             <!-- <a href="/manageFaculty" class="btn btn-success" style="center">Faculty Management</a> -->
             <a href="/add_admin" class="btn btn-success" style="center">Add Admin</a>
           </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card">
           <img src="{{asset('/setting.jpg')}}"   height="200" class="card-img-top" alt="...">
           <div class="card-body">
             <!-- <h5 class="card-title">Profile</h5> -->
             <!-- <p class="card-text"></p> -->
             <a href="/adminProfile" class="btn btn-success" style="center">Profile Setting</a>
           </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card">
           <img src="{{asset('/chat.jpg')}}"   height="200" class="card-img-top" alt="...">
           <div class="card-body">
             <!-- <h5 class="card-title">Profile</h5> -->
             <!-- <p class="card-text"></p> -->
             <a href="/adminMessage" class="btn btn-success" style="center">Discarded Messages</a>
           </div>
        </div>
      </div>
    </div>
</div>
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          
           <button class="btn add_student"><h1><b><a href="/add_student">Add new student</a></b></h1></button>
           <button class="btn add_faculty"><h1><b><a href="/add_faculty">Add new faculty</a></b></h1></button>
           <button class="btn add_course"><h1><b><a href="/add_course">Add new course</a></b></h1></button>
           <button class="btn add_course_faculty"><h1><b><a href="/add_course_faculty">Add course faculty</a></b></h1></button>
           <button class="btn add_intake"><h1><b><a href="/add_intake">Add new intake with section </a></b></h1></button>
           <button class="btn add_sem_course"><h1><b><a href="/add_semester_course">Add semester wise course</a></b></h1></button>
           <button class="btn start_registration"><h1><b><a href="/start_registration">Start Registration </a></b></h1></button>
           <button class="btn stop_registration"><h1><b><a href="/stop_registration">Stop Registration </a></b></h1></button>
           <button class="btn endSemester"><h1><b><a href="/endSemester">End Semester</a></b></h1></button>
        </div>
        </div>
    </div>
</div> -->
@endsection
