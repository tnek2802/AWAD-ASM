@extends('layouts.app')
@section('content')
<html>
<head>
    <link rel="stylesheet" href="{{url('css/shoppingCart.css')}}"/>
</head>
<body>

<section class="section2">
    <div class="product">

        <div class="card" data-name="p-1">
            <div class="img"><img src="{{url('/images/1.png')}}"></div>
            <div class="title">New Balance 574</div>
            <div class="desc">Grade-School Shoes | Reflection 073</div>
            <div class="box">
                <div class="price">RM 379.00</div>
            </div>
        </div>
        <div class="card" data-name="p-2">
            <div class="img"><img src="{{url('/images/2.png')}}"></div>
            <div class="title">Nike E-Series</div>
            <div class="desc">Grade-School Shoes | Grey-Cosmic</div>
            <div class="box">
                <div class="price">RM 488.00</div>
            </div>
        </div>
        <div class="card" data-name="p-3">
            <div class="img"><img src="{{url('/images/3.png')}}"></div>
            <div class="title">Nike Dunk Low</div>
            <div class="desc">Men Shoes | Silver-Mint</div>
            <div class="box">
                <div class="price">RM 539.00</div>
            </div>
        </div>
        <div class="card" data-name="p-4">
            <div class="img"><img src="{{url('/images/4.png')}}"></div>
            <div class="title">New Balance Neo</div>
            <div class="desc">Men Shoes | Sea Salt 108</div>
            <div class="box">
                <div class="price">RM 699.00</div>
            </div>
        </div>
        <div class="card" data-name="p-5">
            <div class="img"><img src="{{url('/images/5.png')}}"></div>
            <div class="title">Nike Air Force 3</div>
            <div class="desc">Men Shoes | White-In-Blue</div>
            <div class="box">
                <div class="price">RM 450.00</div>
            </div>
        </div>
        <div class="card" data-name="p-6">
            <div class="img"><img src="{{url('/images/6.png')}}"></div>
            <div class="title">Nike Air Trainer</div>
            <div class="desc">Men Shoes | Black-Dk-Grey</div>
            <div class="box">
                <div class="price">RM 589.00</div>
            </div>
        </div>
        <div class="card" data-name="p-7">
            <div class="img"><img src="{{url('/images/7.png')}}"></div>
            <div class="title">Nike Lebron XX</div>
            <div class="desc">Men Shoes | Multi-Colour</div>
            <div class="box">
                <div class="price">RM 919.00</div>
            </div>
        </div>
        <div class="card" data-name="p-8">
            <div class="img"><img src="{{url('/images/8.png')}}"></div>
            <div class="title">Nike Dunk Higg</div>
            <div class="desc">Men Shoes | Chill-Blue</div>
            <div class="box">
                <div class="price">RM 425.00</div>
            </div>
        </div>

    </div>
</section>


