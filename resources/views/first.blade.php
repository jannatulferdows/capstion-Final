<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        

         
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://bootswatch.com/5/darkly/bootstrap.min.css" rel="stylesheet">
       
        <!-- Styles -->
        <style>
            div{

                  margin-top: 10px;
                  margin-bottom: 10px;

               }
               
               body  {
  background-image: url("home2.jpg");
  
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-color: #cccccc;
}
            button {
                     width: 20%;
                     table-layout: fixed;
                     border-collapse: collapse;
                   }
            header {
                     text-align: center;
                     margin-top: 180px;
                     margin-bottom: 10px;
                   }
         
         </style>

    </head>
    <body>
        
       
        <header>  
        <div class="flex-center">
        <button type="button" class="btn btn-danger" onclick="window.location.href='/stlogin'">Student</button>
        <!-- <button class="btn btn-outline-success"><h1><b><a href="/stlogin">Student?</br></a></b></h1></button> -->
        </div>
        
        <div class="flex-center">
        <button type="button" class="btn btn-danger" onclick="window.location.href='/faculty/login/'">Faculty</button>
        <!-- <button class="btn btn-outline-success"><h1><b><a href="/faculty/login/">Faculty?</a></b></h1></button> -->
        </div>
        <div class="flex-center">
        <button type="button" class="btn btn-danger" onclick="window.location.href='/admin/login/'">Admin</button>
        <!-- <button class="btn btn-outline-success"><h1><b><a href="/admin/login/">Admin?</a></b></h1></button> -->
        
        </div>
    </header>
    </body>
</html>
