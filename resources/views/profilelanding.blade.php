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
                            <a href="{{ route('orderdetails', $user) }}">Order Details</a>
                        </li>
                        <li class="leftlinav">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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
                        <div class="profiledetailbox">
                            {{-- Required Login and Value Reading --}}
                            <div class="profiledetail">
                                <span>{{ Auth::guard('web')->user()->username }}</span>
                            </div>
                            <div class="profiledetail">
                                <span>{{ $user->contact_num }}</span>
                            </div>
                            <button type="button" class=btnOn data-name="p-1">
                                <span>E D I T</span>
                            </button>
                        </div>
                        <h4 class="profileheading">ADDRESS BOOK</h4>
                        <div class="profiledetailbox">
                            <div class="profiledetail">
                                <span>{{ $user->address }}</span>
                            </div>
                            <button type="button" class=btnOn data-name="p-2">
                                <span>E D I T</span>
                            </button>
                        </div>
                        <h4 class="profileheading">LOGIN DETAILS</h4>
                        <div class="profiledetailbox">
                            <h5 class="profileheading">EMAIL</h5>
                            <div class="profiledetail">
                                <span>{{ $user->email }}</span>
                            </div>
                            <button type="button" class=btnOn data-name="p-3">
                                <span>E D I T</span>
                            </button>
                            <h5 class="profileheading"><br>PASSWORD</h5>
                            <div class="profiledetail" data-name="profile-password">
                                <span>{{ $user->password }}</span>
                            </div>
                            <button type="button" class=btnOn data-name="p-4">
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
                        <form method="POST" action="{{ route('editDetail', $user) }}">
                            @csrf
                            <fieldset class="name">
                                <div class="grid-35">
                                    <label for="profile-name">Name</label>
                                </div>
                                <div class="grid-65">
                                    <input name="usernamechg" required type="text" class="detail-field-input" maxlength="100" value="{{ $user->username }}">
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="grid-35">
                                    <label for="profile-contact">Contact</label>
                                </div>
                                <div class="grid-65">
                                    <input name="contactchg" type="number" class="detail-field-input" value="{{ $user->contact_num }}">
                                </div>
                            </fieldset>
                            <div id="wrap">
                                <button class="btnSave" type="submit" onclick="confirm('Are you sure you want to save changes?')">Save</button>
                                <button class="btnOff">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- EDIT ADDRESS --}}
        <div class="preview" data-target="p-2">
            <div class="wrapper">
                <div class="profile">
                    <div class="content">
                        <h1>Edit Your Address</h1>
                        {{-- {{ route('editEmail',auth()->id()) }} --}}
                        <form method="POST" action="{{ route('editAddress', $user) }}">
                            @csrf
                            <fieldset class="address">
                                <div class="grid-35">
                                    <label for="address">Address</label>
                                </div>
                                <div class="grid-65">
                                    <textarea name="addresschg" required type="text" class="detail-field-input" cols="30" rows="auto" tabindex="3">{{ $user->address }}</textarea>
                                </div>
                            </fieldset>
                            <div id="wrap">
                                <button class="btnSave" type="submit" onclick="confirm('Are you sure you want to save changes?')">Save</button>
                                <button class="btnOff">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- EDIT EMAIL --}}
        <div class="preview" data-target="p-3">
            <div class="wrapper">
                <div class="profile">
                    <div class="content">
                        <h1>Edit Your Email</h1>
                        {{-- {{ route('editEmail',auth()->id()) }} --}}
                        <form method="POST" action="{{ route('editEmail', $user) }}">
                            @csrf
                            <fieldset class="email">
                                <div class="grid-35">
                                    <label for="email">Email</label>
                                </div>
                                <div class="grid-65">
                                    <input name="emailchg" required type="email" class="detail-field-input" value="{{ $user->email }}" maxlength="50">
                                </div>
                            </fieldset>
                            <div id="wrap">
                                <button class="btnSave" type="submit" onclick="confirm('Are you sure you want to save changes?')">Save</button>
                                <button class="btnOff">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- EDIT PASSWORD --}}
        <div class="preview" data-target="p-4">
            <div class="wrapper">
                <div class="profile">
                    <div class="content">
                        <h1>Edit Your Password</h1>
                        <form method="POST" action="{{ route('editPassword', $user) }}">
                            @csrf
                            <fieldset class="password">
                                <div class="grid-35">
                                    <label for="profile-password-old">Old Password</label>
                                </div>
                                <div class="grid-65">
                                    <input name="oldpassword" required type="text" class="detail-field-input" maxlength="100">
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="grid-35">
                                    <label for="profile-password-new">New Password</label>
                                </div>
                                <div class="grid-65">
                                    <input type="password" name="password" required autocomplete="current-password" class="detail-field-input @error('password') is-invalid @enderror">
                                </div>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </fieldset>
                            <fieldset>
                                <div class="grid-35">
                                    <label for="profile-name">Confirm New Password</label>
                                </div>
                                <div class="grid-65">
                                    <input type="password" name="password_confirmation" required autocomplete="current-password" class="detail-field-input @error('password') is-invalid @enderror" required autocomplete="current-password">
                                </div>
                            </fieldset>
                            <div id="wrap">
                                <button class="btnSave" type="submit">Save</button>
                                <button class="btnOff">Cancel</button>
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