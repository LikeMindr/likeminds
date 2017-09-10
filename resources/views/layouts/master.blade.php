<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The place on the internet for people to
        find adventure and connect with their communities." />
    <meta name="keywords" content="Social Network, Social Media, Make Friends,
        Newsfeed, Profile Page, Make Friends, Like Minds" />
    <meta name="robots" content="index, follow" />
    @yield('title')
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/ionicons.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/assets/css/herohead.css">
	<link rel="stylesheet" href="/assets/css/idangerous.swiper.css">
    <link rel="stylesheet" href="/assets/css/style.css">
	<link rel="stylesheet" href="/assets/css/stylesheet.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Grand+Hotel|Montserrat" rel="stylesheet">

</head>
<body>
     <!--  ////////////////////////////////////////////////
                    Navigation
    //////////////////////////////////////////////// -->
 <header id="header" class="lazy-load">
    <nav>
        <ul class="desktop-menu" id="desktopMenu">

            <li>
                <a id="home" href="/">
                    <img src="/assets/img/logoh.png" class="yonsei-logo" style="width:103px; height:30px;">
                </a>
            </li>

            <li class="desktop-link">
                <a href="/auth/login">PROFILE
                </a>
                    <a class="caret" href="#" onclick="caretDropdownOne(); return false;">&or;</a>
                    <ul class="dropdown-menu" id="caretDropdownOne">
                        @if(Auth::check())
                         <li>
                            <a href= "/account/edit">EDIT
                            </a>
                        </li>
                         @else

                        <li>
                            <a href= "/auth/login">LOGIN
                            </a>
                        </li>

                        @endif

                    </ul>
            </li>

            <li class="desktop-link">
                <a href="/events">EVENTS
                </a>

            </li>

            @if(Auth::check())

            <li class="desktop-link">

                <a href="/events/create">CREATE
                </a>
            </li>

            <li class="desktop-link">
                <a href="/auth/logout">LOGOUT
                </a>
            </li>

            <ul class="desktopMenu hidden-xs desktop-link">
                     <span class="navbar-text">WELCOME <?= Auth::user()->name; ?></span>
            </ul>

            @else

            <li class="desktop-link">
                <a href="/auth/login">REGISTER/LOGIN
                </a>
            </li>

            @endif

            <li id="mobile-menu">
            <a id="home2" href="index.html">
             <img src="/assets/img/logoh.png" class="yonsei-logo" alt="Yonsei Univeristy Logo">

             </a>

            <a id="mobile-icon-container" href="#" onclick="responsiveMenu(); return false;">
            <img id="mobile-icon" src="https://eliya33.github.io/church/images/mobile-menu-icon-125x125.png" alt="Mobile Menu Icon">
            </a>
            </li>

    </ul>
  </nav>

        </ul>
        </nav>
    </header>
	<div id="space-for-nav"></div>
    @yield('content')
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<script src="/assets/js/jquery-2.1.4.min.js"></script>
	<script src="/assets/js/jquery-ui.min.js"></script>
	<script src="/assets/js/jquery.viewportchecker.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/jquery.appear.min.js"></script>
    <script src="/assets/js/jquery.incremental-counter.js"></script>
	<script src="/assets/js/jquery.mixitup.js"></script>
	<script src="/assets/js/idangerous.swiper.min.js"></script>
	<script src="/assets/js/filters.js"></script>
	<script src="/assets/js/global.js"></script>
    <script src="/assets/js/script.js"></script>

    <script src="/assets/js/herohead.js"></script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-106000460-1', 'auto');
        ga('send', 'pageview');
    </script>
    <script src="/assets/js/main.js"></script>
</body>
</html>
