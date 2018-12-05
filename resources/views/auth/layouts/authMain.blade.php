<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="/css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="/css/iofrm-theme6.css">
    @yield('css')
</head>
<body>
<div class="form-body">
    <div class="website-logo">
        <a href="{{url('/')}}">
            <div class="logo">
                <img class="logo-size" src="/images/graphic2.svg" alt="">
            </div>
        </a>
    </div>
    <div class="row">
        <div class="img-holder">
            <div class="bg"></div>
            <div class="info-holder">
                <img src="/images/graphic2.svg" alt="">
            </div>
        </div>
		@yield('content')
	</div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
@yield('footer')
</body>

</html>