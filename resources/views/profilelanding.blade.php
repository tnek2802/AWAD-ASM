<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile Page</title>

    <!-- Custom Css -->
    <link rel="stylesheet" href="{{url('css/profilePage.css')}}">

    <!-- FontAwesome 5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>
<body>
    <div class="mainbox">
        <div class="leftcol">
            <div class="leftbox">
                <h5 class="profileheading">ACCOUNT OVERVIEW</h5><br>
                <ul>
                    <li class="leftlinav">
                        <a>Personal Information</a>
                    </li>
                    <li class="leftlinav">
                        <a>Address Book</a>
                    </li>
                    <li class="leftlinav">
                        <a>Log out</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="rightcol">
            <div class="rightbox">
                <div class="rightboxcontent">
                    <h4 class="profileheading">MY DETAILS</h4>
                    <p class="profileparagraph">View and edit your details below</p>
                    <h4 class="profileheading">DETAILS</h4>
                    <div class="profiledetailbox">
                        <div class="profiledetail">TNEK YEN KIN</div>
                        <div class="profiledetail">2011-03-11</div>
                        <div class="profiledetail">WEMEN</div>
                        <button type="button">
                            <span>E D I T</span>
                        </button>
                    </div>
                    <h4 class="profileheading">LOGIN DETAILS</h4>
                    <div class="profiledetailbox">
                        <h5 class="profileheading">EMAIL</h5>
                        <div class="profiledetail">TANGZIWENG@UTAR.MY</div>
                        <button type="button">
                            <span>E D I T</span>
                        </button>
                        <h5 class="profileheading"><br>PASSWORD</h5>
                        <div class="profiledetail">**********</div>
                        <button type="button">
                            <span>E D I T</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>