<?php

namespace App\Http\Controllers;
use App\Course;
use Illuminate\Http\Request;
use App\Faculty;
use App\RegisteredCourses;
use App\Result;
use Illuminate\Support\Facades\Validator;
use Auth;
class FacultyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:faculty');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('faculty');
    }
    public function faculties_personal_information()
    {
        $faculty = Faculty::where('email', '=', auth()->user()->email )->first();
        
       /* $student=App\Student::latest()->get();*/
        return view('faculties_personal_information',['faculty'=>$faculty]);
    }
    public function faculties_course_information()
    {
        $faculty = auth()->user();
        $courses=$faculty->courses;
       // return $courses->toArray();
       
      //return $studentList;
        //  dd($courses->toArray());
       /* $student=App\Student::latest()->get();*/
      return view('faculty_courses',['faculty_courses'=>$courses]);
    
    }
    public function studentList($course_code,$department,$intake,$section)
    {
        $faculty = auth()->user();
        //$courses=$faculty->courses;
       // return $courses->toArray();
   //return $course_code;
   // return $intake;
     $studentList=RegisteredCourses::where('course_code',$course_code)
                                      
                                     ->where('intake',$intake)
                                     ->where('department',$department)
                                     ->where('section',$section)->get(); 
            
      //  return  $studentList;
       $results=[];
        foreach($studentList as $student)
        {
            $result=Result::where('student_id',$student->student_id)
                          ->where('course_code',$course_code)->get()->toArray();
            $results=array_merge($results,$result);
        }
      // return $results;
    //  return $studentList;
        //  dd($courses->toArray());
       /* $student=App\Student::latest()->get();*/
   
      return view('studentList',['studentList'=>$studentList,'course_code'=>$course_code,'results'=>$results,'department'=>$department,'intake'=>$intake,'section'=>$section]);
    
    }
    public function uploadResources()
    {
        $faculty = Faculty::where('email', '=', auth()->user()->email )->first();
        //return $faculty;
       $courses=Course::where('department',$faculty->department)->get();
     //return $courses;
       return view('uploadResources',['courses'=>$courses]);
      
    }
    public function resource()
    {
        $faculty = Faculty::where('email', '=', auth()->user()->email )->first();
        $courses=Course::where('department',$faculty->department)->get();
        return view('findResources',['courses'=>$courses]);
    }
    public function changePasswordFaculty(Request $req)
    { 
        return view('changePassword');
    }
    public function changePassword(Request $req)
    { 
        Validator::make($req->all(), [
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ])->validate();
        $user = Auth::guard('faculty')->user();
        $user->password = bcrypt($req->password);
        $user->save();

       return redirect()->route('faculties_personal_information')->with('success', 'Successfull!!');
    }

}
