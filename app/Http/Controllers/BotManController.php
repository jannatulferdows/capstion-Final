<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;

use App\Student;
use App\Faculty;
use App\Course;
use App\Section;
use App\Intakes;
use App\Completed_courses;
use App\Semester_course;
use App\registeredCourses;
use App\Result;
use App\Message;
use DB;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;
use App\Conversations\ExampleConversation;

class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {
      
        $botman = app('botman');
        $botman->hears('{message}', function($botman, $message) {
         
             
            if($message == 'Hi'||$message == 'hi'||$message == 'hello'||$message == 'hlw'||$message == 'Hello') {
               
                $student = Student::where('email', '=', auth()->user()->email )->first();
               
                $botman->reply('Hello '.$student->name."! Hope you are having a good day!");

            }
           else if(str_contains($message, 'cgpa')||str_contains($message, 'result')){
           
                $student = Student::where('email', '=', auth()->user()->email )->first();
                $completedCourseList=Completed_courses::where('student_id',$student->id)
                                                       ->where('grade','!=','F')
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
                 
                $gradePoint=$gradePoint+($gradep*$credit->credit);
                $totalCredit=$totalCredit+$credit->credit;
              }
              if($totalCredit==0)
              { 
                  $cgpa=3.75;
                  $botman->reply('You are doing well');
                $botman->reply('Your current cgpa is:  '.strval($cgpa));
                $botman->reply('Keep Progressing');
            }
              
             else{ $cgpa=$gradePoint/$totalCredit;
                $botman->reply('You are doing well');
                $botman->reply('Your current cgpa is:  '.strval($cgpa));
                $botman->reply('Keep Progressing');
            }
              
              
      
               
            }
      
           else if(str_contains($message, 'you')&&str_contains($message, 'name')){
                $botman->reply('My name is BotMate and you can call me BM');
            }
         else if(str_contains($message, 'you')&&str_contains($message, 'doing')){
                $botman->reply('I am chatting with you! ');
            }
        else if(str_contains($message, 'how')&&str_contains($message, 'are')){
            $botman->reply('I am fine and what about you?');
        }
        else if(str_contains($message, 'How')&&str_contains($message, 'are')){
            $botman->reply('I am fine and what about you?');
        }
        else if(str_contains($message, 'fine')||str_contains($message, 'good')){
            $botman->reply('Thats nice!');
        }

        else if($message == 'startConversation') {
            $botman->startConversation(new ExampleConversation());

        }
        else {
           //dd($message);
            //return $message;
            $m=new Message();
             $m->message=$message;
             $m->save();
         
            $botman->reply('Talk to you later!');
}
        });

        $botman->listen();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function tinker()
    {
        return view('tinker');
    }

    /**
     * Loaded through routes/botman.php
     * @param  BotMan $bot
     */
    public function startConversation(BotMan $bot)
    {
        $bot->startConversation(new ExampleConversation());
    }
}
