<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOG_IN</title>
    <link rel="stylesheet" href="{{('public/frontend/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{('public/frontend/css/all.min.css')}}">
    <link rel="stylesheet" href="{{('public/frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{('public/frontend/css/login.css')}}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6 formsignin">
                <form action="">
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
                        <div class="col-8">
                            <input type="text" placeholder="Email/Phone number" class="box1signin">
                        </div>
                        <div class="col-2"></div>
                        <div class="col-2"></div>
                        <div class="col-8">
                            <input type="text" placeholder="Password" class="box2signin">
                        </div>
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
                            <p><input type="checkbox" name="Save"> Save Login</p>
                        </div>
                        <div class="col-4 getpw">
                            <p>Forget Password</p>
                        </div>
                    </div>
                    <div class="row linksu">
                        <div class="col-2"></div>
                        <div class="col-8 linksu2">
                            <p>No account yet?</p>
                            <p class="p2">Sign up now!</p>
                        </div>
                        <div class="col-2"></div>
                    </div>
                </form>
            </div>
            <div class="col-6 img_signin">
                <img src="{{('public/frontend/images/sign-in-up/c641ce7483c4728b418ba7d5d93a9ddc.jpg')}}" alt="" class="w-100">
            </div>
        </div>
    </div>
</body>
</html>