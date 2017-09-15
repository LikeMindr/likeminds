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
		<div class="row">
			<div class="col-md-9 col-md-push-3">
				<div class="be-large-post">
					<div class="info-block">
					<div class="be-large-post-align">
					</div>
					</div>
					<div class="blog-content  be-large-post-align">
						<h5 class="be-post-title to">{{ $event->title }}</h5>
						<img src=
						<?php clearstatcache();
						   	if($event->image != NULL): ?>
								"/assets{{$event->image}}"
						<?php else: ?>
							"{{App\Event::defaultImage($event->category)}}"
						<?php endif; ?>
							/>
						<h5>{{ $event->date }} {{ $event->time }}</h5>
						<h5>{{ $event->location }}</h5>
						<h5>{{ App\Event::correctName($event->category) }}</h5>
						<h5>{{ $event->num_people }}</h5>
						<div class="clear"></div>
						<div class="post-text">
							<h6>{{ $event->description }}</h6>
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
								<button>Cancel</button>
							</a>
							<?php elseif(Auth::check() && Auth::id() != $event['user']['id']): ?>
						<form class="sign-up-event-cal" method="POST" action="{{ action('AttendsController@store') }}">
							{!! csrf_field() !!}
							<input type="hidden" value="{{Auth::id()}}" name="user_id">
							<input type="hidden" value="{{$event->id}}" name="event_id">
							
								<button class="btn color-4 size-2 hover-7 " id="submit">REGISTER</button> 
							
								<div title="Add to Calendar" class="addeventatc">
								    ADD TO CALENDAR
								    <span class="start">09/29/2017 09:00 AM</span>
								    <span class="end">09/29/2017 11:00 AM</span>
								    <span class="timezone">Europe/Paris</span>
								    <span class="title">Summary of the event</span>
								    <span class="description">Description of the event<br>Example of a new line</span>
								    <span class="location">{{ $event->location }}</span>
								    <span class="organizer">Organizer</span>
								    <span class="organizer_email">Organizer e-mail</span>
								    <span class="facebook_event">https://www.facebook.com/events/703782616363133</span>
								    <span class="all_day_event">false</span>
								    <span class="date_format">{{ $event->date }}</span>
								    <span class="client">arhvfcwBtzTYjbzlSmIF31075</span>
								</div>
						</form>
						<?php endif;  ?>

						<?php if(Auth::check() && Auth::id() == $event['user']['id']): ?>
						<form method="GET"
							action="{{ action('EventsController@edit', array($event->id)) }}">
							{!! csrf_field() !!}
							<button class="btn color-4 size-2 hover-7 button-event-create" id="submit">EDIT</button>
						</form>
						<?php endif; ?>
					</div>
				</div>
</div>
				<div class="col-md-3 col-md-pull-9 left-feild">
					<div class="be-user-block">
						<div class="be-user-detail">
							<a class="be-ava-user" href="/accounts/{{$event['user']['id']}}">
								<img src="/assets/img/default-avatar.jpg" alt="">
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
<!-- AddEvent -->
<script type="text/javascript" src="https://addevent.com/libs/atc/1.6.1/atc.min.js" async defer></script>

@stop
