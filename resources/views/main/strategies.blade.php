@extends('layouts.main')

@section('title', 'our strategies')

@section('content')
   
        <div class="d-flex justify-content-between">
            @foreach ($content as $c)
                @if ($c->section == 'donor')
                    <div class="d-flex justify-content-between" id="donorsection">
                        <div class="p-2" id="cont">
                            <h1>{{ $c->title }}</h1>
                            <p>{{ $c->content }}</p>
                            <a href="/join" class="btn btn-warning">JOIN US</a>
                        </div>
                        <div>
                            <img src="{{ url('storage/images/'.$c->image)}}" alt="" id="img">
                        </div>
                    </div>
                @elseif ($c->section == 'intro')
                    <div class="d-flex justify-content-between" id="mintro">
                        <div class="p-2" id="cont">
                            <h1>{{ $c->title }}</h1>
                            <p>{{ $c->content }}</p>
                            <a href="/join" class="btn btn-warning">GET STARTED</a>
                        </div>
                        <div>
                            <img src="{{ url('storage/images/'.$c->image)}}" alt="" id="img">
                        </div>
                    </div>
                @else
                    <div class="p-2" id="cont">
                        <h1>{{ $c->title }}</h1>
                        <p>{{ $c->content }}</p>
                    </div>
                    <div>
                        <img src="{{ url('storage/images/'.$c->image)}}" alt="" id="img">
                    </div>
                @endif
            @endforeach
        </div>
    
@endsection