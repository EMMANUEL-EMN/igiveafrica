@extends('layouts.userdashboard')

@section('title', 'campaign communication')

@section('content')
    {{-- css combined found in clientDboard.css --}}
    <div class="comm">
        <div id="content">
            <div class="main_menu bg-white">
                <h3>COMMUNICATION TOOLS</h3>

                <h6>ENGAGE YOUR DONORS NETWORK WITH EASY TO USE COMMUNICATION TOOLS</h6>

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
                        <form action="" class="text-start">
                            <p>To: </p>
                            <p>
                                <select name="audience" id="audience">
                                    <option value="" disabled="">Select audience</option>
                                    <option value="all">Everyone Involved</option>
                                    <option value="fundraisers">Fundraisers</option>
                                    <option value="donors">Donors</option>
                                    <option value="specific">Specific Person</option>
                                </select>
                            </p>
                            <p><input type="text" name="specific" id="specific" maxlength="400"></p>
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
                        <form action="" class="text-start">
                            <p>To: </p>
                            <p>
                                <select name="audience" id="audience">
                                    <option value="" disabled="">Select audience</option>
                                    <option value="all">Everyone Involved</option>
                                    <option value="fundraisers">Fundraisers</option>
                                    <option value="donors">Donors</option>
                                    <option value="specific">Specific Person</option>
                                </select>
                            </p>
                            <p><input type="text" name="specific" id="specific" maxlength="400"></p>
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
                    <div id="videoArea">
                        <h5 class="text-center">UPLOAD VIDEO</h5>
                        <form action="../app.php" method="POST" enctype="multipart/form-data" class="text-start">
                            <p>Select video</p>
                            <p>
                                <input type="file" name="video" id="video">
                            </p>
                            <p>Title</p>
                            <p><input type="text" name="subject" id="subject" maxlength="400"></p>
                            <p>Message</p>
                            <p>
                                <textarea name="message" id="message" rows="10"></textarea>
                            </p>
                            <p>
                                <button class="btn btn-success" name="uploadVideos">Send</button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
