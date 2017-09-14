@extends('layouts.master')
@section('title')
	<title>Like Minds | Events</title>
@stop
@section('content')
<?php clearstatcache(); ?>
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
		
			<div class="column-one-third">
				<form method="GET" action="{{ action('EventsController@index') }}" class="input-search">
					<input type="text" required="" name="q" placeholder="SEARCH EVENTS">
						<i class="fa fa-search"></i>
					<input type="submit" value="">
				</form>
			</div>
			<div class="column-one-third cat">
				<div class="dropdown">
					<button class="dropbtn dropdown-events"> CATEGORIES </button>
						<div class="dropdown-content">
							<a href="/events?q=ART">ART</a>
							<a href="/events?q=BOOKS / POETRY / WRITING">BOOKS / POETRY / WRITING</a>
							<a href="/events?q=BUSINESS & TECH">BUSINESS / TECH</a>
							<a href="/events?q=CIVIC ENAGEMENT">CIVIC ENGAGEMENT</a>
							<a href="/events?q=COMEDY">COMEDY</a>
							<a href="/events?q=DANCE">DANCE</a>
							<a href="/events?q=DEALS">DEALS</a>
							<a href="/events?q=FASHION">FASHION</a>
							<a href="/events?q=FILM & THEATER">FILM & THEATER</a>
							<a href="/events?q=FOOD & DRINK">FOOD & DRINK</a>
							<a href="/events?q=HAPPY HOURS">HAPPY HOURS</a>
							<a href="/events?q=HEALTH & WELLNESS">HEALTH & WELLNESS</a>
							<a href="/events?q=Music">MUSIC</a>
							<a href="/events?q=OUTDOORS & NATURE">OUTDOORS / NATURE</a>
							<a href="/events?q=SOCIAL">SOCIAL</a>
							<a href="/events?q=SPECIAL EVENTS">SPECIAL EVENTS</a>
							<a href="/events?q=SPORTS & FITNESS">SPORTS & FITNESS</a>
						</div>
				</div>
			</div>
				<div class="column-one-third clear">
					<div class="btn-clear btn"><a href="/events">CLEAR</a>
					</div>
				</div>
		
		
		

	</div>
		<div class="container-fluid custom-container">
			<div class="row">

				<div class="col-md-2 left-feild">
					<div class="be-vidget">
						<h3 class="letf-menu-article popcat">
							TRENDING CATEGORIES
						</h3>
								@foreach($trends as $trend)
								<a href="/events?q={{$trend}}" class="trendbtn">{{ $trend }}</a>
								@endforeach
					</div>
					<div class="be-vidget">

						<div class="filter-block">
							<ul>




							</ul>
						</div>
					</div>
				</div>

				<div class="col-md-10">
					<div id="container-mix"  class="row _post-container_">
						@foreach($events as $event)
						<div class="category-1 mix custom-column-5">
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
								<a href="/events/{{$event->id}}"
								class="be-post-title">{{ $event->title }}</a>
								<span>
									<p>	{{ $event->category }} </p>
									<p>	{{ $event->date }} </p>
									<p>	{{ $event->location }} </p>
									<p>	{{ $event->description }} </p>
								</span>
								<div class="author-post">
									<img src="../assets/img/a1.png" alt="" class="ava-author">
									<span>by <a href="/accounts/{{$event['user']['id']}}">{{ $event['user']['name'] }}</a></span>
								</div>
							</div>
						</div>
						@endforeach
					</div>
						{!! $events->render() !!}
				</div>

			</div>
		</div>
	</div>

@stop
