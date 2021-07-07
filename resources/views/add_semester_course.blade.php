@extends('layouts.app')
   @section('content')
   <h1><center>Add Pre Requisite Course Code</center></h1>
   <div id="wrapper">
        <div id="page" class="container">
        <div class="row justify-content-center">
        <div class="col-6">
           <form method="POST" action="/add_semester_course">
               @csrf
               <div class="form-group">
                   <label class="label" for="semester_id" ><h3><b><center>Semester ID</center></b></h3></label>
                   <div class="control">
                      <input class="input form-control @error('semester_id') is-danger @enderror" type="text" name="semester_id" id="semester_id" value="{{old('semester_id')}}"  placeholder="semester no">
                      
                       <p class="help is-danger">{{$errors->first('semester_id')}}</p>
                      
                   </div>
               </div>
               
               <div class="form-group">
                   <label class="label" for="course_code"><h3><b><center>Course Code</center></b></h3></label>
                   <div class="control">
                      <input class="input form-control @error('course_code') is-danger @enderror" type="text" name="course_code" id="course_code" value="{{old('course_code')}}"  placeholder="course code">
                       
                       <p class="help is-danger">{{$errors->first('course_code')}}</p>
                      
                   </div>
                
               </div>
               <div class="form-group">
                   <label class="label" for="department"><h3><b><center>Department</center></b></h3></label>
                   <div class="control">
                      <input class="input form-control @error('department') is-danger @enderror" type="text" name="department" id="department" value="{{old('department')}}"  placeholder="department">
                      
                       <p class="help is-danger">{{$errors->first('department')}}</p>
                       
                   </div>
               </div>
               <div class="form-group">
                   <label class="label" for="pre_req"><h3><b><center>Pre-requisite Course code</center></b></h3></label>
                   <div class="control">
                      <input class="input form-control @error('pre_req') is-danger @enderror" type="text" name="pre_req" id="pre_req" value="{{old('pre_req')}}"  placeholder="pre requisite course code">
                       
                       <p class="help is-danger">{{$errors->first('pre_req')}}</p>
                     
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
    @endsection