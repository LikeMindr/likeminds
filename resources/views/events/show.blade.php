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

<div id="profile-page-bg">
	<div class="container custom-container be-detail-container">
		<!-- <div class="container"> -->
		<div class="row">
			<div class="col-md-9 col-md-push-3">
				<div class="be-large-post">
					<div class="info-block">
						<!-- <div class="row"> -->
								<!-- <div class=".col-md-12"> --><h5 class="be-post-title to">{{ $event->title }}</h5><!-- </div> -->
						<!-- </div> -->
					</div>
					
					<div class="blog-content  be-large-post-align">
						
						<img src=
						<?php clearstatcache();
						   	if($event->image != NULL): ?>
								"/assets{{$event->image}}"
						<?php else: ?>
							"{{App\Event::defaultImage($event->category)}}"
						<?php endif; ?>
							/>
						<div>
					<div class="event-datails-show">
						<div class="event-details-top">Event Details</div>
						<h5>DATE & TIME: {{ $event->date }} at {{ $event->time }}</h5>
					</div>
						<h5>LOCATION: {{ $event->location }}</h5>
						<h5>EVENT CATEGORY: {{ App\Event::correctName($event->category) }}</h5>
						<div class="clear"></div>
						<div class="post-text">
							<h6>{{ $event->description }}</h6>
						</div>
				<div class="event-stats">
				<div class="event-details-top">Additional Details</div>		
					<h5>{{ $event->num_people - count($event->attends)}} SPOTS LEFT</h5>
						<h5>{{ count($event->attends) }} CURRENTLY SIGNED UP</h5>
					</div>
						
					</div>
				

						<?php if (Auth::check()) {
							$user = App\User::find(Auth::id());
							$attending = false;
							foreach($user->attends as $element) {
								if($element['event_id'] == $event->id) {
									$attending = true;
								}
							}
							}
							if(Auth::check() && $attending && Auth::id() != $event['user']['id']): ?>
							<a href="/attends/cancel/{{$event->id}}/{{Auth::id()}}">
								
								<button >CANCEL</button>
								
							</a>
					</div>
								<div title="Add to Calendar" class="addeventatc">
								    ADD TO CALENDAR
								    <span class="start">
								<?php 
								echo date('m/d/Y', strtotime($event->date))
									. ' ' .
									date('g:i A', strtotime($event->time));
										?>
									</span>
								    <span class="end">
								<?php 
								echo date('m/d/Y', strtotime($event->date))
									. ' ' .
									date('g:i A', strtotime($event->time)+3600);
										?>
									</span>
								    <span class="timezone">America/Chicago</span>
								    <span class="title">{{$event->title}}</span>
								    <span class="description">{{$event->description}}</span>
								    <span class="location">{{ $event->location }}</span>
								    <span class="organizer">
									{{App\User::find($event->created_by)->name}}
									</span>
								    <span class="organizer_email">
									{{App\User::find($event->created_by)->email}}
									</span>
								    <span class="facebook_event">https://www.facebook.com/events/703782616363133</span>
								    <span class="all_day_event">false</span>
								    <span class="date_format">MM/DD/YYY</span>
								    <span class="client">arhvfcwBtzTYjbzlSmIF31075</span>
								</div>
							<?php elseif(Auth::check() && Auth::id() != $event['user']['id']
										&& $event->num_people - count($event->attends) > 0): ?>
						<form class="sign-up-event-cal" method="POST" action="{{ action('AttendsController@store') }}">
							{!! csrf_field() !!}
							<input type="hidden" value="{{Auth::id()}}" name="user_id">
							<input type="hidden" value="{{$event->id}}" name="event_id">
							
								<button class="form-button" id="submit">REGISTER</button> 
							
						</form>
						<?php endif;  ?>

						<?php if(Auth::check() && Auth::id() == $event['user']['id']): ?>
						<form method="GET"
							action="{{ action('EventsController@edit', array($event->id)) }}">
							{!! csrf_field() !!}
							<button class="form-button" id="submit">EDIT</button>
						</form>
						<?php endif; ?>
					</div>
				<!-- </div> -->
			</div>
</div>
				<div class="col-md-3 col-md-pull-9 left-feild">
					<div class="be-user-block">
						<div class="be-user-detail">
							<a class="be-img-block" href="/accounts/{{$event['user']['id']}}">
								<img id="host-img" src=
									<?php clearstatcache();
										if($event['user']['image'] != NULL): ?>
										"/assets{{$event['user']['image']}}"
									<?php else: ?>
										"/assets/img/usericon.png"
									<?php endif; ?>
									alt="{{ $event['user']['name'] }}" class="img-responsive">
							</a>
							<a href="/accounts/{{$event['user']['id']}}">
							<p class="be-use-name">{{ $event['user']['name'] }}</p></a>
							<span class="be-user-info">
								{{ $event->location }}
							</span>
						</div>
						<h5 class="be-title">
							About {{ $event['user']['name'] }}
						</h5>
						<p class="be-text-userblock">
						<?php echo $event['user']['bio'] ?>
						</p>
					</div>
					</div>
<div class="row">
	<div class="col-md-9 col-md-push-3">
		<div class="be-large-post">
			<div class="info-block">
				<h5 class="be-post-title to">Like-Minds Attending</h5>
			</div>
			<div class="tabs-content clearfix">
				<div class="tab-info active">
					<div class="row">
					@foreach($event->attends as $user)	
						<div class="category-1 mix custom-column-5">
							<div class="be-post">
							<a href="/accounts/{{$user['user_id']}}" class="be-img-block">
							<img src=
								<?php clearstatcache();
								if(App\User::find($user['user_id'])->image != NULL): ?>
									"../assets{{App\User::find($user['user_id'])->image}}"
								<?php else: ?>
									"/assets/img/usericon.png"
								<?php endif; ?>
							class="img-responsive" alt="{{App\User::find($user['$user_id'])['name']}}">
							</a>
							<a href="/accounts/{{$user['user_id']}}">
							{{App\User::find($user['user_id'])['name']}}
							</a>
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
<!-- AddEvent -->
<script type="text/javascript" src="https://addevent.com/libs/atc/1.6.1/atc.min.js" async defer></script>

@stop
