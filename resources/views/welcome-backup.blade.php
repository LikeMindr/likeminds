@extends('layouts.master')
@section('title')
<title> Like Minds At </title>
@stop
@section('content')
<!--preloader-->
<div id="spinner-wrapper">
   <div class="spinner"></div>
</div>
<!-- Top Banner
   ================================================= -->
<section id="banner">
   <div class="homepage-hero-module">
    <div class="header-hero">
      <div class="fondo-imag">
         <video class='flexible' autoplay="" loop='' name="media">
            <source src="/assets/video/sadrone5.mp4" type="video/mp4">
         </video>
      </div>
      </div>
   </div>
   <div class="container">
      <!-- Sign Up Form
         ================================================= -->
      <div class="sign-up-form">
         <a href="index.html" class="logo"><img src="/assets/img/logov.png" alt="Friend Finder" style="width:65%"></a>
         <h1 class="text-white">Make new Friends</h2>
         <div class="line-divider"></div>
         <div class="form-wrapper">
            <p class="signup-text">Register now and meet like-minded people in your area</p>
            <!-- <form action="#">
               <fieldset class="form-group">
               	<input type="text" class="form-control" id="example-name" placeholder="Enter name">
               </fieldset>
               <fieldset class="form-group">
               	<input type="email" class="form-control" id="example-email" placeholder="Enter email">
               </fieldset>
               <fieldset class="form-group">
               	<input type="password" class="form-control" id="example-password" placeholder="Enter a password">
               </fieldset>
               </form> -->
            <!-- <p>*By signing up you agree to the terms and conditions</p>
            <button class="btn-secondary">Register</button> -->
         </div>
         <!-- <button class="btn-secondary">Login</button> -->
         <img class="form-shadow" src="/assets/img/bottom-shadow.png" alt="" />
      </div>
      <!-- Sign Up Form End -->
      <svg class="arrows hidden-xs hidden-sm">
         <path class="a1" d="M0 0 L30 32 L60 0"></path>
         <path class="a2" d="M0 20 L30 52 L60 20"></path>
         <path class="a3" d="M0 40 L30 72 L60 40"></path>
      </svg>
   </div>
</section>
<!-- Features Section
   ================================================= -->
<section id="features">
   <div class="container wrapper">
     <br>
     <br>
      <h1 class="section-title slideDown">like minds</h1>
      <div class="row slideUp">
        <div class="feature-item col-md-2 col-sm-6 col-xs-6 col-md-offset-2">
						<a href="events/"><div class="feature-icon"><i class="icon ion-person-add"></i></div></a>
						<h3>Make Friends</h3>
					</div>
         <div class="feature-item col-md-2 col-sm-6 col-xs-6">
            <a href="events/create"><div class="feature-icon"><i class="icon ion-images"></i></div></a>
            <h3>Create Events </h3>
         </div>
         <div class="feature-item col-md-2 col-sm-6 col-xs-6">
            <a href="events/"><div class="feature-icon"><i class="con ion-chatbox-working"></i></div></a>
            <h3>Meet Like-Minded People</h3>
         </div>
         <div class="feature-item col-md-2 col-sm-6 col-xs-6">
            <a href="events/"><div class="feature-icon"><i class="icon ion-compose"></i></div></a>
            <h3>Connect</h3>
         </div>
      </div>
      <h2 class="sub-title">you're not the only one</h2>
      <div id="incremental-counter" data-value="101242"></div>
      <p>People Already Registered</p>
      <img src="/assets/img/face-map.png" alt="" class="img-responsive face-map slideUp hidden-sm hidden-xs" />
   </div>
</section>
<!-- Download Section
   ================================================= -->
<section id="app-download">
   <div class="container wrapper">
      <h2 class="sub-title">stay connected anytime, anywhere</h2>
      <img src="/assets/img/iPhone.png" alt="iPhone" class="img-responsive" />
   </div>
</section>
<!-- Image Divider
   ================================================= -->
<div class="img-divider hidden-sm hidden-xs"></div>
<!-- Facts Section
   ================================================= -->
<section id="site-facts">
   <div class="container wrapper">
      <div class="circle">
         <ul class="facts-list">
            <li>
               <div class="fact-icon"><i class="icon ion-ios-people-outline"></i></div>
               <h3 class="text-white">1,01,242</h3>
               <p>Users registered</p>
            </li>
            <li>
               <div class="fact-icon"><i class="icon ion-images"></i></div>
               <h3 class="text-white">21,01,242</h3>
               <p>Events published</p>
            </li>
            <li>
               <div class="fact-icon"><i class="icon ion-checkmark-round"></i></div>
               <h3 class="text-white">41,242</h3>
               <p>People online</p>
            </li>
         </ul>
      </div>
   </div>
</section>
<br>
<br>
<br>
<br>
<br>
<!-- <! Live Feed Section
   ================================================= -->
