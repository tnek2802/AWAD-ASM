<!DOCTYPE html>
<html lang="en">

<head>
    <title>Profile Page</title>

    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ url('css/profilePage.css') }}">

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
                        <a href="{{url('profile')}}">Personal Information</a>
                    </li>
                    <li class="leftlinav">
                        <a href="{{url('addressbook')}}">Address Book</a>
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
                    <h4 class="profileheading">ADDRESS BOOK</h4>
                    <div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
