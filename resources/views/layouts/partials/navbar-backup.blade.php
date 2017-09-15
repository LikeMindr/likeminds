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
   <!-- <header id="header" class="lazy-load"> -->
      <!-- <nav>
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
               <span class="navbar-text">WELCOME
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

<br>
<br>
<br> -->
<!-- ================================================ -->
		<style>
         .lma-nav-color {
         background-color: #32fda9;
         }
      </style>
			<nav class="navbar navbar-default ">
            <div class="container-fluid lma-nav-color">
               <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header ">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
               </div>
               <!-- Collect the nav links, forms, and other content for toggling -->
               <div class="collapse navbar-collapse" id="defaultNavbar1">
                  <ul class="nav navbar-nav">
                     <li class=" navbar-btn "><a href="/"><img src="../assets/img/logoh.png" class="" style="width:133px; height:30px;"></a></li>
                     <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">EVENTS<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                           <li class="btn"><a href="/events">ALL EVENTS</a></li>
                           @if(Auth::check())
                           <li class="btn"><a href="/events/create">CREATE</a></li>
                           @endif
                        </ul>
                     </li>
                     <li class="dropdown">
                        <a href="btn" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">PROFILE<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                           @if(Auth::check())
													 <li class="btn"><a href="/accounts/{{Auth::id()}}/">VIEW</a></li>
													 <li class="btn"><a href="/accounts/{{Auth::id()}}/edit">EDIT</a></li>
                           @else
                           <li class="btn"><a href="/auth/login">LOGIN</a></li>
                           @endif
                        </ul>
                     </li>
                     <!-- <li><a href="masterCalendar.html">Opportunities<span class="sr-only">(current)</span></a></li> -->
                      @if(Auth::check())
                     <li ><a href="/auth/logout">LOG OUT</a></li>
                     <li class="btn"><a href="/accounts/{{Auth::id()}}/">WELCOME <?= Auth::user()->name; ?></a> </li>
                     @else
                     <li class="btn " ><a href="/auth/register">REGISTER</a></li>
                     <li class="btn" ><a href="/auth/login">LOGIN</a></li>
                     @endif
                  </ul>
               </div>

            </div>

         </nav>
   </header>
   <!--Header End-->

<!--
   <header>
   <div class="container-fluid custom-container">
      <div class="row no_row row-header">
         <div class="brand-be">
            <a href="index.html">
            <img class="logo-c active be_logo"  src="img/logo.png" alt="logo">
            <img class="logo-c be_logo" src="img/logo-green.png" alt="logo2">
            <img  class="logo-c be_logo" src="img/logo-orang.png" alt="logo3">
            <img class="logo-c be_logo" src="img/logo-red.png" alt="logo4">
            </a>
         </div>2
         <div class="header-menu-block">
            <button class="cmn-toggle-switch cmn-toggle-switch__htx"><span></span></button>
            <ul class="header-menu" id="one">
               <li>
                  <a href="">EVENTS</a>
                  <ul>
                     <li><a href="../events">VIEW ALL</a></li>
                     @if(Auth::check())
                     <li><a href="../events/create">CREATE</a></li>
                     @endif
                  </ul>
               </li>
               <li>
                  <a >PROFILE</a>
                  <ul>
                     @if(Auth::check())
                     <li><a href="/accounts/{{Auth::id()}}/">VIEW</a></li>
                     <li><a href="/accounts/{{Auth::id()}}/edit">EDIT</a></li>
                     @endif
                  </ul>
               </li>
               <li><a href="/auth/login">TEST LOGIN</a></li>
               @if(Auth::check())
               <li><a href="/auth/register">REGISTER</a></li>
               @endif
               <li><a href="/about">ABOUT</a></li>

               @if(Auth::check())
               <li id="ad-work-li"><a id="add-work-btn" class="btn color-1" href="">WELCOME < ?= Auth::user()->name; ?></a></li>
               @endif
            </ul>
         </div>
         <div class="login-header-block">
            <div class="login_block">
               @if(Auth::check())
               <a class="btn-login btn color-1 size-2 hover-2" href="/auth/logout" >
               LOG OUT</a>
               @else
               <a class="btn-login btn color-1 size-2 hover-2" href="/auth/login" >
               LOG IN</a>
               @endif
            </div>
         </div>
      </div>
   </div>
</header> -->
<!-- SCRIPTS	 -->
<!-- <script src="../assets/js/jquery-2.1.4.min.js"></script>
<script src="../assets/js/jquery-ui.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/idangerous.swiper.min.js"></script>
<script src="../assets/js/jquery.mixitup.js"></script>
<script src="../assets/js/jquery.viewportchecker.min.js"></script>
<script src="../assets/js/filters.js"></script>
<script src="../assets/js/global.js"></script> -->
