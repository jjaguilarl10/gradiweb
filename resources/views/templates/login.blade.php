<!DOCTYPE html>
<html lang="en">
    <head>        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="description" content="Prueba Tecnica">
        <meta name="author" content="Dev. John Jairo">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" type="image/ico" href="{{ asset('favicon.ico')}}"/>
        <title>Acceso</title>  

        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- <link rel="stylesheet" href="{{asset('assets/components/theme/auth.css') }}?v=<?php echo time(); ?> "> -->
    </head>
    <body>
        <div id="container" class="effect aside-float aside-bright mainnav-lg pad-no">
            @yield('x-content')
        </div>
    </body>
</html>