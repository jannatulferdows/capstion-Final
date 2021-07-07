<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Validation\ValidationException;
use Auth;
use Hash;
class FacultyLoginController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = '/faculty';
    public function __construct()
    {
        $this->middleware('guest:faculty');
    }
    public function showLoginForm()
    {
        return view('auth.faculty_login');
    }
    public function login(Request $request)
    { 
    //    return $request->email;
  //validate data
  $this->validate($request, [
    'email'=>'required|email',
    'password'=>'required|min:8'
]);

//attemt to log the admin in
if(Auth::guard('faculty')->attempt(['email'=> $request->email, 'password'=> $request->password], $request->remember)){
    //if successful, then redirect to their intended location
    return redirect()->intended(route('faculty.dashboard'));
}

 //if unsuccessful, then redirect back to the login with the form data
        throw ValidationException::withMessages([
            'email' => [trans('auth.failed')],
        ]);
      
    }
}
