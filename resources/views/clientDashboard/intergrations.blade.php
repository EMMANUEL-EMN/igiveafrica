@extends('layouts.userdashboard')


@section('title', 'campaign charity_shop_intergration')

@section('content')
    <div class="products">
        <div class="bg-white p-3 m-3">
            <div class="d-flex justify-content-between">
                <div class="p-2">
                    <h4>PRODUCTS</h4>
                </div>
                <div class="p-2">
                    <button id="add" class="btn btn-success">+NEW</button>
                </div>
            </div>
            @if (session()->has('status'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>{{ session('status') }}</strong>
                </div>
            @elseif (session()->has('error'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>{{ session('error') }}</strong>
                </div>
            @endif
            <hr>
            <div class="dproducts table-responsive" id="product">
                <table class="table-bordered table-stripped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Date Added</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->quantity }}</td>
                                <td>{{ $product->category }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->created_at }}</td>
                                <td>
                                    <a href="/product/edit/{{ $product->id }}">
                                        <i class="fa fa-edit btn btn-success"></i>
                                    </a>
                                    <a href="/product/delete/{{ $product->id }}">
                                        <i class="fa fa-trash-alt btn btn-danger"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div id="addProduct" style="width: 100%;">
                <h6>ADD PRODUCT</h6>
                <hr>
                <form action="{{ route('product.add') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('post')
                    <div class="d-flex justify-content-between">
                        <div class="pname">
                            <p>Product Name</p>
                            <p>
                                <input type="text" name="name" id="pname" required>
                            </p>
                        </div>
                        <div class="price">
                            <p>Price</p>
                            <p>
                                <input type="number" name="price" id="price" required>
                            </p>
                        </div>

                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="pname">
                            <p>Quantity</p>
                            <p>
                                <input type="number" name="quantity" id="quantity" required>
                            </p>
                        </div>
                        <div class="category">
                            <p>Category</p>
                            <p>
                                <select name="category" id="category">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category }}">
                                            {{ $category }}
                                        </option>
                                    @endforeach
                                </select>
                            </p>
                        </div>
                    </div>
                    <div class="description">
                        <p>Description</p>
                        <p>
                            <textarea name="description" id="description" rows="5"></textarea>
                        </p>
                    </div>
                    <div class="image">
                        <p>Product Image</p>
                        <p>
                            <input type="file" name="image" id="image" required>
                            <input type="hidden" name="dealer" id="dealer" value="{{ session('position') }}">
                        </p>
                    </div>
                    <div class="butt">
                        <button class="btn btn-warning">ADD</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="oders bg-white p-3 m-3">
        <h4>CLIENT ORDERS</h4>
        <hr>
        @include('clientDashboard.clientOrder')
    </div>
    <script src="{{ url('storage/js/intergration.js') }}"></script>

@endsection
