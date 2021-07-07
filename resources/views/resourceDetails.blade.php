@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           <!-- <h1><b><center>Welcome to our website!</center></b></h1> -->
           
          <h2>{{$data->title}}</h2>
          <h4>{{$data->description}}</h4>
          <p>
           
         <iframe src="{{url('storage/'.$data->file)}}" style="width: 700px; height:400px;"></iframe>
         </p>
        </div>
    </div>
</div>
@endsection
