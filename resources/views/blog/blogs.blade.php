@extends('layouts.main')


@section('title', 'blogs')

@section('content')

    <div class="blogs">
        <div class="bintro">
           <a id="ba" href="/blog"> <h1>BLOGS</h1></a>
        </div>
        <div class="d-flex justify-content-around">
            @foreach ($blogs as $blog)
                <div class="blog">
                    <a id="ba" href="/blog/read/{{ $blog->id }}">
                        <img src="{{ url('storage/images/'.$blog->image) }}" alt="" id="bimg">
                        <div class="binfo">
                            <p>{{ $blog->title }}</p>
                            {{-- <p>READ MORE</p> --}}
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

@endsection