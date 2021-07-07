<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://bootswatch.com/5/darkly/bootstrap.min.css" rel="stylesheet">
       

        <!-- <title>Laravel</title> -->

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            
            html, body {
                background-image: url("home.jpg");
                background-size: cover;
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                       }
             header {
                     text-align: center;
                     
                     margin-bottom: 50px;
                   } 
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }


        </style>
    </head>
    <body>
        
        <div class="content" >
            <div class="title m-b-md">
                  @guest
                  <br>
                  <!-- Please sign in! -->
                  <p class="text-danger">Please sign in!</p>
                  @endguest
            </div>

              
        </div>
            
        <div class="flex-center">
           <div class="">
                @if (Route::has('login'))
                    <header>
                    <p class="text-warning" ><h3 style="color:black">Already registered?</h3></p>
                       <!-- <h3> <b>Already registered?</b> </h3> -->
                   
                        <a href="{{ route('login') }}" ><h1>Login</h1></a>
                          <b>or</b>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"> <h1>Register</h1></a>
                        @endif
                    </header>
                @else
                    @auth
                     
                    
                            <div class="position-absolute top-50 start-50 translate-middle">
                                <br><br>
                                <button type="button" class="btn btn-outline-danger" onclick="window.location.href='/students_personal_information'">Personal Info</button>
                                <br> <br>
                                <button type="button" class="btn btn-outline-danger" onclick="window.location.href='/online_reg'">Online Registration</button>
                                <br><br>
                                <button type="button" class="btn btn-outline-danger" onclick="window.location.href='/findResources'">Find Resources</button>
                                <br><br>
                                <button type="button" class="btn btn-outline-danger" onclick="window.location.href='/currentCourses'">Current Courses</button>
                                <br><br>
                                <button type="button" class="btn btn-outline-danger" onclick="window.location.href='/finalResults'">Results</button>
                                <br><br>
                                <button type="button" class="btn btn-outline-danger" onclick="window.location.href='/chooseSem'">Semester Wise Results</button>
                            </div>
                       
                    @endauth
                  
                @endif
            </div>  
        </div>

    
    </body>
</html>
