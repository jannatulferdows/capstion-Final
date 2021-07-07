<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Student;
use Illuminate\Support\Facades\Validator;
use Auth;
class StudentController extends Controller
{
    //
    public function index()
    {
        $student = Student::where('email', '=', auth()->user()->email )->first();
        $courses=Course::where('department',$student->department)->get();
        return view('findResources',['courses'=>$courses]);
    }
    public function changePasswordStudent(Request $req)
    { 
        return view('changePasswordStudent');
    }
    public function changePassword(Request $req)
    { 
        Validator::make($req->all(), [
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ])->validate();
        $user = Auth::guard('web')->user();
        $user->password = bcrypt($req->password);
        $user->save();

       return redirect()->route('students_personal_information')->with('success', 'Successfull!!');
    }
}
