@extends('layouts.main')


@section('title', 'blogs')

@section('content')

    <div class="blogs">

        <div class="bgc">
            <div class="bintro text-center">
                <a id="ba" href="/fundraise/courses_we_serve"> <h5>COURSES WE SERVE</h5></a>
            </div>
        </div>
        <div class="d-flex justify-content-around">
            @foreach ($campaigns as $campaign)
                <div class="blog">
                    <a id="ba" href="/fundraise/read/{{ $campaign->id }}">
                        <img src="{{ url('storage/images/'.$campaign->image) }}" alt="" id="bimg">
                        <div class="binfo">
                            <p>{{ $campaign->title }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

@endsection