@extends('layouts.app')
@section('content')
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
        <section>
            <div class="mainbox">
                <div class="leftcol">
                    <div class="leftbox">
                        <h5 class="profileheading">ACCOUNT OVERVIEW</h5><br>
                        <ul>
                            <li class="leftlinav">
                                <a href="/profile">Personal Information</a>
                            </li>
                            <li class="leftlinav">
                                <a href="/addressbook">Address Book</a>
                            </li>
                            <li class="leftlinav">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
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
                            <div class="profiledetailbox" data-name="profile-info">
                                {{-- Required Login and Value Reading --}}
                                <div class="profiledetail">{{Auth::guard('web')->user()->username}}</div>
                                <div class="profiledetail">DOB??</div>
                                <div class="profiledetail">GENDER??</div>
                                <div class="profiledetail">{{$userdata->contact_num}}</div>
                                <button type="button" class=btnOn data-name="p-1">
                                    <span>E D I T</span>
                                </button>
                            </div>
                            <h4 class="profileheading">LOGIN DETAILS</h4>
                            <div class="profiledetailbox">
                                <h5 class="profileheading">EMAIL</h5>
                                <div class="profiledetail" data-name="profile-email">{{$userdata->email}}</div>
                                <button type="button" class=btnOn data-name="p-2">
                                    <span>E D I T</span>
                                </button>
                                <h5 class="profileheading"><br>PASSWORD</h5>
                                <div class="profiledetail" data-name="profile-password">{{$userdata->password}}</div>
                                <button type="button" class=btnOn data-name="p-3">
                                    <span>E D I T</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="profile-pop">
            {{-- EDIT PROFILE DATA --}}
            <div class="preview" data-target="p-1">
                <div class="wrapper">
                    <div class="profile">
                        <div class="content">
                            <h1>Edit Your Profile</h1>
                            <form action="">
                                <fieldset class="name">
                                    <div class="grid-35">
                                        <label for="profile-name">Name</label>
                                    </div>
                                    <div class="grid-65">
                                        <input name="detailName" required type="text" class="detail-field-input"
                                            id="profile-name" maxlength="100">
                                    </div>
                                </fieldset>
                                <fieldset class="profile-dob">
                                    <div class="grid-35">
                                        <label for="profile-dob">Date Of Birth</label>
                                    </div>
                                    <div class="grid-65">
                                        <input name="detailDOB" type="date" class="detail-field-input" id="profile-dob">
                                    </div>
                                </fieldset>
                                <fieldset class="profile-gender">
                                    <div class="grid-35">
                                        <label for="profile-gender">Gender</label>
                                    </div>
                                    <div class="grid-65">
                                        <select>
                                            <option value="MALE">MALE</option>
                                            <option value="FEMALE">FEMALE</option>
                                        </select>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="grid-35">
                                        <label for="profile-contact">Contact</label>
                                    </div>
                                    <div class="grid-65">
                                        <input name="detailContact" type="number" class="detail-field-input"
                                            id="profile-contact">
                                    </div>
                                </fieldset>
                                <div id="wrap">
                                    <a href="#" class="btnSave">Save</a>
                                    <a href="#" class="btnOff">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- EDIT EMAIL --}}
            <div class="preview" data-target="p-2">
                <div class="wrapper">
                    <div class="profile">
                        <div class="content">
                            <h1>Edit Your Email</h1>
                            <form action="">
                                <fieldset class="email">
                                    <div class="grid-35">
                                        <label for="profile-password-old">Email</label>
                                    </div>
                                    <div class="grid-65">
                                        <input name="detailEmail" required type="email" class="detail-field-input"
                                            id="profile-email" maxlength="100">
                                    </div>
                                </fieldset>
                                <div id="wrap">
                                    <a href="#" class="btnSave">Save</a>
                                    <a href="#" class="btnOff">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- EDIT PASSWORD --}}
            <div class="preview" data-target="p-3">
                <div class="wrapper">
                    <div class="profile">
                        <div class="content">
                            <h1>Edit Your Password</h1>
                            <form action="">
                                <fieldset class="password">
                                    <div class="grid-35">
                                        <label for="profile-password-old">Old Password</label>
                                    </div>
                                    <div class="grid-65">
                                        <input name="oldPassword" required type="text" class="detail-field-input"
                                            id="profile-name" maxlength="100">
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="grid-35">
                                        <label for="profile-password-new">New Password</label>
                                    </div>
                                    <div class="grid-65">
                                        <input name="newPassword" required type="text" class="detail-field-input"
                                            id="profile-name" minlength="8">
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="grid-35">
                                        <label for="profile-name">Confirm New Password</label>
                                    </div>
                                    <div class="grid-65">
                                        <input name="profile-password-new-rep" required type="text"
                                            class="detail-field-input" id="profile-name" maxlength="100">
                                    </div>
                                </fieldset>
                                <div id="wrap">
                                    <a href="#" class="btnSave">Save</a>
                                    <a href="#" class="btnOff">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            let previewContainer = document.querySelector('.profile-pop');
            let previewBox = previewContainer.querySelectorAll('.preview');
            document.querySelectorAll('.profiledetailbox .btnOn').forEach(btnOn => {
                btnOn.onclick = () => {
                    previewContainer.style.display = 'flex';
                    let name = btnOn.getAttribute('data-name');
                    previewBox.forEach(preview => {
                        let target = preview.getAttribute('data-target');
                        if (name == target) {
                            preview.classList.add('active');
                        }
                    });
                };
            });
            // if onclick cancel btn, active action removed
            // display become none
            previewBox.forEach(close => {
                close.querySelector('.btnOff').onclick = () => {
                    close.classList.remove('active');
                    previewContainer.style.display = 'none';
                };
            });
        </script>
    </body>

    </html>
@endsection
