<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('titre')
    <!--CSS-->
    <link rel="stylesheet" href="{{ secure_asset('css/admin.css')}}">
    <!--bootstrap-->
    <link rel="stylesheet" href="{{ secure_asset('css/Bootstrap-Icon/bootstrap.min.css')}}">
    <!--fontGoogle-->
    <link rel="stylesheet" href="{{  secure_asset('css/Google-Font/Karantina.css') }}">
    <link rel="stylesheet" href="{{  secure_asset('css/Google-Font/Oswald.css') }}">
    <link rel="stylesheet" href="{{  secure_asset('css/Google-Font/Playfaire_Display.css') }}">
     <!--fontAwsome-->
    <link rel="stylesheet" href="{{ secure_asset('css/Font-Awesome/css/all.min.css')}}">
    <link rel="icon" href="{{ secure_asset('img/logoBooks4.png')}}" sizes="16x16"  type="image/png">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head> 
<body>
<div class="wrapper">
@include('layouts.dashboard.inc.sidebar')
    <!--Working Panel-->
<section class="working-panel">
        <div class="container-fluid">
@include('layouts.dashboard.inc.header')
@yield('content')
</div>
<script src="{{ secure_asset('js/script_1.js')}}"></script>
<script src="{{ secure_asset('js/script_2.js')}}"></script>
<script src="{{ secure_asset('js/script_3.js')}}"></script>
@include('scripts.script_1')
@if ($message=session()->get('message_create_succus'))
@include($message)
@endif
</body>
</html>