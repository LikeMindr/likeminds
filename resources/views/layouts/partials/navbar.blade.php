<!-- <!DOCTYPE html>
   <html lang="en"> -->
<!-- <head>
   <meta http-equiv="content-type" content="text/html; charset=utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="The place on the internet for people to find adventure and connect with their communities." />
   <meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page, Make Friends, Like Minds" />
   <meta name="robots" content="index, follow" />
   <title>Like Minds | You can't be the only one</title>
   <! Stylesheets
      ================================================= -->
   <!-- <link rel="stylesheet" href="css/bootstrap.min.css" />
   <link rel="stylesheet" href="css/style.css" />
   <link rel="stylesheet" href="css/ionicons.min.css" />
   <link rel="stylesheet" href="css/font-awesome.min.css" />
   <!-Google Font-->
   <!-- <link href="https://fonts.googleapis.com/css?family=Lobster+Two|Montserrat" rel="stylesheet">
   <!-  font-family: 'Lobster Two', cursive;
      font-family: 'Montserrat', sans-serif; -->
   <!--Favicon-->
   <!-- <link rel="shortcut icon" type="image/png" href="images/fav.png"/>
</head>
<body> -->
   <!--preloader-->
   <!-- <div id="spinner-wrapper">
      <div class="spinner"></div>
   </div> -->
   <!-- Header
      ================================================= -->
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
               <a href="/auth/login" class="login-buttons">PROFILE
               </a>
               <a class="caret login-buttons" href="#" onclick="caretDropdownOne(); return false;">&or;</a>
               <ul class="dropdown-menu" id="caretDropdownOne">
                  @if(Auth::check())
                  <li>
                     <a href= "/account/edit" class="login-buttons">EDIT
                     </a>
                  </li>
                  @else
                  <li>
                     <a href= "/auth/login" class="login-buttons">LOGIN
                     </a>
                  </li>
                  @endif
               </ul>
            </li>
            <li class="desktop-link">
               <a href="/events" class="login-buttons">EVENTS
               </a>
            </li>
            @if(Auth::check())
            <li class="desktop-link">
               <a href="/events/create" class="login-buttons">CREATE
               </a>
            </li>
            <li class="desktop-link">
               <a href="/auth/logout" class="login-buttons">LOGOUT
               </a>
            </li>
            <ul class="desktopMenu hidden-xs desktop-link">
               <span class="navbar-text">WELCOME <?= Auth::user()->name; ?></span>
            </ul>
            @else
            <li class="desktop-link">
               <a href="/auth/login" class="login-buttons">REGISTER/LOGIN
               </a>
            </li>
            @endif
            <li id="mobile-menu">
               <a id="home2" href="index.html">
               <img src="/assets/img/logoh.png" class="yonsei-logo" alt="Yonsei Univeristy Logo">
               </a>
               <a id="mobile-icon-container" class="login-buttons" href="#" onclick="responsiveMenu(); return false;">
               <img id="mobile-icon" src="https://eliya33.github.io/church/images/mobile-menu-icon-125x125.png" alt="Mobile Menu Icon">
               </a>
            </li>
         </ul>
      </nav>
   </header>
   <!--Header End-->
