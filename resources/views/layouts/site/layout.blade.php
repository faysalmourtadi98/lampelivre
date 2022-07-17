<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--CSS-->
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/Font-Awesome/css/all.min.css')}}">
    @yield('style')
    <!--fontGoogle-->
    <link rel="stylesheet" href="{{ asset('css/Google-Font/Karantina.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Google-Font/Oswald.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Google-Font/Playfaire_Display.css') }}">
     <!--BootstrapIcons-->
    <link rel="stylesheet" href="{{ asset('css/Bootstrap-Icon/bootstrap-icons.css') }}">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!--titre-->
    @yield('titre')
    <link rel="icon" href="{{asset('img/logoBooks4.png')}}" sizes="16x16"  type="image/png">

</head>
<body>
@include('layouts.site.inc.header')
@yield('content')
@include('layouts.site.inc.footer')
   <script src="{{asset('js/script_1.js')}}"></script>
   <script src="{{asset('js/script_2.js')}}"></script>
   <script src="{{asset('js/script_3.js')}}"></script>
@include('scripts.script_1')
@if ($message=session()->get('message_create_succus'))
@include($message)
@endif
</body>
</html>