<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/stlogin', function () {
    return view('stlogin');
});
Route::get('/bot', function () {
    return view('bot');
});

Route::match(['get', 'post'], '/botman', 'BotManController@handle');
Route::get('/botman/tinker', 'BotManController@tinker');



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',function()
  { return view('first');}
);




Route::get('/admin/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');


Route::prefix('faculty')->group(function(){
    Route::get('/login', 'Auth\FacultyLoginController@showLoginForm')->name('faculty.login');
    Route::post('/login', 'Auth\FacultyLoginController@login')->name('faculty.login.submit');
    Route::get('/', 'FacultyController@index')->name('faculty.dashboard');
});
Route::get('/faculties_personal_information','FacultyController@faculties_personal_information')->name('faculties_personal_information');
Route::get('/changePasswordFaculty','FacultyController@changePasswordFaculty');
Route::post('/changePasswordFaculty','FacultyController@changePassword');
Route::get('/changePasswordStudent','StudentController@changePasswordStudent');
Route::post('/changePasswordStudent','StudentController@changePassword');
Route::get('/changePasswordAdmin','RegisterController@changePasswordAdmin');
Route::post('/changePasswordAdmin','RegisterController@changePassword');
Route::get('/manageSemester','RegisterController@manageSemester');
Route::get('/manageCourses','RegisterController@manageCourses');
Route::get('/manageStudents','RegisterController@manageStudents');
Route::get('/manageFaculty','RegisterController@manageFaculty');
Route::get('/add_student','RegisterController@addstudentview')->name('add.student')->middleware('auth:admin');
Route::post('/add_student','RegisterController@storestudent')->middleware('auth:admin');
Route::get('/students', function () {
    return view('student');
})->name('student.dashboard')->middleware('auth:web');
Route::get('/students_personal_information','RegisterController@students_personal_information')->name('students_personal_information')->middleware('auth:web');;
Route::get('/adminProfile','RegisterController@adminProfile')->name('adminProfile')->middleware('auth:admin');
Route::get('/adminMessage','RegisterController@adminMessage')->name('adminMessage')->middleware('auth:admin');


Route::get('/add_faculty', function () {
    return view('add_faculty');
})->name('add.faculty')->middleware('auth:admin');
Route::post('/add_faculty','RegisterController@storefaculty');
Route::get('/add_admin', function () {
    return view('add_admin');
})->name('add.admin')->middleware('auth:admin');
// Route::get('/add_student', function () {
//     return view('add_student');
// })->name('add.student');

Auth::routes();

//Route::get('/home', 'HomeController@index')
//->name('home')
//->middleware('auth');






Route::get('/add_course_faculty', function () {
    return view('add_course_faculty');
})->name('add.coursefaculty');

Route::post('/add_course_faculty','RegisterController@store_course_faculty');

Route::get('/add_course', function () {
    return view('add_course');
})->name('add.course');

Route::post('/add_course','RegisterController@storecourse');


Route::get('/faculty_courses','FacultyController@faculties_course_information')->name('faculty.courses');



Route::get('/add_semester_course', function () {
    return view('add_semester_course');
})->name('add.semester_course');
Route::post('/add_semester_course','RegisterController@add_semester_course');



Route::get('/add_intake', function () {
    return view('add_intake');
})->name('add.intake');
Route::post('/add_intake','RegisterController@add_intake');

Route::get('/admin', function () {
    return view('admin');
})->name('admin')->middleware('auth:admin');
Route::get('/start_registration','RegisterController@start_registration')->name('start.registration');
Route::get('/stop_registration','RegisterController@stop_registration')->name('stop.registration');
Route::post('/selectCourse','RegisterController@selectCourse')->name('selectCourse');
Route::post('/cancelCourse','RegisterController@cancelCourse')->name('cancelCourse');
//Route::get('/select/{credit}/{intake}/{section}', 'RegisterController@select')->name('select');


Route::get('/online_reg','RegisterController@online_reg')->name('online.reg');

Route::get('/uploadResources','FacultyController@uploadResources')->name('upload.resources');
Route::get('/upload/{course_code}','ResourceController@create')->name('create.resources');
Route::post('/uploaded/{course_code}','ResourceController@store')->name('store.resources');

Route::get('/findResources','StudentController@index')->name('find.resources');
Route::get('/findResourcesFaculty','FacultyController@resource')->name('find.resources.faculty');
Route::get('/showResources/{course_code}','ResourceController@index')->name('get.resources');

Route::get('/viewResources/{id}','ResourceController@show')->name('show.resources');

Route::get('/resourceDownload/{file}','ResourceController@download')->name('download.resources');
Route::get('/currentCourses','RegisterController@currentCourses')->name('current.courses');
Route::get('/studentList/{course_code}/{department}/{intake}/{section}','FacultyController@studentList')->name('student.list');
Route::post('/storeResults/{student_id}/{course_code}/{department}/{intake}/{section}','RegisterController@storeResults')->name('store.results');
Route::get('/finalResults','RegisterController@finalResults')->name('final.results');
Route::get('/fullResult', function () {
    return view('fullResult');
})->name('full.result');
Route::get('/endSemester','RegisterController@endSemester')->name('end.semester');
Route::get('/chooseSem','RegisterController@chooseSem')->name('choose.sem');
Route::get('/choose/{i}','RegisterController@semResults')->name('sem.results');