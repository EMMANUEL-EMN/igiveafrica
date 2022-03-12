<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ url('storage/css/all.css')}}">
    <link rel="stylesheet" href="{{ url('storage/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ url('storage/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ url('storage/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{ url('storage/css/client.css')}}">
    <link rel="icon" href="{{ url('storage/images/logo.png')}}">
    <script src="{{ url('storage/js/jquery.js') }}"></script>
</head>
<body>
<div class="container-fluid">
   
    <div class="row">
        <div class="col-sm-3">
            <div id="maincont">
                @yield('content')
            </div>
        </div>
        <div class="col-md">
           
        </div>
    </div>
</div>
</body>
</html>