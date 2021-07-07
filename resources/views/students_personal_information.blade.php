
@extends('layouts.app')

@section('content')


<div class="row">
  <div class="card col-3" ></div>
  <div class="card col-6" >
    <div class="card-header">
    <h4>Personal Informations</h4>
    </div>
    <div class="card-body">
    <h3> <b>Name: </b> {{ $student->name }} </h3></br>
    <h3> <b>Id: </b> {{ $student->id }} </h3> </br>
    <h3> <b>Email: </b> {{ $student->email }}</h3></br>
    <h3> <b>Department:</b> {{ $student->department }}</h3> </br>
    <h3> <b>Intake:</b> {{ $student->intake }}</h3> </br>
    <h3> <b>Section:</b> {{ $student->section }}</h3> </br>
      <div class="text-center">
        <a href="/changePasswordStudent" class="btn btn-primary">change Password</a>
      </div>
    </div>
  </div>
  <div class="card col-3" ></div>
</div>

@endsection

