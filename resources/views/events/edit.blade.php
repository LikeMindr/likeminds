@extends('layouts.master')
@section('title')

<title> Create Event </title>

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
<div class="col-xs-12 col-md-9 _editor-content_">
	<div class="sec"  data-sec="basic-information">
		<div class="be-large-post large-area">
			<div class="info-block style-2">
				<div class="be-large-post-align "><h3 class="info-block-label">Your Event</h3></div>
				<form method="POST" 
					action="{{ action('EventsController@update', $event->id) }}"
					enctype="multipart/form-data">
					{!! csrf_field() !!}
					<div class="form-group">
						<h2>Title</h2>
						<input class="form-control" type="text" name="title"
						value="{{$event->title}}" autofocus>
					</div>
					<div class="form-group">
						<h2>Image</h2>
						<input type="file" name="file" id="file">
					</div>
					<div class="form-group">
						<h2>Category</h2>
						<select class="form-control" type="text" name="category"

						value="{{$event->category}}">

							<option value="MUSIC">MUSIC</option>
							<option value="HAPPY HOURS">HAPPY HOURS</option>
							<option value="ART">ART</option>
							<option value="FILM & THEATER">FILM & THEATER</option>
							<option value="DANCE">DANCE</option>
							<option value="COMEDY">COMEDY</option>
							<option value="SPORTS &FITNESS">SPORTS & FITNESS</option>
							<option value="SPECIAL EVENTS">SPECIAL EVENTS</option>
							<option value="FASHION">FASHION</option>
							<option value="SOCIAL">SOCIAL</option>
							<option value="FOOD & DRINK">FOOD & DRINK</option>
							<option value="BOOKS / POETRY / WRITING">BOOKS / POETRY / WRITING</option>
							<option value="OUTDOORS / NATURE">OUTDOORS / NATURE</option>
							<option value="HEALTH & WELLNESS">HEALTH & WELLNESS</option>
							<option value="BUSINESS / TECH">BUSINESS / TECH</option>
							<option value="CIVIC ENGAGEMENT">CIVIC ENGAGEMENT</option>
							<option value="DEALS">DEALS</option>
						</select>
					</div>
					<div class="form-group">
						<h2>Location</h2>
						<input class="form-control" type="text" name="location"

						value="{{ $event->location }}">

					</div>
					<div class="form-group">
						<h2>Date</h2>
						<input class="form-control" type="date" name="date"

						value="{{ $event->date }}">

					</div>
					<div class="form-group">
						<h2>Time</h2>
						<input class="form-control" type="time" name="time"
						value="{{ $event->time }}">
					</div>
					<div class="form-group">
						<h2>Number of Guests</h2>
						<input class="form-control" type="number" name="num_people"

						value="{{ $event->num_people }}">

					</div>
					<div class="form-group">
						<h2>Description</h2>
						<textarea class="form-control text-form" rows="15"

						name="description">{{ $event->description }}</textarea>

					</div>
					{{ method_field('PUT') }}
					<button class="btn btn-primary right" id="submit">Submit</button>
				</form>
				<form method="POST" 
					action="{{ action('EventsController@destroy', $event->id) }}">
					{!! csrf_field() !!}
					<button class="btn btn-danger">Delete Event</button>
					{{ method_field('DELETE') }}
				</form>
			</div>
		</div>
	</div>
</div>
@stop
