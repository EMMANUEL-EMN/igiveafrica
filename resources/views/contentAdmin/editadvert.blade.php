@extends('layouts.contentNav')

@section('title', 'advert')

@section('content')
    <div class="cform">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="page">
                <h4>EDIT AN ADVERT</h4>
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
@endsection