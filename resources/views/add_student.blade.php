@extends('layouts.app')
   @section('content')
   <h1><center>Add new student</center></h1>
   <div id="wrapper">
        <div id="page" class="container">
        <div class="row justify-content-center">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <form method="POST" action="/add_student">
                    @csrf
                    <div class="form-group">
                   <label class="label" for="id"  ><h3><b><center>ID</center></b></h3></label>
                   <div class="control">
                       <input class="input form-control @error('id') is-danger @enderror" type="text" name="id" id="id" value="{{old('id')}}" placeholder="ID">
                    
                       <p class="help is-danger">{{$errors->first('id')}}</p>
                     
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
                   <label class="label" for="intake"><h3><b><center>Intake</center></b></h3></label>
                   <div class="control">
                       <input class="input form-control @error('intake') is-danger @enderror" type="text" name="intake" id="intake" value="{{old('intake')}}" placeholder="intake">
                 
                       <p class="help is-danger">{{$errors->first('intake')}}</p>
                    
                   </div>
               </div>
               <div class="form-group">
                   <label class="label" for="section"><h3><b><center>Section</center></b></h3></label>
                   <div class="control">
                       <input class="input form-control @error('section') is-danger @enderror" type="text" name="section" id="section" value="{{old('section')}}" placeholder="section">
                   
                       <p class="help is-danger">{{$errors->first('section')}}</p>
                 
                   </div>
               </div>
                 
                 
                    <button type="submit" class="btn btn-primary">Submit</button>
               
           </div>
        </div>
    </div>
    @endsection