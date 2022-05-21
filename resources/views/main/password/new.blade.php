@extends('layouts.main')

@section('title', 'login')

@section('content')

    <center>
        <div class="uf bg-white p-4" style="max-width: 500px">
            <form action="{{ route('password.reset') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="ldetails">
                    <h4 class="text-center">RESET PASSWORD</h4>
                    <hr>
                    @if (session()->has('status'))
                        <p class="alert alert-danger">{{ session('status') }}</p>
                    @endif
                    <p>New Password: </p>
                    <p>
                        <input type="password" name="password" id="pass1" required>
                        <br>

                        {{-- @if ($errors == true)
                            <span class="alert alert-danger">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </span>
                        @endif --}}

                    </p>
                    <p>Re-type Password: </p>
                    <input type="hidden" name="id" id="" value="{{ $userId }}">
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
                        <button class="btn btn-warning">RESET</button>
                    </p>
                </div>
            </form>
        </div>
    </center>

@endsection
