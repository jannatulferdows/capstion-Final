<?php

namespace App\Http\Controllers;
use App\Student;

use App\Faculty;
use App\Course;
use APP\Admin;
use App\Section;
use App\Intakes;
use App\Completed_courses;
use App\Semester_course;
use App\registeredCourses;
use App\Result;
use App\Message;
use DB;
use Illuminate\Support\Facades\Validator;
use Auth;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function  createstudent()
        {
            return view('register');
        }
    public function  storestudent()
        {
           $this->validateStudent();
           $student= new Student(request(['id', 'name' ,'email','department','intake','section']));
           $student->save();
           return redirect(route('add.student'));
        }
    public function  storecourse()
        {
           $this->validateCourse();
           $course= new Course(request(['course_code' ,'course_name','credit' ,'department']));
           $course->save();
           return redirect(route('add.course'));
        }
    public function  storefaculty(Request $request)
        {
           $this->validateFaculty();
           $password = $request->password;
           $faculty= new Faculty(request(['faculty_id', 'name' ,'email','department','password']));
           $faculty['password'] = bcrypt($password);
           $faculty->save();
           return redirect(route('add.faculty'));
        }
    public function  store_course_faculty(Request $request)
        {
            DB::table('course_faculty')->insert(['course_code'=>$request->course_code,
                                                'faculty_id'=>$request->faculty_id,
                                                'department'=>$request->department,
                                                'intake'=>$request->intake,
                                                'section'=>$request->section]);
            // DB::table('course_faculty')->insert(['faculty_id'=>$request->faculty_id]);
            // DB::table('course_faculty')->insert(['department'=>$request->department]);
            // DB::table('course_faculty')->insert(['intake'=>$request->intake]);
            // DB::table('course_faculty')->insert(['section'=>$request->section]);
            return redirect(route('add.coursefaculty'));
            // dd($request->toArray());
        }
    public function students_personal_information()
       {
            $student = Student::where('email', '=', auth()->user()->email )->first();
            //return $student;
            /* $student=App\Student::latest()->get();*/
            return view('students_personal_information',['student'=>$student]);
       }
    public function adminProfile()
       {
            $admin = Admin::where('email', '=', auth()->user()->email )->first();
            /* $student=App\Student::latest()->get();*/
            return view('adminProfile',['admin'=>$admin]);
       }
    public function online_reg()
       {
            $student = Student::where('email', '=', auth()->user()->email )->first();
            $intake = Intakes::where('intake', $student->intake)->where('section', $student->section)->first();
            //return $student->id;
                        $completedCourseList=Completed_courses::where('student_id',$student->id)
                        // ->where('grade','!=','F')
                        ->where('grade','!=','0')
                        ->get();

            $completedCourseList = $completedCourseList->groupBy('course_code');

            $resultableCourse = [];
            foreach ($completedCourseList as $key => $courses) {
            $course = $courses->where('grade', 'A+')->first();
            if($course) {
            array_push($resultableCourse, $course);
            continue;
            }
            $course = $courses->where('grade', 'A')->first();
            if($course) {
            array_push($resultableCourse, $course);
            continue;
            }
            $course = $courses->where('grade', 'A-')->first();
            if($course) {
            array_push($resultableCourse, $course);
            continue;
            }
            $course = $courses->where('grade', 'B+')->first();
            if($course) {
            array_push($resultableCourse, $course);
            continue;
            }
            $course = $courses->where('grade', 'B')->first();
            if($course) {
            array_push($resultableCourse, $course);
            continue;
            }
            $course = $courses->where('grade', 'B-')->first();
            if($course) {
            array_push($resultableCourse, $course);
            continue;
            }
            $course = $courses->where('grade', 'C+')->first();
            if($course) {
            array_push($resultableCourse, $course);
            continue;
            }
            $course = $courses->where('grade', 'C')->first();
            if($course) {
            array_push($resultableCourse, $course);
            continue;
            }
            $course = $courses->where('grade', 'D')->first();
            if($course) {
            array_push($resultableCourse, $course);
            continue;
            }
            $course = $courses->where('grade', 'F')->first();
            if($course) {
            array_push($resultableCourse, $course);
            continue;
            }
            }
           //return $resultableCourse;
           $improves=[];
           
           foreach($resultableCourse as $course) {
                        if($course->grade=="B+")
                        {
                        
                            array_push($improves, $course);
                        }
                        if($course->grade=="B")
                        {
                            array_push($improves, $course);
                        }
                        if($course->grade=="B-")
                        {
                            array_push($improves, $course);
                        }
                                   
                        if($course->grade=="C+")
                        {
                            array_push($improves, $course);
                        }
                        if($course->grade=="C")
                        {
                            array_push($improves, $course);
                        }
                        if($course->grade=="C-")
                        {
                            array_push($improves, $course);
                        }
                        if($course->grade=="D")
                        {
                            array_push($improves, $course);
                        }
                        if($course->grade=="F")
                        {
                            //return $course;
                        //  $improve=[$course];
                        //  array_merge ($improves, $improve);
                         array_push($improves, $course);
                        }
                    }
            // $improve = Completed_courses::where('student_id', $student->id) 
            //             ->where(function ($queryIn){
            //                 $queryIn
            //             ->where('grade',"B+")
            //             ->orWhere('grade',"B")
            //             ->orWhere('grade',"B-")
            //             ->orWhere('grade',"C+")
            //             ->orWhere('grade',"C")
            //             ->orWhere('grade',"C-")
            //             ->orWhere('grade',"D")
            //             ->orWhere('grade',"F");})
            //             ->get();
                      //  return $improves;
            $improveIds = collect($improves)->pluck('course_code')->toArray();
            //return $improveIds;
            $completed = Completed_courses::where('student_id', $student->id)
                        ->where('grade','!=', "F")
                        ->get();
            $completedIds = $completed->pluck('course_code')->toArray();

            $notImprove = Completed_courses::where('student_id', $student->id)
                ->where('grade',"A+")
                ->orWhere('grade',"A")
                ->orWhere('grade',"A-")
                ->get();
            $notImproveIds = $notImprove->pluck('course_code')->toArray();

            $prerequisiteCompleted = Semester_course::whereIn('pre_requisite_id', $completedIds)
                                    ->whereNotIn('course_code', $notImproveIds)
                                    ->get();
            $prerequisiteCompletedIds = $prerequisiteCompleted->pluck('course_code')->toArray();

            $currentCourses = Semester_course::
                            where('department', $student->department)
                            ->where('semester_id', $intake->semester_id)
                            ->where(function ($queryIn) use ($completedIds){
                                $queryIn
                                    ->whereIn('pre_requisite_id', $completedIds)
                                    ->orWhereNull('pre_requisite_id');
                            })
                            ->whereNotIn('course_code', $notImproveIds)
                            ->get();
            $currentIds = $currentCourses->pluck('course_code')->toArray();

            $previousCourses =  Semester_course::
                            where('department', $student->department)
                            ->where('semester_id', '<' , $intake->semester_id ?? 0)
                            ->where(function ($queryIn) use ($completedIds){
                                $queryIn
                                    ->whereIn('pre_requisite_id', $completedIds)
                                    ->orWhereNull('pre_requisite_id');
                            })
                            ->whereNotIn('course_code', $notImproveIds)
                            ->get();
            $previousIds = $previousCourses->pluck('course_code')->toArray();
            $possibleCourseIds = [];
            $possibleCourseIds = array_unique (array_merge ($possibleCourseIds, $improveIds)); 
            // $possibleCourseIds = array_unique (array_merge ($possibleCourseIds, $completedIds)); 
            $possibleCourseIds = array_unique (array_merge ($possibleCourseIds, $prerequisiteCompletedIds)); 
            $possibleCourseIds = array_unique (array_merge ($possibleCourseIds, $currentIds)); 
            $possibleCourseIds = array_unique (array_merge ($possibleCourseIds, $previousIds)); 
            // return $possibleCourseIds;
            $valid_courses=Course::whereIn('course_code',$possibleCourseIds)->get();
            //return $valid_courses;
            $intake=Section::whereIn('course_code',$possibleCourseIds)->first();
            foreach ($valid_courses as $course) {
                $newIntake=Section::where('course_code', $course->course_code)->get();
                $course->intakes = $newIntake;
                                        }
            $status=0; 
            $regStatus=RegisteredCourses::get()->first();
            if(!$regStatus)
               $status=1;
            elseif($regStatus->status==0)
               $status=1;
            // return $regStatus;
            //return $valid_courses; 
            return view('online_reg',['valid_courses'=>$valid_courses,'intake'=>$intake,'status'=>$status]);
        }

   
    public function start_registration()
       {
            Section::truncate();
            registeredCourses::truncate();
            $intakes = Intakes::get();
            foreach ($intakes as $intake) {
               $intake->semester_id += 1;
               $intake->save();
               $sem_courses = DB::table('semester_courses')->where('semester_id', $intake->semester_id)->where('department', $intake->department)->distinct()->get();
               // return $sem_courses;
           
            foreach ($sem_courses as $course) {
                      
                DB::table('sections')->insert([
                    'intake'=>$intake->intake,
                    'section'=>$intake->section,
                    'department'=>$intake->department,
                    'course_code'=>$course->course_code,
                    'student_number'=>0
                ]);}
        }
        
            return view('admin');
    }
    public function stop_registration()
    {
       
       
        $registeredCourses = RegisteredCourses::get();
        foreach ($registeredCourses as $course) {
            $course->status = 1;
            $course->save();
        }
        $students = Student::all();
      //return $students;
      $studentCourses=[];
        foreach($students as $student)
       {      
           $new=RegisteredCourses::where('student_id',$student->id)->get()->toArray();
           $studentCourses = array_merge ($studentCourses, $new) ;
        }
      //return $studentCourses;
         foreach($studentCourses as $course){
            $intake=Student::where('id',$course['student_id'])->first();
            $sem_id=Intakes::where('intake',$intake->intake)->first();

         Result::insert([
            'student_id'=>$course['student_id'],
            'semester_id'=>$sem_id->semester_id,
            'course_code'=>$course['course_code'],
            'mid'=>0,
            'attendance'=>0,
            'assignment'=>0,
            'ct'=>0,
            'final'=>0,
            'Grade'=>'F'
        ]);}
        return view('admin');
    }
    public function endSemester()
    {
        $completedCourses= Result::all();
        foreach($completedCourses as $course)
        {
            
         Completed_courses::insert([
            'student_id'=>$course->student_id,
            'semester_id'=>$course->semester_id,
            'course_code'=>$course->course_code,
             'Grade'=>$course->grade
        ]);

        }
        DB::table('course_faculty')->delete();
        DB::table('registered_courses')->delete();
        return view('admin');
    }
    public function storeResults(Request $request,$student_id,$course_code,$department,$intake,$section)
    {
        //return $department;
       //return $request;
       //return $student_id;
       //return $course_code;
       /* Result::insert([
            'student_id'=>$student_id,
            'course_code'=>$course_code,
            'mid'=>$request->mid,
            'attendance'=>$request->attendance,
            'assignment'=>$request->assignment,
            'ct'=>$request->ct,
            'final'=>$request->final
        ]);*/
        //return $grade;
       // return $request;
       $intake=Student::where('id',$student_id)->first();
       $semester_id=Intakes::where('intake',$intake->intake)->first();
        $grade=$request->mid+$request->attendance+$request->assignment+$request->ct+$request->final;
       // return $grade;               
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
       // return $grade;
           
        $result=Result::where('student_id',$student_id)
                       ->where('course_code',$course_code)
                       ->where('semester_id', $semester_id->semester_id)->first()
                      
                       
                       ->update(['mid'=>$request->mid,
                       
                     
                      'attendance'=>$request->attendance,
                   
                       'assignment' => $request->assignment,
                    
                        'ct' => $request->ct,
                   
                       'final' => $request->final,
                       'grade' =>$grade
                       ]);
        // // $result=Result::where('student_id',$student_id)
        // // ->where('course_code',$course_code)->first();
        //                return $result;
        
        $studentList=RegisteredCourses::where('course_code',$course_code)
                                      
        ->where('intake',$intake->intake)
        ->where('department',$department)
        ->where('section',$section)->get(); 

// return $studentList;
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
    public function finalResults()
    {
        $student = Student::where('email', '=', auth()->user()->email )->first();
        $completedCourseList=Completed_courses::where('student_id',$student->id)
                                              // ->where('grade','!=','F')
                                               ->where('grade','!=','0')
                                               ->get();

        $completedCourseList = $completedCourseList->groupBy('course_code');

        $resultableCourse = [];
        foreach ($completedCourseList as $key => $courses) {
            $course = $courses->where('grade', 'A+')->first();
            if($course) {
                array_push($resultableCourse, $course);
                continue;
            }
            $course = $courses->where('grade', 'A')->first();
            if($course) {
                array_push($resultableCourse, $course);
                continue;
            }
            $course = $courses->where('grade', 'A-')->first();
            if($course) {
                array_push($resultableCourse, $course);
                continue;
            }
            $course = $courses->where('grade', 'B+')->first();
            if($course) {
                array_push($resultableCourse, $course);
                continue;
            }
            $course = $courses->where('grade', 'B')->first();
            if($course) {
                array_push($resultableCourse, $course);
                continue;
            }
            $course = $courses->where('grade', 'B-')->first();
            if($course) {
                array_push($resultableCourse, $course);
                continue;
            }
            $course = $courses->where('grade', 'C+')->first();
            if($course) {
                array_push($resultableCourse, $course);
                continue;
            }
            $course = $courses->where('grade', 'C')->first();
            if($course) {
                array_push($resultableCourse, $course);
                continue;
            }
            $course = $courses->where('grade', 'D')->first();
            if($course) {
                array_push($resultableCourse, $course);
                continue;
            }
            $course = $courses->where('grade', 'F')->first();
            if($course) {
                array_push($resultableCourse, $course);
                continue;
            }
        }
  
                                           //    return $completedCourseList;
      $totalCredit=0;
      $gradePoint=0;
      foreach($resultableCourse as $course)
      {
            $credit=Course::where('course_code',$course->course_code)->first();  
            if($course->grade =='A+')
            { $gradep=4.0;}
            elseif($course->grade =='A')
            {$gradep=3.75;}
            elseif($course->grade =='A-')
            {$gradep=3.50;}
            elseif($course->grade =='B+')
            {$gradep=3.25;}
            elseif($course->grade =='B')
            {$gradep= 3.00;}
            elseif($course->grade =='B-')
            {$gradep=2.75;}
            elseif($course->grade =='C+')
            {$gradep=2.50;}
            elseif($course->grade =='C')
            {$gradep= 2.25;}
            elseif($course->grade =='D')
            {$gradep= 2.00;}
            elseif($course->grade =='F')
            {$gradep= 0.00;}
            $gradePoint=$gradePoint+($gradep*$credit->credit);
            $totalCredit=$totalCredit+$credit->credit;
      }
      if($totalCredit==0)
      {$cgpa="No Course was Taken";}
     else{ $cgpa=$gradePoint/$totalCredit;
    $cgpa= number_format($cgpa, 2, '.', '');
    
    }
                                               //return $student;
                                               //    return $completedCourseList;
       return view('fullResult',['courses'=>$resultableCourse,'cgpa'=>$cgpa]);
      
    }
    public function chooseSem()
    {
        $student = Student::where('email', '=', auth()->user()->email )->first();
        $sem=Intakes::where('intake',$student->intake)->first();
        //return $sem->semester_id;
        return view('chooseSem',['sem'=>$sem->semester_id]);
    }
    public function semResults($i)
    {
              
        $student = Student::where('email', '=', auth()->user()->email )->first();
        $completedCourseList=Result::where('student_id',$student->id)
                                               ->where('semester_id',$i)
                                                //->where('grade','!=','F')
                                               ->where('grade','!=','0')
                                               ->get();
  
                                           //    return $completedCourseList;
      $totalCredit=0;
      $gradePoint=0;
      foreach($completedCourseList as $course)
      {
        $credit=Course::where('course_code',$course->course_code)->first();  
        if($course->grade=='A+')
          { $gradep=4.0;}
        elseif($course->grade=='A')
           {$gradep=3.75;}
        elseif($course->grade=='A-')
           {$gradep=3.50;}
           elseif($course->grade=='B+')
           {$gradep=3.25;}
        elseif($course->grade=='B')
           {$gradep= 3.00;}
        elseif($course->grade=='B-')
           {$gradep=2.75;}
        elseif($course->grade=='C+')
           {$gradep=2.50;}
        elseif($course->grade=='C')
           {$gradep= 2.25;}
        elseif($course->grade=='D')
           {$gradep= 2.00;}
           elseif($course->grade=='F')
           {$gradep= 0.00;}
         
        $gradePoint=$gradePoint+($gradep*$credit->credit);
        $totalCredit=$totalCredit+$credit->credit;
      }
      if($totalCredit==0)
      {$sgpa="No Course was Taken";}
     else{ $sgpa=$gradePoint/$totalCredit;
        $sgpa= number_format($sgpa, 2, '.', '');
        
    }
        // return       $completedCourseList;              
      return view('sgpa',['courses'=>$completedCourseList,'sgpa'=>$sgpa]);
    }
    public function add_semester_course(request $request)
    {
        DB::table('semester_courses')->insert(['semester_id'=>$request->semester_id,
        'course_code'=>$request->course_code,
        'department'=>$request->department,
        'pre_requisite_id'=>$request->pre_req]);

return redirect(route('add.semester_course'));

    }

    public function addstudentview()
    {

  
        return view('add_student');
    }
    public function selectCourse(Request $request)
    {
        $student = Student::where('email', '=', auth()->user()->email )->first();

        $course = Course::where('course_code',$request->course_code)->first();
        if(!$course) return 'Something wrong';
              
        $totalExistCredit = RegisteredCourses::where([
            'student_id'=>$student->id
        ])->sum('credit');


        if(($totalExistCredit + $course->credit) > 18) {
            return "Credit exceed";
        }

        $totalStudents = Section::where('intake',$request->intake)
            ->where('section',$request->section)
            ->where('course_code',$request->course_code)->first();

        if(($totalStudents->student_number) >= 40) {
            return "Student limit exceed";
        }

        RegisteredCourses::insert([
            'student_id'=>$student->id,
            'course_code'=>$request->course_code,
            'department'=>$student->department,
            'intake'=>$request->intake,
            'section'=>$request->section,
            'credit'=>$course->credit,
            'status'=>0
        ]);

        $totalStudents->student_number += 1;
        $totalStudents->save();
        return redirect()->back();
    }
    public function cancelCourse(Request $request)
    {
        $student = Student::where('email', '=', auth()->user()->email )->first();

        $course = Course::where('course_code',$request->course_code)->first();
        if(!$course) return 'Invalid course';
              
        $existRegisteredCourse = RegisteredCourses::where([
            'student_id'=>$student->id,
            'course_code'=>$request->course_code
        ])->first();

        if(!$existRegisteredCourse) return "Something wrong";
        $existRegisteredCourse->delete();

        $totalStudents = Section::where('intake',$request->intake)
            ->where('section',$request->section)
            ->where('course_code',$request->course_code)->first();

        $totalStudents->student_number -= 1;
        $totalStudents->save();
        return redirect()->back();
    }

    public function currentCourses()
    {
        $student = Student::where('email', '=', auth()->user()->email )->first();
       // return $student->id;
        $currentCourses = RegisteredCourses::where('student_id',$student->id)
                                          ->where('status',1)->get();
        $results=[];
        foreach($currentCourses as $course){
         $result=Result::where('student_id',$student->id)
                        ->where('course_code',$course->course_code)->get()->toArray();
         $results=array_merge($results,$result);
        }
      // return $currentCourses;
        return view('currentCourses',['currentCourses'=>$currentCourses,'results'=>$results]);

    }
   
    public function add_intake(request $request)
    {
        $exist = DB::table('intakes')->where(['intake'=>$request->intake, 'section'=>$request->section,
        'department'=>$request->department])->first();
        if($exist) return ' Already exist.';
        DB::table('intakes')->insert(['intake'=>$request->intake,
        'section'=>$request->section,
        'semester_id'=>0,
        'department'=>$request->department]);

return redirect(route('add.intake'));

    }
    public function manageSemester()
    {
        return view('manageSemester');
    }
    public function manageCourses()
    {
        return view('manageCourses');
    }
    public function manageStudents()
    {
        return view('manageStudents');
    }
    public function manageFaculty()
    {
        return view('manageFaculty');
    }
    public function changePasswordAdmin(Request $req)
    { 
        return view('changePasswordAdmin');
    }
    public function adminMessage()
    {

      
        $messages=Message::all();
     
      return view('discarded',['messages'=>$messages]);
    
    
    }
    public function changePassword(Request $req)
    { 
        Validator::make($req->all(), [
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ])->validate();
        $user = Auth::guard('admin')->user();
        $user->password = bcrypt($req->password);
        $user->save();

       return redirect()->route('adminProfile')->with('success', 'Successfull!!');
    }
    public function validateStudent()
    {
        
        return request()->validate(
            [
                'id' => 'required|integer',
                'name' => 'required',
                'email' => 'required|email',
                'department' => 'required',
                'intake' => 'required|integer',
                'section' => 'required|integer'
                
            ]
        );
    }


    public function validateCourse()
    {
        
        return request()->validate(
            [
              
                'course_code' => 'required',
                'course_name' => 'required',
                
                'department' => 'required'
                
                
                
            ]
        );
    }
    public function validateFaculty()
    {
        
        return request()->validate(
            [
                'faculty_id' => 'required|integer',
                'name' => 'required',
                'email' => 'required|email',
                'department' => 'required',
                'password' => 'required|min:8'
                
            ]
        );
    }
   
}
