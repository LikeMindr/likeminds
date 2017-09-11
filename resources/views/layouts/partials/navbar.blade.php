<!-- <!DOCTYPE html>
<html lang="en"> -->
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="The place on the internet for people to find adventure and connect with their communities." />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page, Make Friends, Like Minds" />
		<meta name="robots" content="index, follow" />
		<title>Like Minds | You can't be the only one</title>

    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/ionicons.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />

    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Lobster+Two|Montserrat" rel="stylesheet">

   <!--  font-family: 'Lobster Two', cursive;
    font-family: 'Montserrat', sans-serif; -->

    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="images/fav.png"/>
	</head>
	<body>

    <!--preloader-->
    <div id="spinner-wrapper">
      <div class="spinner"></div>
    </div>

    <!-- Header
    ================================================= -->
		<header id="header" class="lazy-load">
      <nav class="navbar navbar-default navbar-fixed-top menu">
        <div class="container">

          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index-register.html"><img src="images/logo.png" alt="logo" /></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-menu">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home
                </a>
              </li>

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                Profile
                  <ul class="dropdown-menu page-list">
                    <?php if (Auth::check()) : ?>
                    <li>
                      <a href="/users/account?id=<?= Auth::id(); ?>">Edit
                      </a>
                    </li>
                </a>
                  </ul>
              </li>

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                Events

                  <ul class="dropdown-menu page-list">
                   <?php if (Auth::check()) : ?>
                    <li>
                      <a href="/users/account?id=<?= Auth::id(); ?>">My Events
                      </a>
                    </li>
                </a>
                  </ul>
              </li>

               <?php if (Auth::check()) : ?>
               <li class="dropdown">
                <a href="/users/account?id=<?= Auth::id(); ?>" class="dropdown-toggle pages" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                Create
                </a>
              </li>

              <li class="dropdown">
                <a href="#" class="dropdown-toggle pages" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sign-Up
                </a>
              </li>

              <li class="dropdown">
                <a href="#" class="dropdown-toggle pages" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login
                </a>

              <li class="dropdown"><a href="contact.html">Contact</a>
              </li>
              <?php if (Auth::check()) : ?>
              <li class="dropdown">
                <a href="/users/account?id=<?= Auth::id(); ?>"  class="dropdown-toggle pages" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Logout
                </a>
            </ul>
            <form class="navbar-form navbar-right hidden-sm">
              <div class="form-group">
                <i class="icon ion-android-search"></i>
                <input type="text" class="form-control" placeholder="Search friends, photos, videos">
              </div>
            </form>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav>
    </header>
    <!--Header End-->
