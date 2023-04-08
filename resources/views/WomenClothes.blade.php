<html>
<head>
    <link rel="stylesheet" href="{{url('css/shoppingCart.css')}}"/>
</head>
<body>
<x-header/>

<section class="section2">
    <div class="product">

        <div class="card" data-name="p-1">
            <div class="img"><img src="{{url('/images/w1.png')}}"></div>
            <div class="title">IVY Park</div>
            <div class="desc">Sport Bra</div>
            <div class="box">
                <div class="price">RM 79.00</div>
            </div>
        </div>
        <div class="card" data-name="p-2">
            <div class="img"><img src="{{url('/images/w2.png')}}"></div>
            <div class="title">Nike Suit</div>
            <div class="desc">Hoddie</div>
            <div class="box">
                <div class="price">RM 158.00</div>
            </div>
        </div>
        <div class="card" data-name="p-3">
            <div class="img"><img src="{{url('/images/w3.png')}}"></div>
            <div class="title">Under Armour Soften</div>
            <div class="desc">Sport Bra</div>
            <div class="box">
                <div class="price">RM 89.00</div>
            </div>
        </div>
        <div class="card" data-name="p-4">
            <div class="img"><img src="{{url('/images/w4.png')}}"></div>
            <div class="title">Vogue Flora</div>
            <div class="desc">Shirt</div>
            <div class="box">
                <div class="price">RM 69.00</div>
            </div>
        </div>
        <div class="card" data-name="p-5">
            <div class="img"><img src="{{url('/images/w5.png')}}"></div>
            <div class="title">Kappa Style</div>
            <div class="desc">T-Shirt</div>
            <div class="box">
                <div class="price">RM 50.00</div>
            </div>
        </div>
        <div class="card" data-name="p-6">
            <div class="img"><img src="{{url('/images/w6.png')}}"></div>
            <div class="title">Abibas Branded</div>
            <div class="desc">Shorts</div>
            <div class="box">
                <div class="price">RM 89.00</div>
            </div>
        </div>
        <div class="card" data-name="p-7">
            <div class="img"><img src="{{url('/images/w7.png')}}"></div>
            <div class="title">Relax abibas</div>
            <div class="desc">Short Pant</div>
            <div class="box">
                <div class="price">RM 79.00</div>
            </div>
        </div>
        <div class="card" data-name="p-8">
            <div class="img"><img src="{{url('/images/w8.png')}}"></div>
            <div class="title">Abibas Fusion</div>
            <div class="desc">Skirt</div>
            <div class="box">
                <div class="price">RM 129.00</div>
            </div>
        </div>

    </div>
</section>


<div class="products-preview">
    <div class="preview" data-target="p-1">
        <img src="{{url('/images/w1.png')}}">
        <table class="table">
		<thead>
			<tr>
				<th colspan="4">Size Selection</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><input type="checkbox" id="w1.s"><label for="w1.s">S</label></td>
				<td><input type="checkbox" id="w1.m"><label for="w1.m">M</label></td>
                <td><input type="checkbox" id="w1.l"><label for="w1.l">L</label></td>
				<td><input type="checkbox" id="w1.xl"><label for="w1.xl">XL</label></td>
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
        <img src="{{url('/images/w2.png')}}">
        <table class="table">
		<thead>
			<tr>
				<th colspan="8">Size Selection</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><input type="checkbox" id="w2.s"><label for="w2.s">S</label></td>
				<td><input type="checkbox" id="w2.m"><label for="w2.m">M</label></td>
                <td><input type="checkbox" id="w2.l"><label for="w2.l">L</label></td>
				<td><input type="checkbox" id="w2.xl"><label for="w2.xl">XL</label></td>

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
        <img src="{{url('/images/w3.png')}}">
        <table class="table">
		<thead>
			<tr>
				<th colspan="8">Size Selection</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><input type="checkbox" id="w3.s"><label for="w3.s">S</label></td>
				<td><input type="checkbox" id="w3.m"><label for="w3.m">M</label></td>
                <td><input type="checkbox" id="w3.l"><label for="w3.l">L</label></td>
				<td><input type="checkbox" id="w3.xl"><label for="w3.xl">XL</label></td>

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
        <img src="{{url('/images/w4.png')}}">
        <table class="table">
		<thead>
			<tr>
				<th colspan="8">Size Selection</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><input type="checkbox" id="w4.s"><label for="w4.s">S</label></td>
				<td><input type="checkbox" id="w4.m"><label for="w4.m">M</label></td>
                <td><input type="checkbox" id="w4.l"><label for="w4.l">L</label></td>
				<td><input type="checkbox" id="w4.xl"><label for="w4.xl">XL</label></td>
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
        <img src="{{url('/images/w5.png')}}">
        <table class="table">
		<thead>
			<tr>
				<th colspan="8">Size Selection</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><input type="checkbox" id="w5.s"><label for="w5.s">S</label></td>
				<td><input type="checkbox" id="w5.m"><label for="w5.m">M</label></td>
                <td><input type="checkbox" id="w5.l"><label for="w5.l">L</label></td>
				<td><input type="checkbox" id="w5.xl"><label for="w5.xl">XL</label></td>
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
        <img src="{{url('/images/w6.png')}}">
        <table class="table">
		<thead>
			<tr>
				<th colspan="8">Size Selection</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><input type="checkbox" id="w6.s"><label for="w6.s">S</label></td>
				<td><input type="checkbox" id="w6.m"><label for="w6.m">M</label></td>
                <td><input type="checkbox" id="w6.l"><label for="w6.l">L</label></td>
				<td><input type="checkbox" id="w6.xl"><label for="w6.xl">XL</label></td>
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
        <img src="{{url('/images/w7.png')}}">
        <table class="table">
		<thead>
			<tr>
				<th colspan="8">Size Selection</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><input type="checkbox" id="w7.s"><label for="w7.s">S</label></td>
				<td><input type="checkbox" id="w7.m"><label for="w7.m">M</label></td>
                <td><input type="checkbox" id="w7.l"><label for="w7.l">L</label></td>
				<td><input type="checkbox" id="w7.xl"><label for="w7.xl">XL</label></td>
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
        <img src="{{url('/images/w8.png')}}">
        <table class="table">
		<thead>
			<tr>
				<th colspan="8">Size Selection</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><input type="checkbox" id="w8.s"><label for="w8.s">S</label></td>
				<td><input type="checkbox" id="w8.m"><label for="w8.m">M</label></td>
                <td><input type="checkbox" id="w8.l"><label for="w8.l">L</label></td>
				<td><input type="checkbox" id="w8.xl"><label for="w8.xl">XL</label></td>
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
