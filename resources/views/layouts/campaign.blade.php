<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ url('storage/css/all.css') }}">
    <link rel="stylesheet" href="{{ url('storage/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('storage/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('storage/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('storage/css/main.css') }}">
    <link rel="stylesheet" href="{{ url('storage/css/header.css') }}">
    <link rel="stylesheet" href="{{ url('storage/css/fundraise.css') }}">

    <link rel="icon" href="{{ url('storage/images/logo.png') }}">
    <script src="{{ url('storage/js/jquery.js') }}"></script>
    <script src="{{ url('storage/js/bootstrap.min.js') }}"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="cnav">
            <nav>
                <ul class="d-flex justify-content-between">
                    <li>
                        @if (!empty($campaign->logo))
                            <img src="{{ url('storage/campaign/' . $campaign->logo) }}" alt="" id="logo">
                        @else
                            <img src="{{ url('storage/campaign/' . $campaign->email) }}" alt="" id="logo">
                        @endif
                    </li>
                    <li>
                        <a href="/fundraise/courses_we_serve">IGIVEAFRICA</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row">
            <div class="col-sm">
                <div id="maincont">
                    @yield('content')
                </div>
            </div>
            <div class="col-md-3">
                @include('fundraising.progress')
            </div>
        </div>
        <div class="row">

        </div>
    </div>
</body>

</html>
