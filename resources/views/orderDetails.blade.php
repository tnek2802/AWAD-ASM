@extends('layouts.app')
@section('content')
    <html>

    <head>
        <link rel="stylesheet" href="{{ url('css/orderDetails.css') }}" />
    </head>

    </html>

    {{-- <div class=test>
        <h1>hey there here are your orders xd</h1>
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
    </div> --}}

    <div class="container">
        <h1>Here are your orders:</h1>
        @foreach ($orders as $order)
            <div class="card mb-3">
                <div class="card-header">
                    Order ID: {{ $order->transaction_id }}
                </div>
                <div class="card-body row">
                    @foreach ($order->Products as $product)
                        <div class="col-md-3">
                            <div class="card">
                                <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->product_name }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $product->product_name }}</h5>
                                    <p class="card-text">{{ $product->product_description }}</p>
                                    <p class="card-text">Price: {{ $product->product_price }}</p>
                                    <p class="card-text">Quantity: {{ $product->pivot->transaction_quantity }}</p>
                                </div>
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
