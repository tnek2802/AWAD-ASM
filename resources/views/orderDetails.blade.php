@extends('layouts.app')
@section('content')
    <html>

    <head>
        <link rel="stylesheet" href="{{ url('css/orderDetails.css') }}" />
    </head>

    </html>

    <div class=test>
        <h1>hey there here are your orders xd</h1>
        @foreach ($products as $product)
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">{{ $product->product_name }}</div>
                <div class="card-body">
                    <img src="{{ $product->image }}" class='img-fluid'>
                    <p>{{ $product->product_description }}</p>
                    <p>Price: {{ $product->product_price }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
