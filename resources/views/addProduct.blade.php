@extends('layouts.auth')
@section('content')
<html>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add New Product</div>
                    <div class="card-body">
                        <a href="admin" style="color: blue;">Back</a>
                        <form action='addProduct' method="POST">
                            @csrf
                            <input type = "text" name="product_type" placeholder="Enter Product Type"> <br><br>
                            <input type = "text" name="product_category" placeholder="Enter Product Category"> <br><br>
                            <input type = "text" name="product_description" placeholder="Enter Product Description"> <br><br>
                            <input type = "text" name="product_name" placeholder="Enter Product Name"> <br><br>
                            <input type = "text" name="product_price" placeholder="Enter Product Price"> <br><br>
                            <input type = "text" name="image" placeholder="Enter Product Image"> <br><br>
                            <button type ="submit"> Add Product</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body> 
</html>
@endsection
