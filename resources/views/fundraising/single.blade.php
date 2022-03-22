@extends('layouts.main')

@section('title', 'campaign reader')

@section('content')

    <div class="bsingle">
        <div class="bs">
            <h1>
                <a id="ba" href="/campaign">campaign</a>
            </h1>
        </div>
        <div class="text-start">
            <h2>{{ $campaign->title }}</h2>
        </div>
        <div class="bimage">
            <center>
                <img src="{{ url('storage/campaign/'.$campaign->image) }}" alt="" id="bsimg">
            </center>
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
            <p>{{ $campaign->thanksNote }}</p>
        </div>
        <div class="cVideo">
            <video src="{{ url('storage/campaign/'.$campaign->video) }}" controls></video>
        </div>
    </div>
@endsection

