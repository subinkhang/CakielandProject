<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/errorpage.css') }}">
    <link href="{{asset ('https://fonts.googleapis.com/css?family=opensans:500') }}" rel="stylesheet">
</head>

<body>
    <div id="clouds">
        <div class="cloud x1"></div>
        <div class="cloud x1_5"></div>
        <div class="cloud x2"></div>
        <div class="cloud x3"></div>
        <div class="cloud x4"></div>
        <div class="cloud x5"></div>
    </div>
    <div class='c'>
        <div class='_404'>404</div>
        <hr>
      <div style="margin-top: 50px;"></div>
        <a class='btn' href="{{ url('/dashboard') }}">BACK TO HOMEPAGE</a>
    </div>
</body>


</html>
