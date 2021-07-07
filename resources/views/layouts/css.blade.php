<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <style>
.btn {
  border: none;
  background-color: inherit;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  display: inline-block;
}

.btn:hover {background: #eee;}

.personal_info {color: green;}
.info {color: dodgerblue;}
.warning {color: orange;}
.danger {color: red;}
.default {color: black;}
.center {
  margin-left: auto;
  margin-right: auto;
}
/*CUSTOM PRELOADER*/
.loader-bg{
  position: fixed;
  z-index: 999999;
  background: #fff;
  width: 100%;
  height: 100%;
}
.loader-p{
  border: 0 solid transparent;
  border-radius: 50%;
  width: 150px;
  height: 150px;
  position: absolute;
  top: calc(50vh - 75px);
  left: calc(50vw - 75px);
}

.loader-p:before, .loader-p:after{
  content: '';
  border: 1em solid #15e38a;
  border-radius: 50%;
  width: inherit;
  height: inherit;
  position: absolute;
  top: 0;
  left: 0;
  animation: loader 2s linear infinite;
  opacity: 0;
}

.loader-p:before{
  animation-delay: 0.5s;
}

@keyframes loader{
  0%{
    transform: scale(0);
    opacity: 0;
  }
  50%{
    opacity: 1;
  }
  100%{
    transform: scale(1);
    opacity: 0;
  }
}
/*end of custom preloader*/
</style>

</head>
<body>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<main class="py-4">
            @yield('content')
</main>
<script>
  setTimeout(function(){
    $('.loader-bg').fadeToggle();
  },1500);
</script>
</body>
</html>
