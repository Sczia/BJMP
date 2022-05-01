<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-free-6.0.0-web/css/all.css') }}">

  {{--   <link rel="stylesheet" href="{{ asset('css/fontawesome-free-6.0.0-web/css/all.min.css') }}"> --}}
    <link rel="icon" href="{{ asset('./img/bjmp-logo.png') }}">





    @yield('page-level-css')
    @livewireStyles
    <title>BJMP</title>
</head>

<body>
    @if (Request::is('home', 'aboutus','calendar','appointment','contactus'))
        @include('BJMP.homecontents._navbar')
    @endif



    <div class="pt">
        @yield('contents')
    </div>

    @yield('page-level-js')
    @livewireScripts


</body>


