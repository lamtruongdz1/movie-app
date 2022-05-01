<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <title>Flix | @yield('title')</title>

     <link rel="shortcut icon" href="./assets/img/Images/logo-foursquare.svg">
     @include('layouts.style')
</head>
@yield('navbar')
@yield('content')
@include('layouts.footer')
@include('layouts.script')
</body>
</html>
