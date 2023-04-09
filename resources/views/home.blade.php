@extends('layouts.app')
@section('content')
<html>
<head>
    <link rel='stylesheet' href="{{ url('css/home.css') }}">
</head>


<body>
    <h1 class='home-title'>
        WELCOME TO ABIBAS, THE HOUSE OF CLASSICS.
    </h1>

    <div class='carousel-wrapper'>
        <div class='carousel-container'>
            <div class='carousel' id='carousel'></div>
            <div class='carousel-header'>
                <p>Unlock your<br>true potential.<br>
                <a href="/shoppingPage">Shop Now.</a></p>
            </div>
        </div>
    </div>

    <div class='trending-wrapper'>
        <div class="trending">
            <h1 class='trending-title'>TRENDING PRODUCTS</h1>
            <div class="row">
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
        </div>
    </div>

    <div class='company-background-wrapper'>
        <h2 class='company-background-title'>STORIES, SPORTSWEAR AND STYLES<br>AT ABIBAS, SINCE 2023</h2>
        <div class='company-background-text'>The one and only shop for premium,
            stylish sportswear for athletes and fitness enthusiasts alike. Fulfill your fitness goals with our products,
            from athletic bodywear and
            footwear, to accessories designed for high performance using the latest technologies and eco-friendly
            materials. We prioritize sustainability and ethical production practices by sourcing materials from socially
            responsible suppliers and working with factories that provide fair wages and safe working conditions. Join
            us on our journey to provide the best sportswear possible for athletes and fitness enthusiasts worldwide.
        </div>
    </div>

    <div class='foot'>
        <div id='footer'></div>
    </div>

</body>
</html>

@endsection


<script src="/js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" defer></script>

{{-- have to install react, reactstrap and react-slick --}}
