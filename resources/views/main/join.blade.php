@extends('layouts.main')


@section('title', 'join igiveafrica')

@section('content')

    <div class="donorF">
        <div id="allj">
           <center>
                <div class="alljf">
                    <div class="text-center">
                        <h5>GET STARTED WITH IGIVEAFRICA</h5>
                        <hr>
                        @if (session()->has('status'))
                            <p class="alert alert-danger">{{ session('status') }}</p>
                        @endif
                        {{-- @if ($errors)
                            @foreach ($errors as $r)
                                {{ $r->message}}
                            @endforeach
                        @endif --}}
                    </div>
                    @include('main.donorj')
                </div>
           </center>
        </div>
    </div>

    {{-- <div class="clientF"></div> --}}

@endsection