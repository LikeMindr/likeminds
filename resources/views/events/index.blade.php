@extends('layouts.master')
@section('title')
	<title>Like Minds | Events</title>
@stop
@section('content')
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


<br>
<br>
	<div id="content-block">
		<div class="head-bg">
			<div class="head-bg-img"></div>

		</div>
		<div class="container-fluid cd-main-content custom-container">
			<div class="row">
				<div class="col-md-2 left-feild">
					<form method="GET" action="{{ action('EventsController@index') }}"
						class="input-search">
						<input type="text" required="" name="q" placeholder="Enter keyword">
							<i class="fa fa-search"></i>
							<input type="submit" value="">
					</form>
				</div>
				<div class="col-md-10 ">
						<div class="dropdown">
							<button class="dropbtn"> Categories </button>
							<div class="dropdown-content">
								<a href="/events?q=music">MUSIC</a>
								<a href="/events?q=happy hours">HAPPY HOURS</a>
								<a href="/events?q=art">ART</a>
								<a href="/events?q=film theater">FILM & THEATER</a>
								<a href="/events?q=dance">DANCE</a>
								<a href="/events?q=comedy">COMEDY</a>
								<a href="/events?q=sports fitness">SPORTS & FITNESS</a>
								<a href="/events?q=special events">SPECIAL EVENTS</a>
								<a href="/events?q=fashion">FASHION</a>
								<a href="/events?q=social">SOCIAL</a>
								<a href="/events?q=food drink">FOOD & DRINK</a>
								<a href="/events?q=books poetry writing">BOOKS / POETRY / WRITING</a>
								<a href="/events?q=outdoors nature">OUTDOORS / NATURE</a>
								<a href="/events?q=health wellness">HEALTH & WELLNESS</a>
								<a href="/events?q=business tech">BUSINESS / TECH</a>
								<a href="/events?q=civic engagement">CIVIC ENGAGEMENT</a>
								<a href="/events?q=deals">DEALS</a>
							</div>
						</div>
							<div class="clearbtn"><a href="/events">Clear</a></div>
			</div>
		</div>
		<div class="container-fluid custom-container">
			<div class="row">

				<div class="col-md-2 left-feild">
					<div class="be-vidget">
						<h3 class="letf-menu-article">
							Popular Categories
						</h3>
								@foreach($trends as $trend)
								<a href="/events?q={{$trend}}" class="trendbtn">{{ $trend }}</a>
								@endforeach
						<!--		<a data-filter=".category-2" class="filter">Photography			</a>
								<a data-filter=".category-3" class="filter">Interaction Design	</a>
								<a data-filter=".category-4" class="filter">Art Direction		</a>
								<a data-filter=".category-5" class="filter">Illustration		</a>
						-->
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
								<a href="page1.html" class="be-img-block">
								<img src="img/p1.jpg" alt="omg">
								</a>
								<a href="page1.html" class="be-post-title">{{ $event->title }}</a>
								<span>
									<a href="blog-detail-2.html" class="be-post-tag">
										{{ $event->category }}</a>,
									<a href="blog-detail-2.html" class="be-post-tag">
										{{ $event->date }}</a>,
									<a href="blog-detail-2.html" class="be-post-tag">
										{{ $event->location }}</a>,
									<a href="blog-detail-2.html" class="be-post-tag">
										{{ $event->description }}</a>
								</span>
								<div class="author-post">
									<img src="img/a1.png" alt="" class="ava-author">
									<span>by <a href="page1.html">{{ $event->user->name }}</a></span>
								</div>
								<div class="info-block">
									<span><i class="fa fa-thumbs-o-up"></i> 360</span>
									<span><i class="fa fa-eye"></i> 789</span>
									<span><i class="fa fa-comment-o"></i> 20</span>
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
