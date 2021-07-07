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
             <a href="/students_personal_information" class="btn btn-success" style="center">Profile Setting</a>
           </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card ">
           <img src="{{asset('/course.jpg')}}"  height="200" class="card-img-top" alt="...">
           <div class="card-body">
             <!-- <h5 class="card-title">Courses</h5> -->
             <!-- <p class="card-text"></p> -->
             <a href="/currentCourses" class="btn btn-success" style="center">Current Courses</a>
           </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card ">
           <img src="{{asset('/download.png')}}"  height="200" class="card-img-top" alt="...">
           <div class="card-body">
             <!-- <h5 class="card-title">Courses</h5> -->
             <!-- <p class="card-text"></p> -->
             <a href="/findResources" class="btn btn-success" style="center">Find Resources</a>
           </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card ">
           <img src="{{asset('/chat3.png')}}"  height="200" class="card-img-top" alt="...">
           <div class="card-body">
             <!-- <h5 class="card-title">Courses</h5> -->
             <!-- <p class="card-text"></p> -->
             <a href="/botman/tinker" class="btn btn-success" style="center">Chat</a>
           </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-3">
        <div class="card ">
          <img src="{{asset('/result2.jpg')}}"  height="200" class="card-img-top" alt="...">
          <div class="card-body">
             <!-- <h5 class="card-title">Courses</h5> -->
             <!-- <p class="card-text"></p> -->
            <a href="/finalResults" class="btn btn-success" style="center">Result</a>
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card ">
          <img src="{{asset('/progress.jpg')}}"  height="200" class="card-img-top" alt="...">
          <div class="card-body">
             <!-- <h5 class="card-title">Courses</h5> -->
             <!-- <p class="card-text"></p> -->
            <a href="/chooseSem" class="btn btn-success" style="center">Semester Wise Results</a>
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card ">
          <img src="{{asset('/registration.jpg')}}"  height="200" class="card-img-top" alt="...">
          <div class="card-body">
             <!-- <h5 class="card-title">Courses</h5> -->
             <!-- <p class="card-text"></p> -->
            <a href="/online_reg" class="btn btn-success" style="center">Register Courses</a>
          </div>
        </div>
      </div>
    </div>
</div>
      
           
           <!-- <div class="position-absolute top-50 start-50 translate-middle">
                <br><br>
                <button type="button" class="btn btn-outline-danger" onclick="window.location.href='/students_personal_information'">Personal Info</button>
                <br> <br>
                <button type="button" class="btn btn-outline-danger" onclick="window.location.href='/online_reg'">Online Registration</button>
                <br><br>
                <button type="button" class="btn btn-outline-danger" onclick="window.location.href='/findResources'">Find Resources</button>
                <br><br>
                <button type="button" class="btn btn-outline-danger" onclick="window.location.href='/currentCourses'">Current Courses</button>
                <br><br>
                <button type="button" class="btn btn-outline-danger" onclick="window.location.href='/finalResults'">Results</button>
                <br><br>
                <button type="button" class="btn btn-outline-danger" onclick="window.location.href='/chooseSem'">Semester Wise Results</button>
                <br><br>
                <button type="button" class="btn btn-outline-danger" onclick="window.location.href='/botman/tinker'">Message</button>
           </div> -->


 

@endsection
