@extends('layouts.shop')

@section('title', 'shopping cart')


@section('content')
    <div class="bg-white p-3 m-3">
        <h5>
            Cart
            @if (session()->has('cart'))
                ({{ count(session('cart')) }})
            @else
                0
            @endif
        </h5>
        <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            @foreach ($items as $item)
                <tr>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ $item['quantity'] }}</td>
                    <td>Ksh. {{ $item['price'] }}</td>
                    <td>
                        <img src="storage/products/{{ $item['photo'] }}" alt="" width="50px" height="auto">
                    </td>
                    <td>
                        <a href="item/remove/{{ $item['id'] }}">
                            remove
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
