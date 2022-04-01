@extends('layouts.main')


@section('title', 'courses we serve')

@section('content')
    {{-- css at blog.css file --}}
    <div class="blogs">

        <div class="bgc">
            <div class="cin">
                <h3>DISCOVER .CONNECT. DONATE</h3>
                <p>DISCOVER : Find a legitimate community cause below <br> that is of
                    interest to you and join them in doing good.
                </p>
                <p>
                    CONNECT : Establish relationships with the community <br>
                    and its leaders to understand their needs and how you can help.
                </p>
                <p>
                    DONATE : Your donation can help save a life. <br>
                    Hurry up!!!
                </p>
            </div>
            <div class="bintro text-center">
                <img src="{{ url('storage/images/igive-c.jpg') }}" alt="" id="ctimg">
            </div>
        </div>
        <div class="h">
            <h3>COURSES WE SERVE</h3>
        </div>
        <div class="d-flex justify-content-around">
            @foreach ($campaigns as $campaign)
                <div class="blog">
                    <a id="ba" href="/fundraise/read/{{ $campaign->id }}">
                        <img src="{{ url('storage/campaign/' . $campaign->image) }}" alt="" id="bimg">
                        <div class="binfo">
                            <p>{{ $campaign->title }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    <style>

    </style>
@endsection
