<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>error</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/errorpage.css')}}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4 margin text-center"><h1><b>Oops!</b></h1></div>
            <div class="col-4"></div>
            <div class="col-4"></div>
            <div class="col-4 error text-center">
                <img src="{{('')}}" class="img-fluid imageerror">
            </div>
            <div class="col-4"></div>
            <div class="col-4"></div>
            <div class="col-4 text-center">
                <p2>Sorry, the page you're looking for doesn't extist.</p2> <br>
                <p2>If you think something is broken, report a problem.</p2>
            </div>
            <div class="col-4"></div>
            <div class="col-5"></div>
            <div class="col-2" style="margin-top:20px">
                <div>
                    <button class="btn_search">Return Homepage</button>
                </div>
            </div>
            <div class="col-5"></div>
    </div>
    
</body>
</html>