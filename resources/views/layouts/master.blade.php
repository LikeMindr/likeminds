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