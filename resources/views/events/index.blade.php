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
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2">
					<div class="form-group">
					<form method="GET" action="{{ action('EventsController@index') }}" 
					class="input-search">
						<input type="text" required="" name="q" placeholder="SEARCH EVENTS">
						<i class="fa fa-search"></i>
						<input type="submit">
					</form>
						
					</div>
				</div>
				<div class="col-md-2 col-xs-6">
					<div class="verticalAlignParent">
						<div class="verticalAlignChild">
							<div class="dropdown">
								<button class="dropbtn "> CATEGORIES </button>
								<div class="dropdown-content">
							@foreach(App\Event::allCats() as $cat)
							<a href="/events?c={{$cat['category']}}">
								{{App\Event::correctName($cat['category'])}}</a>
							@endforeach
								</div>
							</div>
						</div>
					</div>
				</div>
					<div class="col-md-2 col-xs-6 verticalAlign">
						<div class="verticalAlignParent">
							<div class="verticalAlignChild">
									<a href="/events"><button>CLEAR</button></a>
							</div>
						</div>
					</div>
			</div>
			
			
		</div>
		

	
		<div class="container-fluid custom-container">
			<div class="row">

				<div class="col-md-2 left-feild">
					<div class="be-vidget trending">
						<h3 class="letf-menu-article popcat">
							TRENDING CATEGORIES
						</h3>
								@foreach($trends as $trend)
								<a href="/events?c={{$trend}}" class="trendbtn">
									{{ App\Event::correctName($trend) }}</a>
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
									if($event->image != NULL): ?>
										"/assets{{$event->image}}"
									<?php else: ?>
										"{{App\Event::defaultImage($event->category)}}"
									<?php endif; ?>
								class="img-responsive" alt="Checkout this event">
								</a>
								<a href="/events/{{$event->id}}"
								class="be-post-title">{{ $event->title }}</a>
								<span>
									<p>	{{ App\Event::correctName($event->category) }} </p>
									<p>	{{ $event->date }} </p>
									<p>	{{ $event->location }} </p>
								</span>
								<div class="author-post">
									<img src=
									<?php clearstatcache();
										$user = App\User::find($event['user']['id']);
										if($user->image != NULL): ?> 
										"/assets{{App\User::find($event['user']['id'])->image}}"
									<?php else: ?>
										"/assets/img/usericon.png"
									<?php endif; ?>
									alt="{{ $event['user']['name'] }}" class="ava-author">
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
