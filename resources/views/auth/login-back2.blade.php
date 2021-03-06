<!-- @extends('layouts.master') -->
<!-- @section('title')
   <title> Like Minds At </title>
   @stop -->
<!-- @section('content') -->
<!DOCTYPE>
<meta name="viewport" content="width=500, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css"> -->
<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"> -->
<!-- <link rel="stylesheet" href="https://startbootstrap.com/templates/agency/font-awesome-4.1.0/css/font-awesome.min.css"> -->
<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="/assets/css/font-awesome.min.css">
<link rel="stylesheet" href="/assets/css/main.css">
<link rel="stylesheet" href="/assets/css/idangerous.swiper.css">
<link rel="stylesheet" href="/assets/css/style.css">
<link href="https://fonts.googleapis.com/css?family=Grand+Hotel|Montserrat" rel="stylesheet">
<link rel="stylesheet" href="/assets/css/font-awesome.min.css">
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://startbootstrap.com/templates/agency/font-awesome-4.1.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/assets/css/main.css">
<body>
   <div class="log" id="lp-register">
      @include('layouts.partials.navbar')
      <div class="container wrapper">
         <div class="row">
            <div class="col-sm-5">
               <div class="intro-texts">
                  <h1 class="text-white">Make Cool Friends !!!</h1>
                  <p>LIKE MINDS . AT is a social network that can be used to connect
                     people. Why do things alone when you can go with like minded friends! <br />
               </div>
            </div>
            <div class="col-sm-6 col-sm-offset-1" class="center">
               <div class="reg-form-container" class="center">
                  <!-- Register/Login Tabs-->
                  <style>
                     #inner {
                     display: table;
                     margin: 0 auto;
                     }
                     .center{
                     margin-top: 50%;
                     text-align:center;
                     }
                  </style>
                  <div id="inner" class="center">
                     <form method="POST" action="/auth/login" class="form-horizontal">
                        {!! csrf_field() !!}
                        <section class="form-group">
                           <label for="email" class="col-lg-3 control-label">Email</label>
                           <div class="col-lg-10">
                              <input type="email" name="email" class="form-control" id="email"
                                 value="{{ old('email') }}" autofocus>
                           </div>
                        </section>
                        <section class="form-group">
                           <label for="password" class="col-lg-3 control-label">Password</label>
                           <div class="col-lg-10">
                              <input type="password" name="password" id="password" class="form-control">
                           </div>
                        </section>
                        <section class="form-group">
                           <div class="col-lg-10 col-lg-offset-2">
                              <button type="submit" class="btn btn-primary right">Login</button>
                           </div>
                        </section>
                     </form>
                     <a href="/auth/register">Don't have an account? Register!</a>
                     <!-- button  -->
                     <!--=====================facebook code==============-->

                      
                     <!-- <div class="fb-login-button" data-width="300" data-max-rows="1" data-size="large" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="true"></div> -->
                     <!--=====================facebook code==============-->
                     <!--  ====================google=============================-->
                     <!-- <script type="text/javascript">
                        function onSignIn(googleUser) {
                          var profile = googleUser.getBasicProfile();
                          console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
                          console.log('Name: ' + profile.getName());
                          console.log('Image URL: ' + profile.getImageUrl());
                          console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
                        }

                        </script> -->
                     <!--  ==========google button==============-->
                     <!-- <div class="g-signin2" data-onsuccess="onSignIn"></div> -->
                     <!--  ==========google button==============-->
                     <!--  ====================google=============================-->
                     <!--Registration Form Contents-->
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-sm-6 col-sm-offset-6">
                  <!--Social Icons-->
               </div>
            </div>
         </div>
      </div>
      @include('layouts.partials.footer')
   </div>
   <!--preloader-->
   <div id="spinner-wrapper">
      <div class="spinner"></div>
   </div>
</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<!-- jQuery Version 1.11.0 -->
<script src="https://raw.githubusercontent.com/IronSummitMedia/startbootstrap/gh-pages/templates/agency/js/jquery-1.11.0.js"></script>
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
<!-- @stop -->
