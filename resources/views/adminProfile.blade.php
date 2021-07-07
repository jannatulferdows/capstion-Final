
@extends('layouts.app')

@section('content')
<div class="row">
  <div class="card col-3" ></div>
  <div class="card col-6" >
    <div class="card-header">
    <h4>Personal Informations</h4>
    </div>
    <div class="card-body">
    <h3> <b>Name: </b> {{ $admin->name }} </h3></br>

    <h3> <b>Email: </b> {{ $admin->email }}</h3></br>
         
      <div class="text-center">
        <a href="/changePasswordAdmin" class="btn btn-primary">change Password</a>
      </div>
    </div>
  </div>
  <div class="card col-3" ></div>
</div>

@endsection
