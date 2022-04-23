<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ url('storage/css/all.css') }}">
    <link rel="stylesheet" href="{{ url('storage/css/bootstrap.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ url('storage/css/bootstrap.css')}}"> --}}
    <link rel="stylesheet" href="{{ url('storage/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('storage/css/shop.css') }}">
    <link rel="icon" href="{{ url('storage/images/logo.png') }}">
    <script src="{{ url('storage/js/jquery.js') }}"></script>
    <script src="{{ url('storage/js/bootstrap.min.js') }}"></script>

</head>

<body>
    <div class="">
        <header>
            @include('layouts.shopnav')
        </header>
    </div>
    <div class="container-fluid">
        <br>
        <div class="row">
            @yield('content')
        </div>
    </div>

</body>

</html>
