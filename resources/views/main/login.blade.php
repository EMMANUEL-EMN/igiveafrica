@extends('layouts.main')

@section('title', 'login')

@section('content')

    <center>
        <div class="uf bg-white p-4" style="max-width: 500px">
            <form action="{{ route('user.auth') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('post')
                <div class="ldetails">
                    <h4 class="text-center">WELCOME BACK</h4>
                    <hr>
                    @if (session()->has('status'))
                        <p class="alert alert-danger">{{ session('status') }}</p>
                    @endif
                    <p>Email: </p>
                    <p>
                        <input type="email" name="email" id="email" required>
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
                        <input type="password" name="password" id="password" required>
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
                        <button class="btn btn-warning">LOGIN</button>
                    </p>
                    <p>
                        Forgot password ? <a href="">Reset</a>
                    </p>
                    <p>
                        Not a member ? <a href="/join">Register</a>
                    </p>
                </div>
            </form>
        </div>
    </center>

@endsection
