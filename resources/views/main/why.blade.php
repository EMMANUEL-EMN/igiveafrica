@extends('layouts.main')

@section('title', 'why us')

@section('content')

    <div id="maincont" class="">
        @foreach ($intro as $c)
            <div class="d-flex justify-content-around bg-white" id="mintro">
                <div class="p-2" id="cont">
                    <h3 class="text-dark">{{ $c->title }}</h3>
                    <hr>
                    <p>{{ $c->content }}</p>

                </div>
                <div>
                    <img src="{{ url('storage/images/' . $c->image) }}" alt="" id="img">
                </div>
            </div>
        @endforeach
    </div>
    <div id="donorsection">
        @foreach ($donor as $c)
            <div class="d-flex justify-content-around" id="donorsection">
                <div class="p-2" id="cont">
                    <h3>{{ $c->title }}</h3>

                    <p>{{ $c->content }}</p>

                </div>
                <div>
                    <img src="{{ url('storage/images/' . $c->image) }}" alt="" id="img">
                </div>
            </div>
            <hr>
        @endforeach
    </div>
    <div id="maincont">
        @foreach ($top as $c)
            <div class="d-flex justify-content-around bg-white">
                <div class="p-2" id="cont">
                    <h3>{{ $c->title }}</h3>
                    <hr>
                    <p>{{ $c->content }}</p>

                </div>
                <div>
                    <img src="{{ url('storage/images/' . $c->image) }}" alt="" id="img">
                </div>
            </div>
        @endforeach
    </div>
    <div id="maincont" id="donorsection">
        @foreach ($center as $c)
            <div class="d-flex justify-content-around">
                <div class="p-2" id="cont">
                    <h3>{{ $c->title }}</h3>
                    <hr>
                    <p>{{ $c->content }}</p>

                </div>
                <div>
                    <img src="{{ url('storage/images/' . $c->image) }}" alt="" id="img">
                </div>
            </div>
        @endforeach
    </div>
    <div id="maincont">
        @foreach ($bottom as $c)
            <div class="d-flex justify-content-around bg-white">
                <div class="p-2" id="cont">
                    <h3>{{ $c->title }}</h3>
                    <hr>
                    <p>{{ $c->content }}</p>
                    {{--  --}}
                </div>
                <div>
                    <img src="{{ url('storage/images/' . $c->image) }}" alt="" id="img">
                </div>
            </div>
        @endforeach
    </div>

@endsection
