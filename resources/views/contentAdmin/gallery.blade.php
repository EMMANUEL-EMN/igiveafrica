@extends('layouts.contentNav')

@section('title', 'gallery')

@section('content')
    <div class="cform">
        @if (session()->has('status'))
            <p class="alert alert-success">{{ session('status') }}</p>
        @endif
        <form action="{{ route('gallery.post')}}" method="POST" enctype="multipart/form-data">
            @method('post')
            @csrf
            <div class="page">
                <h4>UPLOAD IMAGES TO GALLERY</h4>
                <hr>
                <p>Image</p>
                <p><input type="file" name="image" id="image"></p>
                <p>Description</p>
                <p>
                    <textarea name="description" id="description" cols="70" rows="2"></textarea>
                </p>
                <p><button class="btn btn-primary">UPLOAD</button></p>
            </div>
        </form>
    </div>
    <div class="cform">
        <h4>OUR GALLERY</h4>
        <div class="d-flex justify-content-between">
            @foreach ($images as $img)
            <div class="uimg">
                <img src="{{ asset('storage/images/'.$img->image ) }}" id="gimg">
                <p>
                    <a href="/c_editgallery/{{ $img->id }}" class="btn btn-danger">Delete</a>
                </p>
            </div>
            @endforeach
        </div>
    </div>
@endsection