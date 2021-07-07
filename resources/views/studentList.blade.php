@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
           <h1><b><center>Student List!</center></b></h1>
           </br>
           </br>
         
           <table border="2" style="text-align:right" class="table table-striped table-bordered">
                <tr> 
                    <th style="width:50px;  text-align:center">Student ID  </th>
                    <th style="width:100px;  text-align:center">Mid   </th>
                    <th style="width:102px;  text-align:center">Attendance </th>
                    <th style="width:100px;  text-align:center">Ass./PPT</th>
                    <th style="width:102px;  text-align:center">CT/Quiz Test </th>
                    <th style="width:102px;  text-align:center">Final </th>
                    <th style="width:70px;  text-align:center">Grade</th>
                   
                    
                </tr>
                @foreach ($studentList as $student)
                <tr>
                    <td colspan="7">
                        <form method="POST" action="/storeResults/{{$student['student_id']}}/{{$course_code}}/{{$department}}/{{$intake}}/{{$section}}">
                        @csrf
                        
                            <table>
                            <td style="width:180px; text-align:center">{{$student['student_id']}}</td>
                            @foreach($results as $result)
                             @if($result['student_id']==$student['student_id'])
                             @php
                             $mid=$result['mid'];
                            $attendance=$result['attendance'];
                             $assignment=$result['assignment'];
                             $ct=$result['ct'];
                             $final=$result['final'];
                             $grade=$mid+$attendance+$assignment+$ct+$final;
                             
                             if($grade<40)
                                  $grade='F';
                             elseif($grade<45)
                                  $grade='D';
                            elseif($grade<50)
                                  $grade='C';
                                  elseif($grade<55)
                                  $grade='C+';
                                  elseif($grade<60)
                                  $grade='B-';
                                  elseif($grade<65)
                                  $grade='B';
                                  elseif($grade<70)
                                  $grade='B+';
                                  elseif($grade<75)
                                  $grade='A-';
                                  elseif($grade<80)
                                  $grade='A';
                                  elseif($grade>=80)
                                  $grade='A+';
                                
                            @endphp
                             
                               
                             @endif
                             @endforeach
                        
                            <td>
                            <div class="field">
                                
                                <div class="control">
                                    <input class="input @error('mid') is-danger @enderror" type="number"  min="0" max="30" name="mid" id="mid" value="{{$mid}}" style="width:160px;">
                                  
                                    <p class="help is-danger">{{$errors->first('mid')}}</p>
                                   
                                </div>
                            </div></td>
                            <td>
                            <div class="field" >
                                
                                <div class="control">
                                    <input class="input @error('attendance') is-danger @enderror" type="number" min="0" max="10" name="attendance" id="mid" value="{{$attendance}}" style="width:160px;">
                                
                                    <p class="help is-danger">{{$errors->first('attendance')}}</p>
                                    
                                </div>
                            </div>
                            </td>
                            <td>
                            <div class="field">
                                
                                <div class="control">
                                    <input class="input @error('assignment') is-danger @enderror" type="number" min="0" max="10" name="assignment" id="assignment" value="{{$assignment}}" style="width:200px;">
                                  
                                    <p class="help is-danger">{{$errors->first('assignment')}}</p>
                                   
                                </div>
                            </div>
                            </td>
                            <td>
                            <div class="field">
                                
                                <div class="control">
                                    <input class="input @error('ct') is-danger @enderror" type="number" min="0" max="10" name="ct" id="ct" value="{{$ct}}" style="width:170px;">
                                   
                                    <p class="help is-danger">{{$errors->first('ct')}}</p>
                                   
                                </div>
                            </div>
                            </td>
                            <td>
                            <div class="field">
                                
                                <div class="control">
                                    <input class="input @error('final') is-danger @enderror" type="number" min="0" max="40" name="final" id="final" value="{{$final}}" style="width:150px;">
                                   
                                    <p class="help is-danger">{{$errors->first('final')}}</p>
                                   
                                </div>
                            </div>
                            </td>
                            <td style="width:100px; text-align:center">
                             {{$grade}}
                             <div class="field is-grouped">
                                <div class="control">
                                    <button class="button is-link" type="submit"><center>Save</center></button>
                                </div>
                            </div>
                           
                        </table>
                            
                
                        </form>
                    </td>
                </tr>
                @endforeach  

            </table>
         
         
        </div>
    </div>
</div>

@endsection
