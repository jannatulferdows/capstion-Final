@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-3">
          <div class="card">
            <img src="{{asset('/faculty.jpg')}}"   height="200" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Add Faculty</h5></br>
                <a href="/add_faculty" class="btn btn-success" style="center">Add</a>
            </div>
          </div>
        </div>
        <!-- <div class="col-md-8">
          
        <button class="btn add_faculty"><h1><b><a href="/add_faculty">Add new faculty</a></b></h1></button>
        </div> -->
       
    </div>
</div>
@endsection
