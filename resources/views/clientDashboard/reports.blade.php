@extends('layouts.userdashboard')

@section('title','campaign reports')

@section('content')
{{-- css in reports.css --}}
{{-- <div class="comm">
    <div class="row">
        <div class="text-center">
            <h4 id="theading">CAMPAIGN REPORTS</h4>
        </div>
    </div>
    <div class="row">
        <div class="d-flex justify-content-around" id="fw">
            <div class="p-2">
                <button class="btn btn-warning" id="viewR">VIEW REPORTS</button>
            </div>
            <div class="p-2">
                <button class="btn btn-warning" id="writeR">WRITE REPORTS</button>
            </div>
        </div>
    </div>
    <div class="row">
        <div id="viewReports">  
           @include('clientDashboard.displayReport')                   
        </div>
    </div>
    <div class="row" id="report">
        <div class="text-center">
            <h4>WRITE CAMPAIGN REPORT</h4>
            <hr>
        </div>
        <form action="../app.php" enctype="multipart/form-data" method="POST">
            <div class="details">
                <div class="text-start">
                    <h4>REPORT SUMMARY</h4>
                </div>
                <div>
                    <p>Please share a brief story on the impact of the donations</p>
                    <p>
                        <textarea name="story" id="story" placeholder="write here ....."></textarea>
                    </p>
                    <p>Please share with your supporters your activities since last report</p>
                    <p>
                        <textarea name="activity" id="story" placeholder="write here ....."></textarea>
                    </p>
                </div>
            </div>
            <div class="userFiles">
                <hr>
                <div>
                    <h4>REPORT FILES</h4>
                </div>
                <div class="d-flex justify-content-around" id="fw">
                    <div class="images">
                        <p>Select first Image</p>
                        <p><input type="file" name="image1" id="image1" required></p>
                    </div>
                    <div class="images">
                        <p>Select second Image</p>
                        <p><input type="file" name="image2" id="image2" required></p>
                    </div>
                </div>
                <div class="d-flex justify-content-around" id="fw">
                    <div class="images">
                        <p>Select last Image</p>
                        <p><input type="file" name="image3" id="image3" required></p>
                    </div>
                    <div class="images">
                        <p>Select video</p>
                        <p><input type="file" name="video" id="image1" required></p>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <p>
                    <button class="btn btn-warning" name="report">SUBMIT</button>
                </p>
            </div>
        </form>
    </div>
    <div class="row" id="updateReport">
        @include('clientDashboard.updateReport')
    </div>
</div> --}}

@endsection