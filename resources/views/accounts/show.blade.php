@extends('layouts.master')
@section('title')
<title> Like Minds At </title>
@stop
@section('content')
<?php clearstatcache(); ?>

	<!-- MAIN CONTENT -->
	<div id="profile-page-bg">
		<div class="container be-detail-container">
			<div class="row">
				<div class="col-xs-12 col-md-4 left-feild">
					<div class="be-user-block style-3">
						<div class="be-user-detail">

							<div class="be-ava-right btn">
								<div class="message-popup">
									<div class="container">
									</div>
								</div>
							</div>

  							<img src=
								<?php clearstatcache();
									if(file_exists($_SERVER['DOCUMENT_ROOT'] . 
									"/assets/img/u-" . $user->id . ".jpg")): ?>
									"/assets/img/u-{{$user->id}}.jpg"
								<?php else: ?>
									"/assets/img/usericon.png"
								<?php endif; ?>
							width="300px" height="300px" />
							<p class="be-use-name">{{ $user->name }}</p>

							<div class="be-user-info">
								{{ $user->location }}
							</div>
							<div class="be-user-social">

								<?php if(strlen($user->facebook) > 21): ?>					
								<a class="social-btn color-1" 
									href="{{$user->facebook}}" target="blank">
									<i class="fa fa-facebook"></i></a>
								<?php endif; ?>
								<?php if(strlen($user->twitter) > 20): ?>
								<a class="social-btn color-2" 
									href="{{$user->twitter}}" target="blank">
									<i class="fa fa-twitter"></i></a>
								<?php endif;  ?>
								<?php if(strlen($user->pinterest) > 22): ?>
								<a class="social-btn color-4" 
									href="{{$user->pinterest}}" target="blank">
									<i class="fa fa-pinterest-p"></i></a>
								<?php endif;  ?>
								<?php if(strlen($user->instagram) > 22): ?>
								<a class="social-btn color-5" 
									href="{{$user->instagram}}" target="blank">
									<i class="fa fa-instagram"></i></a>
								<?php endif;  ?>

							</div>
						</div>
						<div class="be-user-statistic">
							<div class="stat-row clearfix">
							<i class="stat-icon icon-views-b">
</i>EVENTS CREATED<span class="stat-counter">
							{{ count($user->events) }} 
							</span></div>
							<div class="stat-row clearfix">
							<i class="stat-icon icon-like-b">
</i>EVENTS ATTENDED<span class="stat-counter">
							{{ count($user->attends) }} 
							</span></div>
						</div>
					</div>
					<div class="be-desc-block">
						<div class="be-desc-author">
							<div class="be-desc-label">ABOUT ME</div>
							<div class="clearfix"></div>
							<div class="be-desc-text">
							{{ $user->bio }}
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-md-8">
                    <div class="tab-wrapper style-1">
                        <div class="tab-nav-wrapper">
                            <div  class="nav-tab  clearfix">
                            	@if(Auth::check() && Auth::id() == $user->id)
                                <div class="nav-tab-item ">
                                    <span>MY EVENTS</span>
                                </div>
                                <div class="nav-tab-item ">
                                    <a href="{{action('AccountsController@edit', $user->id)}}" >
									<span>EDIT PROFILE</span></a>
                                </div>
                            	@else
								<div class="nav-tab-item">
                                    <span>EVENTS</span>
                                </div>
								@endif
                            </div>
                        </div>
                        <div class="tabs-content clearfix">
                            <div class="tab-info active">
								<div class="row">
					@foreach($user->events as $event)	
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post">
								<a href="/events/{{$event->id}}" class="be-img-block">
								<img src=
									<?php clearstatcache();
									if(file_exists($_SERVER['DOCUMENT_ROOT'] .
										"/assets/img/e-" . $event->id . ".jpg")): ?>
										"../assets/img/e-{{$event->id}}.jpg"
									<?php else: ?>
										"{{App\Event::defaultImage($event->category)}}"
									<?php endif; ?>
								class="img-responsive" alt="Checkout this event">
								</a>
								<a href="/events/{{$event->id}}" class="be-post-title">
									{{$event->title}}</a>
								<span>
									<p>	{{ App\Event::correctName($event->category) }} </p>
									<p>	{{ $event->date }} </p>
									<p>	{{ $event->location }} </p>
								</span>
								<div class="author-post">
								<img src=
									<?php clearstatcache();
										if(file_exists($_SERVER['DOCUMENT_ROOT'] . 
										"/assets/img/u-" . $event['user']['id'] . ".jpg")): ?>
										"/assets/img/u-{{$event['user']['id']}}.jpg"
									<?php else: ?>
										"/assets/img/usericon.png"
									<?php endif; ?>
									alt="{{$event['user']['id']}}" class="ava-author">
									<span>by <a href="/accounts/{{$event['user']['id']}}">
										{{ $event['user']['name'] }}</a></span>
								</div>
							</div>
						</div>
							@endforeach
							
					@foreach($user->attends as $event)
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post">
								<a href="/events/
									{{App\Event::find($event['event_id'])['id']}}" 
									class="be-img-block">
								<img src=
									<?php clearstatcache();
									if(file_exists($_SERVER['DOCUMENT_ROOT'] .
										"/assets/img/e-" . 
										App\Event::find($event['event_id'])['id'] 
										. ".jpg")): ?>
										"../assets/img/e-{{
										App\Event::find($event['event_id'])['id']
										}}.jpg"
									<?php else: ?>
										"{{App\Event::defaultImage(
										App\Event::find($event['event_id'])['category'])}}"
									<?php endif; ?>
								class="img-responsive" alt="Checkout this event">
								</a>
								<a href="/events/
									{{App\Event::find($event['event_id'])['id']}}" 
									class="be-post-title">
									{{App\Event::find($event['event_id'])['title']}}
								</a>
								<span>
									<p>	
						{{ App\Event::correctName(App\Event::find($event['event_id'])['category']) }} 
									</p>
									<p>	
									{{ App\Event::find($event['event_id'])['date'] }} 
									</p>
									<p>	
									{{ App\Event::find($event['event_id'])['location'] }} 
									</p>
								</span>
								<div class="author-post">
								<img src=
									<?php clearstatcache();
										if(file_exists($_SERVER['DOCUMENT_ROOT'] . 
										"/assets/img/u-" . 
										App\Event::find($event['event_id'])['created_by']
										. ".jpg")): ?>
										"/assets/img/u-{{
										App\Event::find($event['event_id'])['created_by']
										}}.jpg"
									<?php else: ?>
										"/assets/img/usericon.png"
									<?php endif; ?>
									alt="{{
							App\User::find(App\Event::find($event['event_id'])['created_by'])['name']
									}}" class="ava-author">
									<span>by <a href="/accounts/{{
									App\Event::find($event['event_id'])['created_by']
									}}">
						{{ App\User::find(App\Event::find($event['event_id'])['created_by'])['name'] }}
									</a></span>
								</div>
							</div>
						</div>
							@endforeach
									</div>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>


	<!-- SCRIPT	-->
	<!-- <script src="script/jquery-2.1.4.min.js"></script>
	<script src="script/bootstrap.min.js"></script>
	<script src="script/idangerous.swiper.min.js"></script>
	<script src="script/isotope.pkgd.min.js"></script>
	<script src="script/jquery.viewportchecker.min.js"></script>
	<script src="script/global.js"></script>		 -->
	</body>
</html>
@stop
