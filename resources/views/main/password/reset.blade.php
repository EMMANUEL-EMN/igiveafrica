@extends('layouts.main')

@section('title','confirm paswword')

@section('content')
    <div class="text-center">
        <div style="width: 100%">
            <center>
                <form class="bg-white p-3 m-3" action="{{ route('email.verify') }}"
                method="POST" id="" style="width: 350px;">
                    @method('post')
                    @csrf
    
                    <h4 class="text-start">RECOVER ACCOUNT</h4>
                    <hr>
                    @if (session()->has('error'))
                        <p class="alert alert-danger">
                            {{ session('error') }} 
                            
                        </p>
                    @endif
                    <p style="text-align: left;">Enter an alternate email address that is associated with your account on igiveafrica</p>
                    <p>
                        <input type="email" name="email" id="email" placeholder="xyz@gmail.com">
                    </p>
                    <p class="text-right">
                        <button class="btn btn-primary">NEXT</button>
                    </p>
                </form>
            </center>
        </div>
    </div>
    <style>
        input{
            border: none;
            border-bottom: 1px solid black;
            width: 100%;
        }
    </style>
@endsection