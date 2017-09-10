@extends('layouts.master')
@section('title')
	<title>{{ $event->title }}</title>
@stop
@section('content')

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

<div id="content-block">
	<div class="container custom-container be-detail-container">
		<div class="row">
			<div class="col-md-9 col-md-push-3">
				<div class="be-large-post">
					<div class="info-block">
					<div class="be-large-post-align">
						<span><i class="fa fa-thumbs-o-up"></i> 253</span>
						<span><i class="fa fa-eye"></i> 753</span>
						<span><i class="fa fa-comment-o"></i> 50</span>
					</div>
					</div>
					<div class="blog-content  be-large-post-align">
						<h5 class="be-post-title to">{{ $event->title }}</h5>
						<h5>{{ $event->date }} {{ $event->time }}</h5>
						<h5>{{ $event->location }}</h5>
						<h5>{{ $event->category }}</h5>
						<h5>{{ $event->num_people }}</h5>
						<div class="clear"></div>
						<div class="post-text">
						<h6>{{ $event->description }}</h6>
						</div>
					</div>
				</div>
</div>
				<div class="col-md-3 col-md-pull-9 left-feild">
					<div class="be-user-block">
						<div class="be-user-detail">
							<a class="be-ava-user" href="blog-detail-2.html">
								<img src="img/ava.png" alt="">
							</a>
							<p class="be-use-name">{{ $event->user->name }}</p>
							<span class="be-user-info">
								{{ $event->location }}
							</span>
						</div>
						<h5 class="be-title">
							About {{ $event->user->name }}
						</h5>
						<p class="be-text-userblock">
							
						</p>
					</div>
@stop
