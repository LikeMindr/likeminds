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
	<div id="content-block">
		<div class="head-bg">
			<div class="head-bg-img"></div>
				
		</div>
		<div class="container-fluid cd-main-content custom-container">
			<div class="row">
				<div class="col-md-2 left-feild">
					<form action="./" class="input-search">
						<input type="text" required="" placeholder="Enter keyword">
							<i class="fa fa-search"></i>
							<input type="submit" value="">
					</form>				
				</div>			
				<div class="col-md-10 ">
					<div class="for-be-dropdowns">
						<div class="be-drop-down">
							<i class="icon-projects"></i>
							<span class="be-dropdown-content"> Categories </span>
							<ul class="drop-down-list">
								<li class="filter" data-filter=".category-1"><a
									data-type="category-1">MUSIC</a></li>
								<li class="filter" data-filter=".category-2"><a
									data-type="category-2">HAPPY HOURS</a></li>
								<li class="filter" data-filter=".category-3"><a
									data-type="category-3">ART</a></li>
								<li class="filter" data-filter=".category-3"><a
									data-type="category-3">FILM & THEATER</a></li>
								<li class="filter" data-filter=".category-3"><a
									data-type="category-3">DANCE</a></li>
								<li class="filter" data-filter=".category-3"><a
									data-type="category-3">COMEDY</a></li>
								<li class="filter" data-filter=".category-3"><a
									data-type="category-3">SPORTS & FITNESS</a></li>
								<li class="filter" data-filter=".category-3"><a
									data-type="category-3">SPECIAL EVENTS</a></li>
								<li class="filter" data-filter=".category-3"><a
									data-type="category-3">FASHION</a></li>
								<li class="filter" data-filter=".category-3"><a
									data-type="category-3">SOCIAL</a></li>
								<li class="filter" data-filter=".category-3"><a
									data-type="category-3">FOOD & DRINK</a></li>
								<li class="filter" data-filter=".category-3"><a
									data-type="category-3">BOOKS / POETRY / WRITING</a></li>
								<li class="filter" data-filter=".category-3"><a
									data-type="category-3">OUTDOORS / NATURE</a></li>
								<li class="filter" data-filter=".category-3"><a
									data-type="category-3">HEALTH & WELLNESS</a></li>
								<li class="filter" data-filter=".category-3"><a
									data-type="category-3">BUSINESS / TECH</a></li>
								<li class="filter" data-filter=".category-3"><a
									data-type="category-3">CIVIC ENGAGEMENT</a></li>
								<li class="filter" data-filter=".category-3"><a
									data-type="category-3">DEALS</a></li>
							</ul>
						</div>
						
					</div>				
				</div>
			</div>
		</div>		
		<div class="container-fluid custom-container">
			<div class="row">
				
				<div class="col-md-2 left-feild">
					<div class="be-vidget">
						<h3 class="letf-menu-article">
							Popular Creative Filds
						</h3>
						<div class="creative_filds_block">
							<div class="ul">
								<a  data-filter=".category-1" class="filter">Graphic Design		</a>
								<a data-filter=".category-2" class="filter">Photography			</a>
								<a data-filter=".category-3" class="filter">Interaction Design	</a>
								<a data-filter=".category-4" class="filter">Art Direction		</a>
								<a data-filter=".category-5" class="filter">Illustration		</a>
							</div>
						</div>
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
				</div>

			</div>
		</div>
	</div>
	
@stop
