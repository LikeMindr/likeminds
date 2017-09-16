@extends('layouts.master')
@section('title')
<title> Like Minds At </title>
@stop
@section('content')
<!-- Header
   ================================================= -->
<!--Header End-->
<!-- Landing Page Contents
   ================================================= -->
<!--  ====================google=============================-->
   <meta name="google-signin-client_id" content="870368124925-17i31m6r9tehnf9tua7e3fdmut59cojh.apps.googleusercontent.com">
   <script src="https://apis.google.com/js/platform.js" async defer></script>
  <!--  ====================google=============================-->
<div id="lp-register">
<div class="container wrapper">
   <div class="row">
      <div class="col-sm-5">
         <div class="intro-texts">
            <h1 class="text-white">Make Cool Friends !!!</h1>
            <p>LIKE MINDS . AT is a social network that can be used to connect people. Why do things alone when you can go with like minded friends! <br /> <br />Why are you waiting for? Sign up now.</p>
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

               <!-- button  -->


                  <!--=====================facebook code==============-->
                  <!-- <div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=214631275274336";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script> -->

                                 <!--
                                    Below we include the Login Button social plugin. This button uses
                                    the JavaScript SDK to present a graphical Login button that triggers
                                    the FB.login() function when clicked.
                                    -->
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
<!--preloader-->
<div id="spinner-wrapper">
   <div class="spinner"></div>
</div>
@stop
