@extends('layouts.app')
   @section('content')
   <h1><center>Add new faculty</center></h1>
   <div id="wrapper">
        <div id="page" class="container">
        <div class="row justify-content-center">
        <div class="col-6">
           <form method="POST" action="/add_faculty">
               @csrf
               <div class="form-group">
                   <label class="label" for="faculty_id" ><h3><b><center>ID</center></b></h3></label>
                   <div class="control">
                       <input class="input form-control @error('faculty_id') is-danger @enderror" type="text" name="faculty_id" id="faculty_id" value="{{old('faculty_id')}}" placeholder="ID">
                     
                       <p class="help is-danger">{{$errors->first('faculty_id')}}</p>
                      
                   </div>
               </div>
               
               <div class="form-group">
                   <label class="label" for="name"><h3><b><center>Name</center></b></h3></label>
                   <div class="control">
                       <input class="input form-control @error('name') is-danger @enderror" type="text" name="name" id="name" value="{{old('name')}}" placeholder="name">
                     
                       <p class="help is-danger">{{$errors->first('name')}}</p>
                     
                   </div>
               </div>
               <div class="form-group">
                   <label class="label" for="email"><h3><b><center>Email</center></b></h3></label>
                   <div class="control">
                       <input class="input form-control @error('email') is-danger @enderror" type="text" name="email" id="email" value="{{old('email')}}" placeholder="email">
                       
                       <p class="help is-danger">{{$errors->first('email')}}</p>
                      
                   </div>
               </div>
               <div class="form-group">
                   <label class="label" for="department"><h3><b><center>Department</center></b></h3></label>
                   <div class="control">
                       <input class="input form-control @error('department') is-danger @enderror" type="text" name="department" id="department" value="{{old('department')}}" placeholder="department"> 
                       
                       <p class="help is-danger">{{$errors->first('department')}}</p>
                    
                   </div>
               </div>
              
               <div class="form-group">
                   <label class="label" for="password"><h3><b><center>Password</center></b></h3></label>
                   <div class="control">
                       <input class="input form-control @error('password') is-danger @enderror" type="text" name="password" id="password" value="{{old('password')}}" placeholder="password">
                       
                       <p class="help is-danger">{{$errors->first('password')}}</p>
                     
                   </div>
               </div>
               <button type="submit" class="btn btn-primary">Submit</button>
           </form>
           </div>
        </div>
    </div>
    @endsection