<div class="products-preview">
    <div class="preview" data-target="p-1">
        <img src="{{url('/images/1.png')}}">
        <table class="table">
		<thead>
			<tr>
				<th colspan="5">Size Selection</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><input type="checkbox" id="nb574.8"><label for="nb574.8">8</label></td>
				<td><input type="checkbox" id="nb574.9"><label for="nb574.9">9</label></td>
                <td><input type="checkbox" id="nb574.10"><label for="nb574.10">10</label></td>
				<td><input type="checkbox" id="nb574.11"><label for="nb574.11">11</label></td>
                <td><input type="checkbox" id="nb574.12"><label for="nb574.12">12</label></td>
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

    <div class="preview" data-target="p-2">
        <img src="{{url('/images/2.png')}}">
        <table class="table">
		<thead>
			<tr>
				<th colspan="8">Size Selection</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><input type="checkbox" id="ne.8"><label for="ne.8">8</label></td>
				<td><input type="checkbox" id="ne.9"><label for="ne.9">9</label></td>
                <td><input type="checkbox" id="ne.10"><label for="ne.10">10</label></td>
				<td><input type="checkbox" id="ne.11"><label for="ne.11">11</label></td>
                <td><input type="checkbox" id="ne.12"><label for="ne.12">12</label></td>
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

    <div class="preview" data-target="p-3">
        <img src="{{url('/images/3.png')}}">
        <table class="table">
		<thead>
			<tr>
				<th colspan="8">Size Selection</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><input type="checkbox" id="ndl.8"><label for="ndl.8">8</label></td>
				<td><input type="checkbox" id="ndl.9"><label for="ndl.9">9</label></td>
                <td><input type="checkbox" id="ndl.10"><label for="ndl.10">10</label></td>
				<td><input type="checkbox" id="ndl.11"><label for="ndl.11">11</label></td>
                <td><input type="checkbox" id="ndl.12"><label for="ndl.12">12</label></td>
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

    <div class="preview" data-target="p-4">
        <img src="{{url('/images/4.png')}}">
        <table class="table">
		<thead>
			<tr>
				<th colspan="8">Size Selection</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><input type="checkbox" id="nbn.8"><label for="nbn.8">8</label></td>
				<td><input type="checkbox" id="nbn.9"><label for="nbn.9">9</label></td>
                <td><input type="checkbox" id="nbn.10"><label for="nbn.10">10</label></td>
				<td><input type="checkbox" id="nbn.11"><label for="nbn.11">11</label></td>
                <td><input type="checkbox" id="nbn.12"><label for="nbn.12">12</label></td>
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

    <div class="preview" data-target="p-5">
        <img src="{{url('/images/5.png')}}">
        <table class="table">
		<thead>
			<tr>
				<th colspan="8">Size Selection</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><input type="checkbox" id="naf3.8"><label for="naf3.8">8</label></td>
				<td><input type="checkbox" id="naf3.9"><label for="naf3.9">9</label></td>
                <td><input type="checkbox" id="naf3.10"><label for="naf3.10">10</label></td>
				<td><input type="checkbox" id="naf3.11"><label for="naf3.11">11</label></td>
                <td><input type="checkbox" id="naf3.12"><label for="naf3.12">12</label></td>
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

    <div class="preview" data-target="p-6">
        <img src="{{url('/images/6.png')}}">
        <table class="table">
		<thead>
			<tr>
				<th colspan="8">Size Selection</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><input type="checkbox" id="nat.8"><label for="nat.8">8</label></td>
				<td><input type="checkbox" id="nat.9"><label for="nat.9">9</label></td>
                <td><input type="checkbox" id="nat.10"><label for="nat.10">10</label></td>
				<td><input type="checkbox" id="nat.11"><label for="nat.11">11</label></td>
                <td><input type="checkbox" id="nat.12"><label for="nat.12">12</label></td>
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

    <div class="preview" data-target="p-7">
        <img src="{{url('/images/7.png')}}">
        <table class="table">
		<thead>
			<tr>
				<th colspan="8">Size Selection</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><input type="checkbox" id="nlxx.8"><label for="nlxx.8">8</label></td>
				<td><input type="checkbox" id="nlxx.9"><label for="nlxx.9">9</label></td>
                <td><input type="checkbox" id="nlxx.10"><label for="nlxx.10">10</label></td>
				<td><input type="checkbox" id="nlxx.11"><label for="nlxx.11">11</label></td>
                <td><input type="checkbox" id="nlxx.12"><label for="nlxx.12">12</label></td>
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

    <div class="preview" data-target="p-8">
        <img src="{{url('/images/8.png')}}">
        <table class="table">
		<thead>
			<tr>
				<th colspan="8">Size Selection</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><input type="checkbox" id="ndh.8"><label for="ndh.8">8</label></td>
				<td><input type="checkbox" id="ndh.9"><label for="ndh.9">9</label></td>
                <td><input type="checkbox" id="ndh.10"><label for="ndh.10">10</label></td>
				<td><input type="checkbox" id="ndh.11"><label for="ndh.11">11</label></td>
                <td><input type="checkbox" id="ndh.12"><label for="ndh.12">12</label></td>
            </tr>
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