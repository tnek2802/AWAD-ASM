import React, { Component } from "react";
import ReactDOM from "react-dom";
import "../../css/header.css";

export default class Header extends Component {
    render() {
        return (
            <div class="header">
                <title>Sport Apparel Store</title>
                <link
                    rel="icon"
                    type="image/jpg"
                    href="C:\Users\SHIIN WEI\Downloads\abibas.jpg"
                />
                <body>
                    <h1>abibas</h1>
                    <div class="user_profile">
                        <a href="#">Profile</a>
                        <a href="#">My Cart</a>
                        <a href="#">Order Status</a>
                        <a href="login">Login</a>
                        <br></br>
                    </div>
                    <div class="topnav">
                        <a class="active" href="home">
                            Home
                        </a>
                        <a href="shoppingPage">Mens</a>
                        <a href="shoppingPage">Womens</a>
                        <a href="#">Location</a>
                    </div>
                </body>
            </div>
        );
    }
}

if (document.getElementById("header")) {
    ReactDOM.render(<Header />, document.getElementById("header"));
}
