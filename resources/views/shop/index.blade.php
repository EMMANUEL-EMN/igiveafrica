@extends('layouts.shop')

@section('title', 'igiveafrica charity shop')

@section('content')
    {{-- <div class="bg-whit">
        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="storage/images/b1.jpg" alt="Los Angeles">
                </div>
                <div class="carousel-item">
                    <img src="storage/images/f5.jpeg" alt="Chicago">
                </div>
                <div class="carousel-item">
                    <img src="storage/images/.png" alt="New York">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>

        </div>
    </div> --}}
    
    <div class="products d-flex justify-content-around">
        @foreach ($products as $pro)
            <div class="card bg-white" style="height: 340px">
                <div class="card-head">
                    <img src="{{ url('storage/products/' . $pro->image) }}" alt="" id="productImage">
                </div>
                <div class="card-body">
                    {{ $pro->name }}
                    <br>
                    {{ $pro->price }}
                </div>
                <div class="card-footer">
                    <a href="/add/to/cart/{{ $pro->id }}">
                        <button class="btn btn-warning btn-sm">ADD TO CART</button>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
