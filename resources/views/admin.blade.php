@extends('layouts.auth')
@section('content')
<html>
<head>
    <link rel="stylesheet" href="{{url('css/shoppingCart.css')}}"/>

<style>
    .w-5{
        display: none
    }
</style>
</head>
<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                <div class="card-header">Product List</div>
                    <div class="card-body">
                    <a href="addProduct" style="color: blue;">Add New Product</a>
                        <table border="1">
                            <tr>
                                <td>Product ID</td>
                                <td>Type</td>
                                <td>Category</td>
                                <td>Description</td>
                                <td>Name</td>
                                <td>Price</td>
                                <td>Operation</td>
                                <td>Operation</td>
                            </tr>
                            @foreach ($products as $product)
                            <tr>
                                <td>{{$product['product_id']}}</td>
                                <td>{{$product['product_type']}}</td>
                                <td>{{$product['product_category']}}</td>
                                <td>{{$product['product_description']}}</td>
                                <td>{{$product['product_name']}}</td>
                                <td>{{$product['product_price']}}</td>
                                <td><a href={{"deleteProduct/".$product['product_id']}} style="color: blue;">Delete</a></td>
                                <td><a href={{"updateProduct/".$product['product_id']}} style="color: blue;">Update</a></td>
                            </tr>
                            @endforeach
                        </table>
                        <div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
<html>
@endsection
