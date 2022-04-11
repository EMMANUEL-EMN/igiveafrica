<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IGIVEAFRICA</title>
    <link rel="stylesheet" href="{{ url('storage/css/bootstrap.min.css') }}">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div style="width: 300px; flex-wrap:wrap;">
                <h4>{{ $details['subject'] }}</h4>
                <p>{{ $details['message'] }}</p>
            </div>
        </div>
    </div>
</body>

</html>
