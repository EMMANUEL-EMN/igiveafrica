<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link rel="stylesheet" href="{{ url('storage/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ url('storage/css/main.css')}}">
    <style>
        .ldetails
        {
            background-color: white;
            margin-top: 7%;
        }
    </style>
</head>
<body>
    <div class="lf">
        <div class="main">
            <a href="/" class="btn btn-primary">HOME</a>
        </div>
        <center>
            <div class="uf">
                <form action="{{ route('user.auth') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('post')
                    <div class="ldetails">
                        <h4 class="text-center">WELCOME BACK</h4>
                        <p>Email: </p>
                        <p>
                            <input type="email" name="email" id="email">
                            <br>
                            
                                {{-- @if ($errors == true)
                                    <span class="alert alert-danger">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                @endif --}}
                            
                        </p>
                        <p>Password: </p>
                        <p>
                            <input type="password" name="password" id="password">
                            {{-- <br>
                            @if ($errors == true)
                                <span class="alert alert-danger">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </span>
                            @endif --}}
                        </p>
                        <p>
                            <button class="btn btn-success">LOGIN</button>
                        </p>
                        <p>
                            Forgot password ? <a href="">Reset</a>
                        </p>
                        <p>
                            Not a member ? <a href="">Register</a>
                        </p>
                    </div>
                </form>
            </div>
        </center>
    </div>
</body>
</html>