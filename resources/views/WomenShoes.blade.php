<html>
<head>
    <link rel="stylesheet" href="{{url('css/shoppingCart.css')}}"/>
</head>
<body>
<x-header/>

<section class="section2">
    <div class="product">

        <div class="card" data-name="p-1">
            <div class="img"><img src="{{url('/images/9.png')}}"></div>
            <div class="title">Nike Go</div>
            <div class="desc">Grade-School Shoes | Bounce 2</div>
            <div class="box">
                <div class="price">RM 479.00</div>
            </div>
        </div>
        <div class="card" data-name="p-2">
            <div class="img"><img src="{{url('/images/10.png')}}"></div>
            <div class="title">New Balance 9004</div>
            <div class="desc">Grade-School Shoes | Grey-Cosmic</div>
            <div class="box">
                <div class="price">RM 548.00</div>
            </div>
        </div>
        <div class="card" data-name="p-3">
            <div class="img"><img src="{{url('/images/11.png')}}"></div>
            <div class="title">Air Jordan 1</div>
            <div class="desc">Women Shoes | Purple-Mint</div>
            <div class="box">
                <div class="price">RM 639.00</div>
            </div>
        </div>
        <div class="card" data-name="p-4">
            <div class="img"><img src="{{url('/images/12.png')}}"></div>
            <div class="title">Nike Air Force 2</div>
            <div class="desc">Women Shoes | Purple-bleach</div>
            <div class="box">
                <div class="price">RM 499.00</div>
            </div>
        </div>
        <div class="card" data-name="p-5">
            <div class="img"><img src="{{url('/images/13.png')}}"></div>
            <div class="title">Converse HighEnd </div>
            <div class="desc">Women Shoes | Black-In-White</div>
            <div class="box">
                <div class="price">RM 550.00</div>
            </div>
        </div>
        <div class="card" data-name="p-6">
            <div class="img"><img src="{{url('/images/14.png')}}"></div>
            <div class="title">New Balance Freedom</div>
            <div class="desc">Women Shoes | Slipper</div>
            <div class="box">
                <div class="price">RM 189.00</div>
            </div>
        </div>
        <div class="card" data-name="p-7">
            <div class="img"><img src="{{url('/images/15.png')}}"></div>
            <div class="title">Abibas Hipperboost</div>
            <div class="desc">Women Shoes | Pure-White</div>
            <div class="box">
                <div class="price">RM 919.00</div>
            </div>
        </div>
        <div class="card" data-name="p-8">
            <div class="img"><img src="{{url('/images/16.png')}}"></div>
            <div class="title">Puma Multiver</div>
            <div class="desc">Women Shoes | Multiveser</div>
            <div class="box">
                <div class="price">RM 745.00</div>
            </div>
        </div>

    </div>
</section>


<div class="products-preview">
    <div class="preview" data-target="p-1">
        <img src="{{url('/images/9.png')}}">
        <table class="table">
		<thead>
			<tr>
				<th colspan="5">Size Selection</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><input type="checkbox" id="ng.8"><label for="ng.8">8</label></td>
				<td><input type="checkbox" id="ng.9"><label for="ng.9">9</label></td>
                <td><input type="checkbox" id="ng.10"><label for="ng.10">10</label></td>
				<td><input type="checkbox" id="ng.11"><label for="ng.11">11</label></td>
                <td><input type="checkbox" id="ng.12"><label for="ng.12">12</label></td>
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
        <img src="{{url('/images/10.png')}}">
        <table class="table">
		<thead>
			<tr>
				<th colspan="8">Size Selection</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><input type="checkbox" id="nb9004.8"><label for="nb9004.8">8</label></td>
				<td><input type="checkbox" id="nb9004.9"><label for="nb9004.9">9</label></td>
                <td><input type="checkbox" id="nb9004.10"><label for="nb9004.10">10</label></td>
				<td><input type="checkbox" id="nb9004.11"><label for="nb9004.11">11</label></td>
                <td><input type="checkbox" id="nb9004.12"><label for="nb9004.12">12</label></td>
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
        <img src="{{url('/images/11.png')}}">
        <table class="table">
		<thead>
			<tr>
				<th colspan="8">Size Selection</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><input type="checkbox" id="aj1.8"><label for="aj1.8">8</label></td>
				<td><input type="checkbox" id="aj1.9"><label for="aj1.9">9</label></td>
                <td><input type="checkbox" id="aj1.10"><label for="aj1.10">10</label></td>
				<td><input type="checkbox" id="aj1.11"><label for="aj1.11">11</label></td>
                <td><input type="checkbox" id="aj1.12"><label for="aj1.12">12</label></td>
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
        <img src="{{url('/images/12.png')}}">
        <table class="table">
		<thead>
			<tr>
				<th colspan="8">Size Selection</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><input type="checkbox" id="naj2.8"><label for="naj2.8">8</label></td>
				<td><input type="checkbox" id="naj2.9"><label for="naj2.9">9</label></td>
                <td><input type="checkbox" id="naj2.10"><label for="naj2.10">10</label></td>
				<td><input type="checkbox" id="naj2.11"><label for="naj2.11">11</label></td>
                <td><input type="checkbox" id="naj2.12"><label for="naj2.12">12</label></td>
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
        <img src="{{url('/images/13.png')}}">
        <table class="table">
		<thead>
			<tr>
				<th colspan="8">Size Selection</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><input type="checkbox" id="ch.8"><label for="ch.8">8</label></td>
				<td><input type="checkbox" id="ch.9"><label for="ch.9">9</label></td>
                <td><input type="checkbox" id="ch.10"><label for="ch.10">10</label></td>
				<td><input type="checkbox" id="ch.11"><label for="ch.11">11</label></td>
                <td><input type="checkbox" id="ch.12"><label for="ch.12">12</label></td>
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
        <img src="{{url('/images/14.png')}}">
        <table class="table">
		<thead>
			<tr>
				<th colspan="8">Size Selection</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><input type="checkbox" id="nbf.8"><label for="nbf.8">8</label></td>
				<td><input type="checkbox" id="nbf.9"><label for="nbf.9">9</label></td>
                <td><input type="checkbox" id="nbf.10"><label for="nbf.10">10</label></td>
				<td><input type="checkbox" id="nbf.11"><label for="nbf.11">11</label></td>
                <td><input type="checkbox" id="nbf.12"><label for="nbf.12">12</label></td>
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
        <img src="{{url('/images/15.png')}}">
        <table class="table">
		<thead>
			<tr>
				<th colspan="8">Size Selection</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><input type="checkbox" id="ah.8"><label for="ah.8">8</label></td>
				<td><input type="checkbox" id="ah.9"><label for="ah.9">9</label></td>
                <td><input type="checkbox" id="ah.10"><label for="ah.10">10</label></td>
				<td><input type="checkbox" id="ah.11"><label for="ah.11">11</label></td>
                <td><input type="checkbox" id="ah.12"><label for="ah.12">12</label></td>
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
        <img src="{{url('/images/16.png')}}">
        <table class="table">
		<thead>
			<tr>
				<th colspan="8">Size Selection</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><input type="checkbox" id="pm.8"><label for="pm.8">8</label></td>
				<td><input type="checkbox" id="pm.9"><label for="pm.9">9</label></td>
                <td><input type="checkbox" id="pm.10"><label for="pm.10">10</label></td>
				<td><input type="checkbox" id="pm.11"><label for="pm.11">11</label></td>
                <td><input type="checkbox" id="pm.12"><label for="pm.12">12</label></td>
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
