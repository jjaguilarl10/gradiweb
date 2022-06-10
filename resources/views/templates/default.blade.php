<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', 'Dashboard')</title>
        <link rel="icon" type="image/ico" href="{{ asset('favicon.ico')}}"/>
        <script src="{{asset('assets/jQuery.v3.2.1.js')}}"></script>
        <script src="{{asset('assets/master.js')}}"></script>
        <!-- <script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script> -->
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('assets/master.min.css') }}">

        @yield('Css_')

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        

        @yield('Js_')

    </head>
    <body class="theme-default " style="" >

        @include('templates.header_menu')
        <div id="content_dashboard" class="p-default-theme row g-0 " style=" padding-top:48px; "> 

            <div id="menu-left-block" class="menu-items-block  ">
                <div class="menu-items-body">
                    @include('templates.sidebar_menu')
                </div>
            </div>

            <div class="_plcontent  " >
                <div class="content " >
                    @yield('x-content')
                </div>
            </div> 

        </div> 
    </body>
</html>