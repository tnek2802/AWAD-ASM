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
            <p>Transaction ID: {{ $order->transaction_id }}</p>
            {{-- <ul> --}}
                {{-- @foreach ($transaction->Products as $product)
                    <li>{{ $product->name }}</li>
                @endforeach --}}
            {{-- </ul> --}}
        @endforeach
    </div>
@endsection
