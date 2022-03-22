@extends('layouts.campaign')

@section('title', 'campaign reader')

@section('content')

    <div class="bsingle">
        <div class="text-center">
            <h2>{{ $campaign->title }}</h2>
            <hr>
        </div>
        <div class="d-flex justify-content-between">
            <div class="cimage">
                <center>
                    <img src="{{ url('storage/campaign/'.$campaign->image) }}" alt="" id="csimg">
                </center>
                <div class="cVideo">
                    <hr>
                    <video src="{{ url('storage/campaign/'.$campaign->video) }}" controls id="cv"></video>
                </div>
            </div>
            <div class="cf">
                @include('fundraising.donateForm')
            </div>
        </div>
        <div class="b1">
            <h4>SUMMARY</h4>
            <p>{{ $campaign->summary }}</p>
        </div>
        <div class="b1">
            <h4>CHALLENGE</h4>
            <p>{{ $campaign->challenge }}</p>
        </div>
        <div class="b1">
            <h4>SOLUTION</h4>
            <p>{{ $campaign->solution }}</p>
        </div>
        <div class="b1">
            <h4>OUR GRATITUDE</h4>
            <p>{{ $campaign->thanksNote }}</p>
        </div>
    </div>
@endsection

