@extends('layouts.app')
   @section('content')
   <h1><center>Add new Intake</center></h1>
   <div id="wrapper">
        <div id="page" class="container">
        <div class="row justify-content-center">
        <div class="col-6">
           <form method="POST" action="/add_intake">
               @csrf

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
           </form>
           </div>
        </div>
    </div>
    @endsection