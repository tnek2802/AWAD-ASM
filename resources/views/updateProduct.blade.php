@extends('layouts.auth')
@section('content')
<html>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="card-body">
                        <a href="admin" style="color: blue;">Back</a>
                        <form action='updateProduct' method="POST">
                            @csrf
                            <input type = "hidden" name="product_id" value="{{$products['product_id']}}"> <br><br>
                            <input type = "text" name="product_type" value="{{$products['product_type']}}"> <br><br>
                            <input type = "text" name="product_category" value="{{$products['product_category']}}"> <br><br>
                            <input type = "text" name="product_description" value="{{$products['product_description']}}"> <br><br>
                            <input type = "text" name="product_name" value="{{$products['product_name']}}"> <br><br>
                            <input type = "text" name="product_price" value="{{$products['product_price']}}"> <br><br>
                            <input type = "text" name="image" value="{{$products['product_image']}}"> <br><br>
                            <button type ="submit"> Update Product</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body> 
</html>
@endsection