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
  margin-bottom: 10px;
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
        <div class="user_profile">
        <a href="#">Profile</a>
        <a href="#">My Cart</a>
        <a href="#">Order Status</a>
        <a href="login">Login</a>
        <br><br>
        <div>
        <div class="topnav">
            <a class="active" href="home">Home</a>
            <a href="#">Mens</a>
            <a href="#">Womens</a>
            <a href="#">Location</a>

        </div>
      </div>
    </body>

</html>
