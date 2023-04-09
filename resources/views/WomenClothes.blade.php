@extends('layouts.app')
@section('content')
<html>
<head>
    <link rel="stylesheet" href="{{url('css/shoppingCart.css')}}"/>
</head>
<body>

<section class="section2">
    <div class="product">
    @foreach ($products as $product)
        <div class="card" data-name= "{{$product->product_name}}" >
            <div class="img"><img src="{{ $product->image }}"></div> 
            <div class="title"> {{$product->product_name}} </div>
            <div class="desc">{{$product->product_description}}</div>
            <div class="box">
                <div class="price">RM {{$product->product_price}}</div>
            </div>
        </div>
    @endforeach
    </div>
</section>


<div class="products-preview">
    @foreach ($products as $product)
    <div class="preview" data-target="{{$product->product_name}}">
        <img src="{{$product->image}}">
        <table class="table">
		<thead>
			<tr>
				<th colspan="4">Size Selection</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><input type="checkbox" id="m1.s"><label for="m1.s">S</label></td>
				<td><input type="checkbox" id="m1.m"><label for="m1.m">M</label></td>
                <td><input type="checkbox" id="m1.l"><label for="m1.l">L</label></td>
				<td><input type="checkbox" id="m1.xl"><label for="m1.xl">XL</label></td>
            </tr>
        </tbody>
        </table>
        <div class="buttons">
            <div class="btn1">
                <a href="#" class="a">Add To Cart</a>
            </div>
            <div class="btn2">
                <a href="#" class="c">Cancel</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

<script>
    let previewContainer = document.querySelector('.products-preview');
    let previewBox = previewContainer.querySelectorAll('.preview');

    //active action added when the card is being clicked
    document.querySelectorAll('.product .card').forEach(product =>{
        product.onclick = () =>{
            previewContainer.style.display ='flex';
            let name = product.getAttribute('data-name');
            previewBox.forEach(preview =>{
                let target = preview.getAttribute('data-target');
                if(name == target){
                    preview.classList.add('active');
                }
            });
        };
    });

    //if onclick cancel btn, active action removed
    //display become none
    previewBox.forEach(close =>{
        close.querySelector('.c').onclick = () =>{
            close.classList.remove('active');
            previewContainer.style.display ='none';
        };
    });
</script>
</body>
</html>
@endsection