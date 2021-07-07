@extends('layouts.app')
   @section('content')
   <h1><center>Upload Resource</center></h1>
   <div id="wrapper">
        <div id="page" class="container">
            <div class="row justify-content-center">
                <div class="col-3"></div>
                <div class="col-6">
                    <br>
                    <h4><center>Course Code:: {{$course_code}}</center></h4>
                    
                    <form method="POST" action="/uploaded/{{ $course_code }}" enctype="multipart/form-data">
                        @csrf
                        <label class="label" for="name"><h3><b><center>Title</center></b></h3></label>
                        <input class="form-control" type="text" name="title" placeholder="title">
                        <br>
                        <label class="label" for="name"><h3><b><center>description</center></b></h3></label>
                        <input class="form-control" type="text" name="description" placeholder="description">
                        <br>

                        <input class="form-control" type="file" name="file">
                        <br>
                        <input class="btn btn-primary" type="submit" value="Submit">
                    </form>
                </div>
                <div class="col-3"></div>
            </div>
        </div>
    </div>
    @endsection