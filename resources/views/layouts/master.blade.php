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
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/ionicons.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
        <link rel="stylesheet" href="/assets/css/herohead.css">
    <link rel="stylesheet" href="/assets/css/main.css">

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
                    <img src="/assets/img/logoh.png" class="yonsei-logo">
                </a>
            </li>

            <li class="desktop-link">
                <a href="/home">Profile
                </a>
                    <ul>
                        @if(Auth::check())
                         <li>
                            <a href= "account/edit"> Edit 
                            </a> 
                        </li>
                         @else

                        <li>
                            <a href= "/login"> Login
                            </a> 
                        </li>

                        @endif
                          
                    </ul>
            </li>

            <li class="desktop-link">
                <a href="/events/show">Events 
                </a>
                              
            </li>

            @if(Auth::check())

            <li class="desktop-link">

                <a href="/events/create"> Create
                </a>
            </li>
            
            <li class="desktop-link">
                <a href="/auth/logout">Logout
                </a>
            </li>

            <ul class="desktopMenu hidden-xs desktop-link">
                     <span class="navbar-text">WELCOME <?= Auth::user()->name; ?></span>
            </ul>

            @else
            
            <li class="desktop-link">
                <a href="/auth/login">Register/Login
                </a>
            </li>

            @endif
                        
            

                <li id="mobile-menu">
                    <a id="home2" href="index.html">
                        <img src="broccolilogo.png" class="yonsei-logo">
                    </a>

              
                </a>

                <a id="mobile-icon-container" href="#" onclick="responsiveMenu(); return false;">
                    <img id="mobile-icon" src="https://eliya33.github.io/church/images/mobile-menu-icon-125x125.png" alt="Mobile Menu Icon">
                </a>
        
            </li>

        </ul>
        </nav>
    </header>

    @yield('content')
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/jquery.appear.min.js"></script>
    <script src="/assets/js/jquery.incremental-counter.js"></script>
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