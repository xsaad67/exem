<!DOCTYPE HTML>
<html lang="en-US" prefix="og: http://ogp.me/ns# og: http://ogp.me/ns#">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="_token" content="{{csrf_token()}}">
    <meta property="og:image" content="https://media1.giphy.com/media/2dhqGEHVWNHfJM6TpL/giphy.webp" />
    <meta property="og:author" content="hello" />
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
  
     <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat%3A300%2C300i%2C400%2C400i%2C500%2C500i%2C600%2C600i%2C700%2C700i%2C800%2C800i%2C900%2C900i&#038;subset=latin%2Clatin-ext&#038;ver=2.5.7' type='text/css' media='all' />
    <link rel='stylesheet' href='{{asset("css/style.css")}}' type='text/css' media='all' />
    <link rel ="stylesheet" href="{{asset('css/main.css')}}" />
    <link rel="stylesheet" href="{{asset('css/bootstrap4.min.css')}}">
    
    <link rel='stylesheet' href='{{asset("css/social-share.min.css")}}' type='text/css' media='all' />

    {{-- <link rel="stylesheet" type="text/css" href="{{asset('css/unused.min.css')}}"> --}}

    <style>
  
    .dropdown-menu {display: block;visibility: hidden;opacity:0;transform: translateY(50px);transition:.5s ease all;}
.dropdown-menu.show {display: block;visibility: visible;opacity:1;transform: translateY(0px);transition:.5s ease all;}
    </style>
  @yield('css')
</head>

<body data-rsssl=1 class="home-page bp-legacy home blog two-sidebar sidebar-1_3-1_4 right-sidebar has-full-post-button badge-face-text badges-outside-right bb-stretched-view zombify-light no-js">
    
    @include('layouts.nav')


     <div id="page-wrapper" class="page-wrapper">
        
        @include('layouts.main-menu')

        <div class="bb-show-mobile-header bb-sticky bb-sticky-nav sticky-classic">
            <header class="bb-header header-mobile h-style h-style-center large bb-sticky-el">
                <div class="container header-row">
                    <div class="header-row-layout">
                        <div class="header-col header-l">
                            <a id="menu-button" class="header-item bb-header-icon menu-button pos-left" role="button" href="#"> <i class="bb-ui-icon-burger-menu"></i> </a>
                        </div>
                        <div class="header-col header-c">
                            <div class="branding">
                                <p class="site-title">
                                    <a href="https://boombox.px-lab.com/another-gag/"> 
                                        <img src="https://boombox.px-lab.com/another-gag/wp-content/uploads/sites/3/2017/12/gag_logo-68x66.png?x46754" alt="BoomBox: Another GAG" width="38" height="33" srcset="https://boombox.px-lab.com/another-gag/wp-content/uploads/sites/3/2017/12/gag_logo-68x66.png 2x,https://boombox.px-lab.com/another-gag/wp-content/uploads/sites/3/2017/12/gag_logo-68x66.png 1x" /> 
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="header-col header-r">
                            <div class="header-item bb-header-user-box bb-toggle pos-right">
                                <a class="bb-header-icon js-authentication" role="button" data-toggle=".bb-header-user-box .menu" href="#sign-in"> <i class="bb-icon bb-ui-icon-user"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <main id="main" role="main">
            {{-- @include('layouts.bottom-menu') --}}

            @yield('content')
          
        </main>
        <div id="sticky-border"></div>
        <div class="light-modal-bg"></div>

       {{--  <div id="sign-in" class="light-modal sign-in authentication light-modal-active"> 
            <a href="#" class="modal-close"><i class="bb-icon bb-ui-icon-close"></i></a>
            <div class="modal-body wrapper">
                <div class="content-wrapper">
                    <header class="content-header">
                        <h3 class="title">Log In</h3> 
                    </header>
                    <div class="content-body">
                        <div class="wp-social-login-widget">
                            <div class="wp-social-login-connect-with"></div>
                            <div class="wp-social-login-provider-list">
                                <a rel="nofollow" href="" data-provider="Twitter" class="button _twitter wp-social-login-provider wp-social-login-provider-twitter"> <i class="bb-icon bb-ui-icon-twitter"></i> Twitter </a>

                                <a rel="nofollow" href="" data-provider="Instagram" class="button _instagram wp-social-login-provider wp-social-login-provider-instagram"> <i class="bb-icon bb-ui-icon-instagram"></i> Instagram </a>

                            </div>
                            <div class="wp-social-login-widget-clearing"></div>
                        </div>
                        <p class="status-msg bb-txt-msg"></p>
                      
                            <div class="input-field">
                                <input type="text" name="email" id="email" class="required" placeholder="Your username or e-mail" aria-required="true">
                            </div>
                            <div class="input-field">
                                <input type="password" name="password" id="password" class="required" placeholder="Your password" aria-required="true">
                            </div>
                            <div class="input-field row-remember-me bb-row-check-label">
                                <input type="checkbox" name="rememberme" id="rememberme" class="form-input">
                                <label for="rememberme" class="form-label">Remember me</label>
                            </div>
                            
                            <div class="input-field">
                                <button class="bb-btn login-btn" type="button" style="background-color: #09f; color:#fff;">Log In</button>
                            </div>
                            <div class="input-field row-forgot-password"> 
                                <a class="forgot-password-link js-authentication" href="#forgot-password">Forgot password?</a>
                            </div>
                        
                    </div>
                </div>
            </div>
        </div> --}}


        @include('layouts.footer')
        <span id="go-top" class="go-top">
            <i class="bb-icon bb-ui-icon-arrow-up"></i>
        </span>
    </div>


    <script type='text/javascript' src='{{asset("js/jquery.js")}}'></script>
    <script type='text/javascript' src='{{asset("js/jquery-migrate.min.js")}}'></script>
   
    {{-- <script type='text/javascript' src='{{asset("js/widget-core.min.js")}}'></script> --}}
    
    <script type='text/javascript' src='{{asset("js/jquery-scroll.min.js")}}'></script>

    <script type='text/javascript' src='{{asset("js/popper.min.js")}}'></script>
    <script type='text/javascript' src='{{asset("js/bootstrap.min.js")}}'></script>
 
  
    <script type='text/javascript'>
        var boombox_global_vars = {
            "boombox_gif_event": "scroll",
            "single_post_animated_hyena_gifs_excluded_js_selectors": [],
            "videoOptions": {
                "playerControls": "mute",
                "autoPlay": "scroll",
                "sound": "with_sound",
                "clickEvent": "mute_unmute",
                "loop": 1
            }
        };
    </script>
    <script type='text/javascript' src='{{asset("js/script.min.js")}}'></script>
    
    @yield('footer')
</body>

</html>