<!-- <section id="live-feed">
   <div class="container wrapper">
      <h1 class="section-title slideDown">live feed</h1>
      <ul class="online-users list-inline slideUp">
         <li><a href="#" title="Alexis Clark"><img src="http://placehold.it/300x300" alt="" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
         <li><a href="#" title="James Carter"><img src="http://placehold.it/300x300" alt="" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
         <li><a href="#" title="Robert Cook"><img src="http://placehold.it/300x300" alt="" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
         <li><a href="#" title="Richard Bell"><img src="http://placehold.it/300x300" alt="" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
         <li><a href="#" title="Anna Young"><img src="http://placehold.it/300x300" alt="" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
         <li><a href="#" title="Julia Cox"><img src="http://placehold.it/300x300" alt="" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
      </ul>
      <h2 class="sub-title">see what’s happening now</h2>
      <div class="row">
         <div class="col-md-4 col-sm-6 col-md-offset-2">
            <div class="feed-item">
               <img src="http://placehold.it/300x300" alt="user" class="img-responsive profile-photo-sm" />
               <div class="live-activity">
                  <p><a href="#" class="profile-link">Sarah</a> just posted a photo from Moscow</p>
                  <p class="text-muted">20 Secs ago</p>
               </div>
            </div>
            <div class="feed-item">
               <img src="http://placehold.it/300x300" alt="user" class="img-responsive profile-photo-sm" />
               <div class="live-activity">
                  <p><a href="#" class="profile-link">John</a> Published a post from Sydney</p>
                  <p class="text-muted">1 min ago</p>
               </div>
            </div>
            <div class="feed-item">
               <img src="http://placehold.it/300x300" alt="user" class="img-responsive profile-photo-sm" />
               <div class="live-activity">
                  <p><a href="#" class="profile-link">Julia</a> Updated her status from London</p>
                  <p class="text-muted">5 mins ago</p>
               </div>
            </div>
            <div class="feed-item">
               <img src="http://placehold.it/300x300" alt="user" class="img-responsive profile-photo-sm" />
               <div class="live-activity">
                  <p><a href="#" class="profile-link">Sophia</a> Share a photo from Virginia</p>
                  <p class="text-muted">10 mins ago</p>
               </div>
            </div>
            <div class="feed-item">
               <img src="http://placehold.it/300x300" alt="user" class="img-responsive profile-photo-sm" />
               <div class="live-activity">
                  <p><a href="#" class="profile-link">Linda</a> just posted a photo from Toronto</p>
                  <p class="text-muted">20 mins ago</p>
               </div>
            </div>
         </div>
         <div class="col-md-4 col-sm-6">
            <div class="feed-item">
               <img src="http://placehold.it/300x300" alt="user" class="img-responsive profile-photo-sm" />
               <div class="live-activity">
                  <p><a href="#" class="profile-link">Nora</a> Shared an article from Ohio</p>
                  <p class="text-muted">22 mins ago</p>
               </div>
            </div>
            <div class="feed-item">
               <img src="http://placehold.it/300x300" alt="user" class="img-responsive profile-photo-sm" />
               <div class="live-activity">
                  <p><a href="#" class="profile-link">Addison</a> Created a poll from Barcelona</p>
                  <p class="text-muted">23 mins ago</p>
               </div>
            </div>
            <div class="feed-item">
               <img src="http://placehold.it/300x300" alt="user" class="img-responsive profile-photo-sm" />
               <div class="live-activity">
                  <p><a href="#" class="profile-link">Diana</a> Posted a video from Captown</p>
                  <p class="text-muted">27 mins ago</p>
               </div>
            </div>
            <div class="feed-item">
               <img src="http://placehold.it/300x300" alt="user" class="img-responsive profile-photo-sm" />
               <div class="live-activity">
                  <p><a href="#" class="profile-link">Sarah</a> Shared friend's post from Moscow</p>
                  <p class="text-muted">30 mins ago</p>
               </div>
            </div>
            <div class="feed-item">
               <img src="http://placehold.it/300x300" alt="user" class="img-responsive profile-photo-sm" />
               <div class="live-activity">
                  <p><a href="#" class="profile-link">Emma</a> Started a new job at Torronto</p>
                  <p class="text-muted">33 mins ago</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>  -->
<!-- Footer
   ================================================= -->
<!-- <footer id="footer">
   <div class="container">
      <div class="row">
         <div class="footer-wrapper">
            <div class="col-md-3 col-sm-3">
               <a href=""><img src="/assets/img/logohd.png" alt="" class="footer-logo" /></a>
               <ul class="list-inline social-icons">
                  <li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
                  <li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
                  <li><a href="#"><i class="icon ion-social-googleplus"></i></a></li>
                  <li><a href="#"><i class="icon ion-social-pinterest"></i></a></li>
                  <li><a href="#"><i class="icon ion-social-linkedin"></i></a></li>
               </ul>
            </div>
            <div class="col-md-2 col-sm-2">
               <h6>For individuals</h6>
               <ul class="footer-links">
                  <li><a href="">Signup</a></li>
                  <li><a href="">login</a></li>
                  <li><a href="">Explore</a></li>
                  <li><a href="">Finder app</a></li>
                  <li><a href="">Features</a></li>
                  <li><a href="">Language settings</a></li>
               </ul>
            </div>
            <div class="col-md-2 col-sm-2">
               <h6>For businesses</h6>
               <ul class="footer-links">
                  <li><a href="">Business signup</a></li>
                  <li><a href="">Business login</a></li>
                  <li><a href="">Benefits</a></li>
                  <li><a href="">Resources</a></li>
                  <li><a href="">Advertise</a></li>
                  <li><a href="">Setup</a></li>
               </ul>
            </div>
            <div class="col-md-2 col-sm-2">
               <h6>About</h6>
               <ul class="footer-links">
                  <li><a href="">About us</a></li>
                  <li><a href="">Contact us</a></li>
                  <li><a href="">Privacy Policy</a></li>
                  <li><a href="">Terms</a></li>
                  <li><a href="">Help</a></li>
               </ul>
            </div>
            <div class="col-md-3 col-sm-3">
               <h6>Contact Us</h6>
               <ul class="contact">
                  <li><i class="icon ion-ios-telephone-outline"></i>+1 (234) 222 0754</li>
                  <li><i class="icon ion-ios-email-outline"></i>info@thunder-team.com</li>
                  <li><i class="icon ion-ios-location-outline"></i>228 Park Ave S NY, USA</li>
               </ul>
            </div>
         </div>
      </div>
   </div> -->
   <!-- <div class="copyright">
      <p>copyright @likeminds.dev 2016. All rights reserved</p>
   </div>
</footer> -->
@stop
