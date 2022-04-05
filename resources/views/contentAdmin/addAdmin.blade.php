@extends('layouts.contentNav')

@section('title', 'add admin')

@section('content')
    <div class="cont" style="width: 100%;">
        <center>
            <div class="uf bg-white" style="width: 500px;">
                <form action="{{ route('admin.add') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('post')
                    <div class="ldetails">
                        <h4 class="text-center">REGISTER CONTENT ADMIN</h4>
                        <hr>
                        @if (session()->has('status'))
                            <p class="alert alert-danger">{{ session('status') }}</p>
                        @endif
                        <p class="text-start">Email: </p>
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
                        <p class="text-start">Password: </p>
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
                            <button class="btn btn-warning">REGISTER</button>
                        </p>
                    </div>
                </form>
            </div>
        </center>
    </div>
@endsection
