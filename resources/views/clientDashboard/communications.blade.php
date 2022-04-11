@extends('layouts.userdashboard')

@section('title', 'campaign communication')

@section('content')
    {{-- css combined found in clientDboard.css --}}
    <div class="comm">
        <div id="content">
            <div class="main_menu bg-white">
                <h3>COMMUNICATION TOOLS</h3>

                <h6>ENGAGE YOUR DONORS NETWORK WITH EASY TO USE COMMUNICATION TOOLS</h6>
                @if (session()->has('status'))
                    <div>
                        <p class="alert alert-success text-left">
                            {{ session('status') }}
                        </p>
                    </div>
                @endif
                @if (session()->has('error'))
                    <div>
                        <p class="alert alert-danger text-left">
                            {{ session('error') }}
                        </p>
                    </div>
                @endif
                <div class="comm_tools bg-white">
                    <div id="email">
                        <p><i class="fa fa-envelope-open" style="color: red;font-size:4.2em"></i></p>
                        <p>Send Email</p>
                    </div>
                    <div id="text">
                        <p><i class="fa fa-tablet-alt" style="color: blue;font-size:4.2em"></i></p>
                        <p>Text Messaging</p>
                    </div>
                    <div id="video">
                        <p><i class="fa fa-film" style="color: green;font-size:4.2em"></i></p>
                        <p>Share Videos</p>
                    </div>
                </div>
                <hr>
                <div class="comm_tools">
                    <div id="emailArea">
                        <h5 class="text-center">SEND EMAIL</h5>
                        <form action="{{ route('email.send') }}" class="text-start" method="POST">
                            @csrf
                            @method('post')
                            <p>To: </p>
                            <p>
                                <input type="email" name="email" id="emailu" placeholder="xyz@gmail.com">
                            </p>

                            <p>Subject</p>
                            <p><input type="text" name="subject" id="subject" maxlength="400"></p>
                            <p>Message</p>
                            <p>
                                <textarea name="message" id="message" rows="10"></textarea>
                            </p>
                            <p>
                                <button class="btn btn-success">Send</button>
                            </p>
                        </form>
                    </div>
                    <div id="textArea">
                        <h5 class="text-center">ENGAGE THROUGH TEXT</h5>
                        <form action="{{ route('sms.send') }}" class="text-start">
                            @csrf
                            @method('post')
                            <p>To: </p>
                            <p>
                                <input type="text" name="phone" id="phone" value="+254">
                            </p>
                            <p>Message</p>
                            <p>
                                <textarea name="message" id="message" rows="5"></textarea>
                            </p>
                            <p>
                                <button class="btn btn-success">Send</button>
                            </p>
                        </form>
                    </div>
                    <div id="videoArea">
                        <h5 class="text-center">UPLOAD VIDEO</h5>
                        <form action="{{ route('video.upload') }}" method="POST" enctype="multipart/form-data"
                            class="text-start">
                            @csrf
                            @method('post')
                            <p>Select video</p>
                            <p>
                                <input type="file" name="video" id="video">
                            </p>
                            <p>Title</p>
                            <p><input type="text" name="subject" id="subject" maxlength="400"></p>
                            <p>Message</p>
                            <p>
                                <textarea name="message" id="message" rows="5"></textarea>
                            </p>
                            <p>
                                <button class="btn btn-success" name="uploadVideos">upload</button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
