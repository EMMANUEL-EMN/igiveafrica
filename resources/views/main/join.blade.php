@extends('layouts.main')


@section('title', 'join igiveafrica')

@section('content')

    <div class="selectF">
        {{-- <center>
            <div id="cja">
                <h4>SELECT DESIRED ACCOUNT</h4>
                <div class="d-flex justify-content-between">
                    <div class="cfb">
                        <button class="btn btn-primary">Nonprofit</button>
                    </div>
                    <div class="dfb">
                        <button class="btn btn-primary">Donor</button>
                    </div>
                    <div class="ifb">
                        <button class="btn btn-primary">Individual</button>
                    </div>
                </div>
            </div>
        </center> --}}
    </div>
    <div class="donorF">
        <div id="allj">
           <center>
                <div class="alljf">
                    <div class="text-center">
                        <h5>GET STARTED WITH IGIVEAFRICA</h5>
                        <hr>
                    </div>
                    @include('main.donorj')
                </div>
           </center>
        </div>
    </div>

    <div class="clientF"></div>

@endsection