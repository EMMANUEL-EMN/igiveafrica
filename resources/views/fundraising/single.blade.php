@extends('layouts.main')

@section('title', 'blog reader')

@section('content')

    <div class="bsingle">
        <div class="bs">
            <h1>
                <a id="ba" href="/blog">BLOGS</a>
            </h1>
        </div>
        <div class="text-start">
            <h2>{{ $blog->title }}</h2>
        </div>
        <div class="bimage">
            <center>
                <img src="{{ url('storage/images/'.$blog->image) }}" alt="" id="bsimg">
            </center>
        </div>
        <div class="b1">
            <h4>{{ $blog->heading1 }}</h4>
            <p>{{ $blog->content1 }}</p>
        </div>
        <div class="b1">
            <h4>{{ $blog->heading2 }}</h4>
            <p>{{ $blog->content2 }}</p>
        </div>
        <div class="b1">
            <h4>{{ $blog->heading3 }}</h4>
            <p>{{ $blog->content3 }}</p>
        </div>
    </div>
@endsection