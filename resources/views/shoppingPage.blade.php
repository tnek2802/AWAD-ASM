<html>
<head>
    <link rel="stylesheet" href="{{url('css/shoppingCart.css')}}"/>
</head>
<body>
<x-header/>
<section class="section1">
</section>

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
				<th colspan="4">Size Selection</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><input type="checkbox" id="nb574.s"><label for="nb574.s">S</label></td>
				<td><input type="checkbox" id="nb574.m"><label for="nb574.m">M</label></td>
                <td><input type="checkbox" id="nb574.l"><label for="nb574.l">L</label></td>
				<td><input type="checkbox" id="nb574.xl"><label for="nb574.xl">XL</label></td>
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
				<td><input type="checkbox" id="ne.s"><label for="ne.s">S</label></td>
				<td><input type="checkbox" id="ne.m"><label for="ne.m">M</label></td>
                <td><input type="checkbox" id="ne.l"><label for="ne.l">L</label></td>
				<td><input type="checkbox" id="ne.xl"><label for="ne.xl">XL</label></td>

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
				<td><input type="checkbox" id="ndl.s"><label for="ndl.s">S</label></td>
				<td><input type="checkbox" id="ndl.m"><label for="ndl.m">M</label></td>
                <td><input type="checkbox" id="ndl.l"><label for="ndl.l">L</label></td>
				<td><input type="checkbox" id="ndl.xl"><label for="ndl.xl">XL</label></td>

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
				<td><input type="checkbox" id="nbn.s"><label for="nbn.s">S</label></td>
				<td><input type="checkbox" id="nbn.m"><label for="nbn.m">M</label></td>
                <td><input type="checkbox" id="nbn.l"><label for="nbn.l">L</label></td>
				<td><input type="checkbox" id="nbn.xl"><label for="nbn.xl">XL</label></td>
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
				<td><input type="checkbox" id="naf3.s"><label for="naf3.s">S</label></td>
				<td><input type="checkbox" id="naf3.m"><label for="naf3.m">M</label></td>
                <td><input type="checkbox" id="naf3.l"><label for="naf3.l">L</label></td>
				<td><input type="checkbox" id="naf3.xl"><label for="naf3.xl">XL</label></td>
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
				<td><input type="checkbox" id="nat.s"><label for="nat.s">S</label></td>
				<td><input type="checkbox" id="nat.m"><label for="nat.m">M</label></td>
                <td><input type="checkbox" id="nat.l"><label for="nat.l">L</label></td>
				<td><input type="checkbox" id="nat.xl"><label for="nat.xl">XL</label></td>
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
				<td><input type="checkbox" id="nlxx.s"><label for="nlxx.s">S</label></td>
				<td><input type="checkbox" id="nlxx.m"><label for="nlxx.m">M</label></td>
                <td><input type="checkbox" id="nlxx.l"><label for="nlxx.l">L</label></td>
				<td><input type="checkbox" id="nlxx.xl"><label for="nlxx.xl">XL</label></td>
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
				<td><input type="checkbox" id="ndh.s"><label for="ndh.s">S</label></td>
				<td><input type="checkbox" id="ndh.m"><label for="ndh.m">M</label></td>
                <td><input type="checkbox" id="ndh.l"><label for="ndh.l">L</label></td>
				<td><input type="checkbox" id="ndh.xl"><label for="ndh.xl">XL</label></td>
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