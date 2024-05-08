<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ ucwords(str_replace('-', ' ', last(explode('/', url()->current())))) }}</title>
    <link rel="stylesheet" href="{{ 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css' }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/login.css') }}">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6 formsignin">
                <form action="" onsubmit="checkPasswordLength()">
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-8 headingsignin">
                            <h2>WELCOME BACK</h2>
                        </div>
                        <div class="col-2"></div>
                        <div class="col-2"></div>
                        <div class="col-8 parasignin">
                            <p>Please sign in to continue!</p>
                        </div>
                        <div class="col-2"></div>
                    </div>
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-6" class="email_box">
                            <input id="Email" type="text" placeholder="Email/Phone number" class="box1signin">
                            <br>
                        </div>
                        <div class="col-2"></div>
                        <div class="col-2"></div>
                        <div class="col-2"></div>
                        <div class="col-6">
                            <input id="Password" type="password" placeholder="Password" class="box2signin">

                        </div>
                        <div class="col-2 box_eye"><i class="fa-regular fa-eye"
                                onclick="togglePasswordVisibility(this)"></i></div>
                        <div class="col-2"></div>
                    </div>
                    <div class="row">
                        <div class="col-4"></div>
                        <div class="col-4">
                            <button class="buttonsignin">Login</button>
                        </div>
                        <div class="col-4"></div>
                    </div>
                    <div class="row linepw">
                        <div class="col-2"></div>
                        <div class="col-4 checksignin">
                            <p><input type="checkbox" name="Save" id="saveLogin" onchange="saveLogin(this)"> Save
                                Login</p>
                        </div>
                        <div class="col-4 getpw">
                            <p>Forget Password</p>
                        </div>
                    </div>
                    <div class="row linksu">
                        <div class="col-2"></div>
                        <div class="col-8 linksu2">
                            <p>No account yet?</p>
                            <a href="../Signup/signup.html" class="p2">Sign up now!</a>
                        </div>
                        <div class="col-2"></div>
                    </div>
                </form>
            </div>
            <div class="col-6 img_signin">
                <img src="{{ asset('frontend/images/sign-in-up/c641ce7483c4728b418ba7d5d93a9ddc.jpg') }}" alt=""
                    class="w-100 img">
            </div>
        </div>
    </div>
</body>
<script src="frontend/js/login.js"></script>

</html>
