@extends('layouts.app')
@section('content')
    <html>

    <head>
        <link rel="stylesheet" href="{{ url('css/orderDetails.css') }}" />
    </head>

    </html>

    <div class=test>
        <h1>hey there here are your orders xd</h1>
        @foreach ($orders as $order)
            <p>Order ID: {{ $order->transaction_id }}</p>
            <p>Order date: {{ $order->transaction_date }}</p>
            <p>Delivery address: {{ $order->delivery_address }}</p>
            <p>Total Price: {{ $order->total_amount }}</p>
        @endforeach

        @foreach ($products as $product)
            <p>Order ID: {{ $product->product_id }}</p>
        @endforeach
    </div>
@endsection
