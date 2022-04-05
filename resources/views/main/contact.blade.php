@extends('layouts.main')

@section('title', 'contact us')

@section('content')
    <div class="cf">
        <center>
            <div class="side2 bg-white text-left p-5" style="max-width: 600px;">
                <h3 class="text-center">SEND US A MESSAGE</h3>
                <hr>
                @if (session()->has('status'))
                    <p class="alert alert-success">{{ session('status') }}</p>
                @endif
                <form action="{{ route('contact.igive') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('post')
                    <p>Full Name :</p>
                    <p><input type="text" name="username" id="username" required></p>
                    <p>Email :</p>
                    <p><input type="email" name="email" id="email" required></p>
                    <p>Subject :</p>
                    <p><input type="text" name="subject" id="subject" required></p>
                    <p>Message :</p>
                    <p>
                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Type here"></textarea>
                    </p>

                    <p>
                        <button class="btn btn-warning" name="contact_form">Submit</button>
                    </p>
                </form>
            </div>
        </center>
    </div>
    <div class="d-flex justify-content-between">
        @foreach ($content as $c)
            @if ($c->section == 'donor')
                <div class="d-flex justify-content-between" id="donorsection">
                    <div class="p-2" id="cont">
                        <h1>{{ $c->title }}</h1>
                        <p>{{ $c->content }}</p>
                        <a href="/join" class="btn btn-warning">JOIN US</a>
                    </div>
                    <div>
                        <img src="{{ url('storage/images/' . $c->image) }}" alt="" id="img">
                    </div>
                </div>
            @elseif ($c->section == 'intro')
                <div class="d-flex justify-content-between" id="mintro">
                    <div class="p-2" id="cont">
                        <h1>{{ $c->title }}</h1>
                        <p>{{ $c->content }}</p>
                        <a href="/join" class="btn btn-warning">GET STARTED</a>
                    </div>
                    <div>
                        <img src="{{ url('storage/images/' . $c->image) }}" alt="" id="img">
                    </div>
                </div>
            @else
                <div class="p-2" id="cont">
                    <h1>{{ $c->title }}</h1>
                    <p>{{ $c->content }}</p>
                </div>
                <div>
                    <img src="{{ url('storage/images/' . $c->image) }}" alt="" id="img">
                </div>
            @endif
        @endforeach
    </div>

@endsection
