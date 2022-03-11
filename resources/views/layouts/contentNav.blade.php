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
    <link rel="stylesheet" href="{{ url('storage/css/cadmin.css')}}">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2">
                <div class="sideWrapper">
                    <div class="sidenav">
                        @include('contentAdmin.sidenav')
                    </div>
                </div>
            </div>
            <div class="col-sm-10">
                <div class="row">
                    @include('contentAdmin.topnav')
                </div>
                <div class="row">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</body>
</html>