@extends('layouts.app')
   @section('content')
   <h1><center>Add new course</center></h1>
   <div id="wrapper">
        <div id="page" class="container">
        <div class="row justify-content-center">
        <div class="col-6">
           <form method="POST" action="/add_course">
               @csrf
                <div class="form-group">
                   <label class="label" for="course_code" ><h3><b><center>Course Code</center></b></h3></label>
                   <div class="control">
                      <input class="input form-control @error('course_code') is-danger @enderror" type="text" name="course code" id="course code" value="{{old('course_code')}}" placeholder="course code">
                      
                       <p class="help is-danger">{{$errors->first('course_code')}}</p>
                      
                   </div>
               </div>
               
                <div class="form-group">
                   <label class="label" for="course_name"><h3><b><center>Course Name</center></b></h3></label>
                   <div class="control">
                      <input class="input form-control @error('course_name') is-danger @enderror" type="text" name="course_name" id="course_id" value="{{old('course_name')}}" placeholder="course name">
                     
                       <p class="help is-danger">{{$errors->first('course_name')}}</p>
                      
                   </div>
               </div>
                <div class="form-group">
                   <label class="label" for="credit"><h3><b><center>Course Credit</center></b></h3></label>
                   <div class="control">
                      <input class="input form-control @error('credit') is-danger @enderror" type="text" name="credit" id="credit" value="{{old('credit')}}" placeholder="course credit">
                     
                       <p class="help is-danger">{{$errors->first('credit')}}</p>
                     
                   </div>
               </div>
                <div class="form-group">
                   <label class="label" for="department"><h3><b><center>Department</center></b></h3></label>
                   <div class="control">
                      <input class="input form-control @error('department') is-danger @enderror" type="text" name="department" id="department" value="{{old('department')}}" placeholder="department">
                      
                       <p class="help is-danger">{{$errors->first('department')}}</p>
                       
                   </div>
               </div>
              
               
               <div class="field is-grouped">
                   <div class="control">
                       <button class="button is-link" type="submit"><center>Submit</center></button>
                   </div>
               </div>
           </form>
           </div>
        </div>
        </div>
    </div>
    @endsection