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
   <!-- <meta name="google-signin-client_id" content="870368124925-17i31m6r9tehnf9tua7e3fdmut59cojh.apps.googleusercontent.com">
   <script src="https://apis.google.com/js/platform.js" async defer></script> -->
  <!--  ====================google=============================-->
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
      <div class="col-sm-6 col-sm-offset-1" class="center">
         <div class="reg-form-container" class="center">
            <!-- Register/Login Tabs-->
            <!-- <div class="reg-options"> -->
                            <!-- <ul class="nav nav-tabs">
                              <!- <li class="active"><a href="#register" data-toggle="tab">Register</a></li>
                              <li><a href="#login" data-toggle="tab">Login</a></li> -->
                            <!-- </ul><!-Tabs End-->
                          <!-- </div> -->
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

               <!--Registration Form Contents-->
<form method="POST" action="/auth/register" class="form-horizontal">
	<fieldset>
    {!! csrf_field() !!}
	<section class="form-group">
		<div>
			<label for="name" class="col-lg-3 control-label">Username</label>
			<div class="col-lg-10">
				<input type="text" name="name" class="form-control" id="name"
						value="{{ old('name') }}" autofocus>
			</div>
		</div>
	</section>
	<section class="form-group">
			<label for="email" class="col-lg-3 control-label">Email</label>
		<div class="col-lg-10">
			<input type="email" name="email" class="form-control" id="email"
					value="{{ old('email') }}">
		</div>
	</section>
	<section class="form-group">
			<label for="password" class="col-lg-3 control-label">Password</label>
		<div class="col-lg-10">
			<input type="password" name="password" class="form-control" id="password">
		</div>
	</section>
	<section class="form-group">
			<label for="confirm_password" class="col-lg-3 control-label">Confirm Password</label>
		<div class="col-lg-10">
			<input type="password" name="password_confirmation" class="form-control"
					id="password_confirmation">
		</div>
	</section>
	<section class="form-group">
		<div class="col-lg-10 col-lg-offset-3">
			<button type="submit" class="btn btn-primary right">Register</button>
		</div>
	</section>
	</fieldset>
</form>
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
