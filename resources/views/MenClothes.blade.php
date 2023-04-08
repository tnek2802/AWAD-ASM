<html>
<head>
    <link rel="stylesheet" href="{{url('css/shoppingCart.css')}}"/>
</head>
<body>
<x-header/>

<section class="section2">
    <div class="product">

        <div class="card" data-name="p-1">
            <div class="img"><img src="{{url('/images/m1.png')}}"></div>
            <div class="title">Puma Fuse</div>
            <div class="desc">T-Shirt | Reflection 073</div>
            <div class="box">
                <div class="price">RM 79.00</div>
            </div>
        </div>
        <div class="card" data-name="p-2">
            <div class="img"><img src="{{url('/images/m2.png')}}"></div>
            <div class="title">Puma Flex 2.0</div>
            <div class="desc">Jacket | Grey-Cosmic</div>
            <div class="box">
                <div class="price">RM 88.00</div>
            </div>
        </div>
        <div class="card" data-name="p-3">
            <div class="img"><img src="{{url('/images/m3.png')}}"></div>
            <div class="title">Puma Flex</div>
            <div class="desc">Long Pant | Silver-Mint</div>
            <div class="box">
                <div class="price">RM 59.00</div>
            </div>
        </div>
        <div class="card" data-name="p-4">
            <div class="img"><img src="{{url('/images/m4.png')}}"></div>
            <div class="title">Neo Short</div>
            <div class="desc">Short Pant | Sea Salt 108</div>
            <div class="box">
                <div class="price">RM 69.00</div>
            </div>
        </div>
        <div class="card" data-name="p-5">
            <div class="img"><img src="{{url('/images/m5.png')}}"></div>
            <div class="title">Kappa Breakable</div>
            <div class="desc">Long Pant | White-In-Blue</div>
            <div class="box">
                <div class="price">RM 50.00</div>
            </div>
        </div>
        <div class="card" data-name="p-6">
            <div class="img"><img src="{{url('/images/m6.png')}}"></div>
            <div class="title">Nike Nba Swingman </div>
            <div class="desc">Jersey | Black-Dk-Grey</div>
            <div class="box">
                <div class="price">RM 89.00</div>
            </div>
        </div>
        <div class="card" data-name="p-7">
            <div class="img"><img src="{{url('/images/m7.png')}}"></div>
            <div class="title">Market HUF</div>
            <div class="desc">T-Shirt | Multi-Colour</div>
            <div class="box">
                <div class="price">RM 99.00</div>
            </div>
        </div>
        <div class="card" data-name="p-8">
            <div class="img"><img src="{{url('/images/m8.png')}}"></div>
            <div class="title">Market Graphic</div>
            <div class="desc">T-Shirt | Chill-Blue</div>
            <div class="box">
                <div class="price">RM 99.00</div>
            </div>
        </div>

    </div>
</section>


<div class="products-preview">
    <div class="preview" data-target="p-1">
        <img src="{{url('/images/m1.png')}}">
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

    <div class="preview" data-target="p-2">
        <img src="{{url('/images/m2.png')}}">
        <table class="table">
		<thead>
			<tr>
				<th colspan="8">Size Selection</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><input type="checkbox" id="m2.s"><label for="m2.s">S</label></td>
				<td><input type="checkbox" id="m2.m"><label for="m2.m">M</label></td>
                <td><input type="checkbox" id="m2.l"><label for="m2.l">L</label></td>
				<td><input type="checkbox" id="m2.xl"><label for="m2.xl">XL</label></td>

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
        <img src="{{url('/images/m3.png')}}">
        <table class="table">
		<thead>
			<tr>
				<th colspan="8">Size Selection</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><input type="checkbox" id="m3.s"><label for="m3.s">S</label></td>
				<td><input type="checkbox" id="m3.m"><label for="m3.m">M</label></td>
                <td><input type="checkbox" id="m3.l"><label for="m3.l">L</label></td>
				<td><input type="checkbox" id="m3.xl"><label for="m3.xl">XL</label></td>

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
        <img src="{{url('/images/m4.png')}}">
        <table class="table">
		<thead>
			<tr>
				<th colspan="8">Size Selection</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><input type="checkbox" id="m4.s"><label for="m4.s">S</label></td>
				<td><input type="checkbox" id="m4.m"><label for="m4.m">M</label></td>
                <td><input type="checkbox" id="m4.l"><label for="m4.l">L</label></td>
				<td><input type="checkbox" id="m4.xl"><label for="m4.xl">XL</label></td>
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
        <img src="{{url('/images/m5.png')}}">
        <table class="table">
		<thead>
			<tr>
				<th colspan="8">Size Selection</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><input type="checkbox" id="m5.s"><label for="m5.s">S</label></td>
				<td><input type="checkbox" id="m5.m"><label for="m5.m">M</label></td>
                <td><input type="checkbox" id="m5.l"><label for="m5.l">L</label></td>
				<td><input type="checkbox" id="m5.xl"><label for="m5.xl">XL</label></td>
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
        <img src="{{url('/images/m6.png')}}">
        <table class="table">
		<thead>
			<tr>
				<th colspan="8">Size Selection</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><input type="checkbox" id="m6.s"><label for="m6.s">S</label></td>
				<td><input type="checkbox" id="m6.m"><label for="m6.m">M</label></td>
                <td><input type="checkbox" id="m6.l"><label for="m6.l">L</label></td>
				<td><input type="checkbox" id="m6.xl"><label for="m6.xl">XL</label></td>
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
        <img src="{{url('/images/m7.png')}}">
        <table class="table">
		<thead>
			<tr>
				<th colspan="8">Size Selection</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><input type="checkbox" id="m7.s"><label for="m7.s">S</label></td>
				<td><input type="checkbox" id="m7.m"><label for="m7.m">M</label></td>
                <td><input type="checkbox" id="m7.l"><label for="m7.l">L</label></td>
				<td><input type="checkbox" id="m7.xl"><label for="m7.xl">XL</label></td>
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
        <img src="{{url('/images/m8.png')}}">
        <table class="table">
		<thead>
			<tr>
				<th colspan="8">Size Selection</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><input type="checkbox" id="m8.s"><label for="m8.s">S</label></td>
				<td><input type="checkbox" id="m8.m"><label for="m8.m">M</label></td>
                <td><input type="checkbox" id="m8.l"><label for="m8.l">L</label></td>
				<td><input type="checkbox" id="m8.xl"><label for="m8.xl">XL</label></td>
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
