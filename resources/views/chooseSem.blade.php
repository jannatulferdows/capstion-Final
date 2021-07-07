@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           <h1><b><center>See Semester Wise GPA!</center></b></h1>
           </br>
           </br>
           <table border="2" class="center">
           <tr> <th>Semester Number</th>
          
           <th> </th></tr>
            @for($i=1;$i<=$sem;$i++)
            <tr> <td>{{$i}}</td>
       
            <td> <button class="btn choose"><h1><b><a href="/choose/{{$i}}">Choose</a></b></h1></button></td>
            </tr>
            @endfor

            </table>
        
        </div>
    </div>
</div>
@endsection
