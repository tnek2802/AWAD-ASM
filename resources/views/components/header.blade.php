<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

<style>
.header {
    font-family: courier;
}
.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: pink;
  color: white;
}

.user_profile {
    text-align: right;
}

    <div class="header">
        <title>Sport Apparel Store</title>
        <link rel="icon" type="image/jpg" href="C:\Users\SHIIN WEI\Downloads\abibas.jpg" />
    </head>
    <body>
        
        <hr>
            <h1 style="text-align: center">abibas</h1>           
        <hr> 
        
        <div class="topnav">
            <a href="home">Home</a>
            <div class="dropdown">
                <a>Men</a>
                <div class="dropdown-content">
                    <a href="{{ url('/MenClothes') }}">All Men's Clothing</a>
                    <a href="{{ url('/MenShoes') }}">Men Shoes</a>
                </div>
            </div>
            <div class="dropdown">
                <a>Women</a>
                <div class="dropdown-content">
                    <a href="{{ url('/WomenClothes') }}">All Women's Clothing</a>
                    <a href="{{ url('/WomenShoes') }}">Women Shoes</a>
                </div>
            </div>
            <a href="#">Location</a>
            <div class="user_profile">
                <a href="#">Profile</a>
                <a href="#">My Cart</a>
                <a href="#">Order Status</a>
                <a href="login">Login</a>
            </div>
        </div>
      </div>
    </body>

</html>
