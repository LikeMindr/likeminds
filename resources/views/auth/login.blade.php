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
    <div id="lp-register">
    <div class="container wrapper">
       <div class="row">
          <div class="col-sm-5">
             <div class="intro-texts">
                <h1 class="text-white">Make Cool Friends !!!</h1>
                <p>LIKE MINDS . AT is a social network that can be used to connect people. Why do things alone when you can go with like minded friends! <br /> <br />Why are you waiting for? Sign up now.</p>
                <button class="btn btn-primary">Learn More</button>
             </div>
          </div>
          <div class="col-sm-6 col-sm-offset-1">

              <div class="reg-form-container">
                <!-- Register/Login Tabs-->

                  <style>
                      #inner {
display: table;
margin: 0 auto;
}</style>
                  <div id="inner">
               <div id="fb-root" ></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=781692095343244";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
                  <div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="true" style="width:100%"></div>
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
