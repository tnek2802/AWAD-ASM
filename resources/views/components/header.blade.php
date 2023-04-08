<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{url('css/header.css')}}"/>

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
