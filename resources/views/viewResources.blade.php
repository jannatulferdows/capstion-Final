@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           <!-- <h1><b><center>Welcome to our website!</center></b></h1> -->
           </br>
           </br>
           <table border="2" class="center table table-striped table-bordered">
           <tr>
           <th>S1</th>
           <th>Title</th>
           <th>Description</th>
           <th>View</th>
           <th>Download</th>
           </tr>
           @foreach($file as $key=>$data)
           <tr>
              <td>{{++$key}}</td>
              <td>{{$data->title}}</td>
              <td>{{$data->description}}</td>
              <td><a href="/viewResources/{{$data->id}}">View</td>
              <td><a href="/resourceDownload/{{$data->file}}">Download</td>
           </tr>
           @endforeach
            </table>
        
        </div>
    </div>
</div>

@endsection
