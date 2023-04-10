@extends('layouts.app')
@section('content')

<div class="container my-5">
    <div class="card shadow">
        <div class="card-body" style="display:grid">
        <table>
            <th>
                <h3 style="text-decoration:underline">Shopping Cart</h3>
            </th>
            <tr>
                <td colspan="2">
                    <div class="col-md-5">
                        <h3> </h3>
                    </div>
                </td>
                <td colspan="2">
                    <div class="col-md-10">
                        <h3>Product Name</h3>
                    </div>
                </td>
                <td colspan="2">
                    <div class="col-md-10">
                        <h3>Product Price</h3>
                    </div>
                </td>
                <td colspan="2"> 
                    <div class="col-md-10">
                        <h3>Product Size</h3>
                    </div>
                </td>
                <td colspan="2"> 
                    <div class="col-md-10">
                        <h3>Quantity</h3>
                    </div>
                </td>
            </tr>
            @if($carts != null)
            @foreach($carts as $product)
            <tr>
            <td colspan="2">
                    <div class="col-md-5">
                        <img src="{{$product['image']}}" alt="image" style="width: 200px; height: 200px">
                    </div>
                </td>
                <td colspan="2">
                    <div class="col-md-10">
                        <div>{{$product['product_name']}}</div>
                    </div>
                </td>
                <td colspan="2">
                    <div class="col-md-10">
                        <div>{{$product['product_price']}}</div>
                    </div>
                </td>
                <td colspan="2"> 
                    <div class="col-md-10">
                        <div>{{$product['size']}}</div>
                    </div>
                </td>
                <td colspan="2"> 
                    <div class="col-md-10">
                        <div>{{$product['quantity']}}</div>
                    </div>
                </td>
                <td colspan="2">
                    <div class="col-md-10">
                        <button class="btn btn-danger">Remove</button>
                    </div>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
            <td colspan="10">
                    <div class="col-md-10">
                        <div style="text-align:center; font-size:18px"> No Item Added in Cart </div>
                    </div>
                </td>
            </tr>
            @endif
        </table>
        </div>
    </div>
</div>
@endsection