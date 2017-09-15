@extends('layouts.master')
@section('title')
<title> Like Minds At </title>
@stop
@section('content')

	<!-- THE LOADER -->



	<div class="be-loader">
	    	<div class="spinner">
				<img src="../assets/img/logo-loader.png"  alt="">
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
								<li class="edit-ln"><a href="#about-me">ABOUT ME</a></li>
							</ul>
						</div>
					</div>

				</div>
				<div class="col-xs-12 col-md-9 _editor-content_">
					<div class="sec"  data-sec="basic-information">
						<div class="be-large-post">
						<form method="POST" action="{{action('AccountsController@update', $user->id)}}"
							enctype="multipart/form-data">
							{!! csrf_field() !!}
							<div class="info-block style-2">
								<div class="be-large-post-align "><h3 class="info-block-label">BASIC INFORMATION</h3></div>
							</div>
							<div class="be-large-post-align">
								<div class="be-change-ava">
									<div class="be-ava-user style-2">

								<img src=
								<?php clearstatcache();
										if(file_exists($_SERVER['DOCUMENT_ROOT'] . 
										"/assets/img/u-" . $user->id . ".jpg")): ?>
										"/assets/img/u-{{$user->id}}.jpg"
									<?php else: ?>
										"/assets/img/usericon.png"
									<?php endif; ?>
									alt="{{ $user->name }}" />	

									</div>
									<div>
									REPLACE IMAGE
									<input type="file" name="file" id="file" class="select-file-button">
									</div>
								</div>
							</div>
							<div class="be-large-post-align">
								<div class="row">
									<div class="input-col col-xs-12 col-sm-6">
										<div class="form-group fg_icon focus-2">
											<div class="form-label">NAME</div>
											<input class="form-input" name="name"
											type="text" value="{{$user->name}}">
										</div>
									</div>
									<div class="input-col col-xs-12 col-sm-6">
										<div class="form-group focus-2">

											<div class="form-label">LOCATION</div>
											<input class="form-input" name="location"
											type="text" value="{{$user->location}}">
										</div>
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
										<input class="form-input" type="text" name="facebook"
									value=
									@if($user->facebook == NULL)
										"http://facebook.com/"
									@else
										"{{$user->facebook}}"
									@endif
										>
									</div>
								</div>
								<div class="social-input form-group focus-2">
									<div class="s_icon">
										<div class="social-bars"><i class="fa fa-bars"></i></div>
										<a class="social-btn color-2" href="blog-detail-2.html"><i class="fa fa-twitter"></i></a>
									</div>
									<div class="s_input">
										<input class="form-input" type="text" name="twitter"
									value=
									@if($user->twitter == NULL)
										"https://twitter.com/"
									@else
										"{{$user->twitter}}"
									@endif
										>
									</div>
								</div>
								<div class="social-input form-group focus-2">
									<div class="s_icon">
										<div class="social-bars"><i class="fa fa-bars"></i></div>
										<a class="social-btn color-4" href="blog-detail-2.html"><i class="fa fa-pinterest-p"></i></a>
									</div>
									<div class="s_input">
										<input class="form-input" type="text" name="pinterest"
									value=
									@if($user->pinterest == NULL)
										"https://pinterest.com/"
									@else
										"{{$user->pinterest}}"
									@endif
										>
									</div>
								</div>
								<div class="social-input form-group focus-2">
									<div class="s_icon">
										<div class="social-bars"><i class="fa fa-bars"></i></div>
										<a class="social-btn color-5" href="blog-detail-2.html"><i class="fa fa-instagram"></i></a>
									</div>
									<div class="s_input">
										<input class="form-input" type="text" name="instagram"
										value=
									@if($user->instagram == NULL)
											"https://instagram.com/"
									@else
										"{{$user->instagram}}"
									@endif
											>
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
											<textarea class="form-input" name="bio" 
											value="{{$user->bio}}"></textarea>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
					{{ method_field('PUT') }}
					<button class="btn full color-1 size-1 hover-1
						add_section"><i class="fa fa-plus"></i>UPDATE PROFILE</button>
				</div>
]
			</div>
		</form>
		</div>
	</div>



	</div>

@stop
