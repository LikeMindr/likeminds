@extends('layouts.master')
@section('title')
<title> Like Minds At </title>
@stop
@section('content')

<!DOCTYPE html>
<html>
	<head>
		<title>NGRNetwork</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="shortcut icon" href="img/favicon.png">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="style/bootstrap.min.css">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="style/icon.css">
		<link rel="stylesheet" href="style/loader.css">
		<link rel="stylesheet" href="style/idangerous.swiper.css">
		<link rel="stylesheet" href="style/stylesheet.css">
		<!--[if lt IE 10]>
			<link rel="stylesheet" type="text/css" href="style/ie-9.css" />

		<![endif]-->

		<!--[if lt IE 9]>
		    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>
	<body data-spy="scroll" data-target="blog-detail-2.htmlscrollspy">

	<!-- THE LOADER -->



	<div class="be-loader">
	    	<div class="spinner">
				<img src="img/logo-loader.png"  alt="">
				<p class="circle">
				  <span class="ouro">
				    <span class="left"><span class="anim"></span></span>
				    <span class="right"><span class="anim"></span></span>
				  </span>
				</p>
			</div>

	    </div>



	<!-- MAIN CONTENT -->
	<div id="profile-page-bg">
		<div class="container be-detail-container">
			<div class="row">
				<div class="col-xs-12 col-md-3 left-feild">
					<div class="be-vidget back-block">
						<a class="btn full color-1 size-1 hover-1" href="/accounts/{{Auth::id()}}"><i class="fa fa-chevron-left"></i>BACK TO PROFILE</a>
					</div>
					<div class="be-vidget hidden-xs hidden-sm" id="scrollspy">
						<h3 class="letf-menu-article">
							CHOOSE CATEGORY
						</h3>
						<div class="creative_filds_block">
							<ul class="ul nav">
								<li class="edit-ln"><a href="#basic-information">BASIC INFORMATION</a></li>
								<li class="edit-ln"><a href="#edit-password">EDIT PASSWORD</a></li>
								<li class="edit-ln"><a href="#about-me">ABOUT ME</a></li>
							</ul>
						</div>
					</div>

				</div>
				<div class="col-xs-12 col-md-9 _editor-content_">
					<div class="sec"  data-sec="basic-information">
						<div class="be-large-post">
							<div class="info-block style-2">
								<div class="be-large-post-align "><h3 class="info-block-label">BASIC INFORMATION</h3></div>
							</div>
							<div class="be-large-post-align">
								<div class="be-change-ava">
									<a class="be-ava-user style-2" href="blog-detail-2.html">

										<img src="img/ava_10.jpg" alt="">

									</a>
									<a class="btn color-4 size-2 hover-7">replace image</a>
								</div>
							</div>
							<div class="be-large-post-align">
								<div class="row">
									<div class="input-col col-xs-12 col-sm-6">
										<div class="form-group fg_icon focus-2">
											<div class="form-label">FIRST NAME</div>
											<input class="form-input" type="text" value="">

										</div>
									</div>
									<div class="input-col col-xs-12 col-sm-6">
										<div class="form-group focus-2">
											<div class="form-label">LAST NAME</div>
											<input class="form-input" type="text" value="">
										</div>

									</div>
									<div class="input-col col-xs-12 col-sm-6">
										<div class="form-label">COUNTRY</div>
										<div class="be-drop-down icon-none">
											<span class="be-dropdown-content"> USA </span>
											<ul class="drop-down-list">
												<li><a>USA</a></li>
												<li><a>United Kingdom</a></li>
												<li><a>Mexica</a></li>
												<li><a>Russia</a></li>
												<li><a>Italy</a></li>
											</ul>
										</div>
									</div>
									<div class="input-col col-xs-12 col-sm-6">
										<div class="form-group focus-2">

											<div class="form-label">CITY</div>
											<input class="form-input" type="text" value="">
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
					<div class="sec"  data-sec="edit-password">
						<div class="be-large-post">
							<div class="info-block style-2">
								<div class="be-large-post-align"><h3 class="info-block-label">PASSWORD</h3></div>
							</div>
							<div class="be-large-post-align">
								<div class="row">
									<div class="input-col col-xs-12 col-sm-4">
										<div class="form-group focus-2">

											<div class="form-label">OLD PASSWORD</div>
											<input class="form-input" type="password" placeholder="">
										</div>
									</div>
									<div class="input-col col-xs-12 col-sm-4">
										<div class="form-group focus-2">
											<div class="form-label">NEW PASSWORD</div>
											<input class="form-input" type="password" placeholder="">
										</div>
									</div>
									<div class="input-col col-xs-12 col-sm-4">
										<div class="form-group focus-2">
											<div class="form-label">REPEAT PASSWORD</div>
											<input class="form-input" type="password" placeholder="">
										</div>
									</div>
									<div class="col-xs-12">
										<a class="btn color-1 size-2 hover-1 btn-right">CHANGE PASSWORD</a>
									</div>

								</div>
							</div>
						</div>
					</div>
					<div class="sec" data-sec="on-the-web">
						<div class="be-large-post m-social">
							<div class="info-block style-2">
								<div class="be-large-post-align"><h3 class="info-block-label">ON THE WEB</h3></div>
							</div>
							<div class="be-large-post-align">
								<div class="social-input form-group focus-2">
									<div class="s_icon">
										<div class="social-bars"><i class="fa fa-bars"></i></div>
										<a class="social-btn color-1" href="blog-detail-2.html"><i class="fa fa-facebook"></i></a>
									</div>
									<div class="s_input">
										<input class="form-input" type="text" value="http:// facebook.com/">
									</div>
								</div>
								<div class="social-input form-group focus-2">
									<div class="s_icon">
										<div class="social-bars"><i class="fa fa-bars"></i></div>
										<a class="social-btn color-2" href="blog-detail-2.html"><i class="fa fa-twitter"></i></a>
									</div>
									<div class="s_input">
										<input class="form-input" type="text" value="http:// twitter.com/">
									</div>
								</div>
								<div class="social-input form-group focus-2">
									<div class="s_icon">
										<div class="social-bars"><i class="fa fa-bars"></i></div>
										<a class="social-btn color-4" href="blog-detail-2.html"><i class="fa fa-pinterest-p"></i></a>
									</div>
									<div class="s_input">
										<input class="form-input" type="text" value="http:// pinterest.com/">
									</div>
								</div>
								<div class="social-input form-group focus-2">
									<div class="s_icon">
										<div class="social-bars"><i class="fa fa-bars"></i></div>
										<a class="social-btn color-5" href="blog-detail-2.html"><i class="fa fa-instagram"></i></a>
									</div>
									<div class="s_input">
										<input class="form-input" type="text" value="http:// instagram.com/">
									</div>

								</div>

							</div>
						</div>
					</div>

					<div class="sec"  data-sec="about-me" >
						<div class="be-large-post">
							<div class="info-block style-2">
								<div class="be-large-post-align"><h3 class="info-block-label">ABOUT ME</h3></div>
							</div>
							<div class="be-large-post-align">
								<div class="row">
									<div class="input-col col-xs-12">
										<div class="form-group focus-2">
											<div class="form-label">DESCRIPTION</div>
											<textarea class="form-input" required="" placeholder="Something about you"></textarea>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>

					<a class="btn full color-1 size-1 hover-1 add_section"><i class="fa fa-plus"></i>UPDATE PROFILE</a>
				</div>
]
			</div>
		</div>
	</div>



	</div>
	<!-- SCRIPT	-->
	<script src="script/jquery-2.1.4.min.js"></script>
	<script src="script/bootstrap.min.js"></script>
	<script src="script/idangerous.swiper.min.js"></script>
	<script src="script/isotope.pkgd.min.js"></script>
	<script src="script/jquery.viewportchecker.min.js"></script>
	<script src="script/global.js"></script>
	</body>
</html>

@stop

