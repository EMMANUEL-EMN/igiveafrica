@extends('layouts.contentNav')

@section('title', 'advert')

@section('content')
    <div class="cform">
        @if (session()->has('status'))
            <p class="alert alert-success">{{ session('status') }}</p>
        @endif
        <form action=" {{ route('advert.add') }} " method="POST" enctype="multipart/form-data">
            @csrf
            @method('post')
            <div class="page">
                <h4>WRITE AN ADVERT</h4>
                <hr>
                <p>Image</p>
                <p><input type="file" name="image" id="image"></p>
                <p>Description</p>
                <p>
                    <textarea name="description" id="description" cols="70" rows="2"></textarea>
                </p>
                <p><button class="btn btn-primary">PUBLISH</button></p>
            </div>
        </form>
    </div>
    <div class="cform">
        <h4><u>OUR ADVERTS</u></h4>
        <div class="d-flex justify-content-between">
            @foreach ($advert as $img)
            <div class="uimg">
                <img src="{{ asset('storage/images/'.$img->image ) }}" id="gimg">
                <p style="width: 200px">{{ $img->description }}</p>
                <p>
                    <a href="/deleteAdvert/{{ $img->id }}" class="btn btn-danger">Delete</a>
                </p>
            </div>
            @endforeach
        </div>
    </div>
@endsection