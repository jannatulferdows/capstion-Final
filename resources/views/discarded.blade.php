<html>
<head>
<style>
body {
  background-color: coral;
}
</style>
</head>
<body>
</html>
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           <h1><b><center>Discarded Messages</center></b></h1>
           </br>
           </br>
           <table border="2" class="center table table-striped table-bordered">
           <tr> <th>Messages</th>
           </tr>
            @foreach ($messages as $message)
            <tr> <td>{{$message->message}}</td>

            
            </tr>
            @endforeach  

            </table>
        
        </div>
    </div>
</div>
@endsection
