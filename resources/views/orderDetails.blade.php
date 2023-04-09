@extends('layouts.app')
@section('content')
    <html>

    <head>
        <link rel="stylesheet" href="{{ url('css/orderDetails.css') }}" />
    </head>

    </html>

    <div class=test>
        <h1>hey there here are your orders xd</h1>
        {{-- @foreach($orders as $order)
        <div>{{$order->transaction_id}}</div>
        @endforeach --}}

        {{-- @foreach ($products as $product)
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Order ID:{{ $product->transaction_id}}</div>
                <div class="card-header">{{ $product->product_name }}</div>
                <div class="card-body">
                    <img src="{{ $product->image }}" class='img-fluid'>
                    <p>{{ $product->product_description }}</p>
                    <p>Price: {{ $product->product_price }}</p>
                </div>
            </div>
        </div>
        @endforeach --}}

        @foreach ($orders as $order)
    <div class="card mb-3">
        <div class="card-header">
            Order ID: {{ $order->transaction_id }}
        </div>
        <div class="card-body">
            @foreach ($order->Products as $product)
                <div class="media mb-3">
                    <img src="{{ $product->image }}" class="mr-3" alt="{{ $product->product_name }}" width="64">
                    <div class="media-body">
                        <h5 class="mt-0">{{ $product->product_name }}</h5>
                        <p>{{ $product->product_description }}</p>
                        <p>Price: {{ $product->product_price }}</p>
                        <p>Quantity: {{ $product->pivot->transaction_quantity }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="card-footer">
            <strong>Total:</strong> {{ $order->total_amount }}
        </div>
    </div>
@endforeach
    </div>
@endsection
