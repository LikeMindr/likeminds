@extends('layouts.master')
@section('title')
<title> Edit Event </title>
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
<div id="profile-page-bg-container">

<div class="col-xs-12 col-md-9 _editor-content_">
	<div class="sec"  data-sec="basic-information">
		<div class="create-event-page">
			<div class="create-event-form">
				<form method="POST" 
          action="{{ action('EventsController@update', $event->id) }}"
          enctype="multipart/form-data">
          {!! csrf_field() !!}
					<div class="form-group">

					<div class="create-event-form-align">
					<p>EDIT YOUR EVENT</p>
					</div>
						<h2 class="form-label-create">TITLE</h2>
						<input class="form-control create-event-input" type="text" name="title"
						value="{{$event->title}}" autofocus required>
					</div>
					
				    <div class="row">
					<div class="form-group input-col col-xs-12 col-sm-6">
						<h2 class="form-label-create ">IMAGE</h2>
						<input type="file" name="file" id="file" class="select-file-button">
					</div>
					
					<div class="form-group input-col col-xs-12 col-sm-6">
					<h2 class="form-label-create">DEFAULT IMAGE</h2>
					<label><input type="checkbox" name="default_img" value="yes">
					Check this box to revert to the default image</label>
				</div>
				</div>
          <div class="form-group">
						<h2 class="form-label-create">CATEGORY</h2>
						<select class="form-control create-event-input" type="text" name="category"
						value="{{$event->category}}" required>
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
						<h2 class="form-label-create">LOCATION</h2>
							<div id="pac-container">
        						<input id="pac-input" type="text" name="location" class="form-control create-event-input" value="{{ $event->location }}" required>
        					</div>
      				</div>
      				<div id="map"></div>
				    <div id="infowindow-content">
				      <img src="" width="16" height="16" id="place-icon">
				      <span id="place-name"  class="title"></span><br>
				      <span id="place-address"></span>
				    </div>
				    <div class="row">
					<div class="form-group input-col col-xs-12 col-sm-6">
						<h2 class="form-label-create">DATE</h2>
						<input class="form-control create-event-input-datetime" type="date" name="date"
						value="{{ $event->date }}" required>
					</div>
					<div class="form-group input-col col-xs-12 col-sm-6">
						<h2 class="form-label-create">TIME</h2>
						<input class="form-control create-event-input-datetime" type="time" name="time"
						value="{{ $event->time }}" required>
					</div>
					</div>
					<div class="form-group">
						<h2 class="form-label-create">NUMBER OF GUESTS</h2>
						<input class="form-control create-event-input" type="number" min="0" name="num_people"
						value="{{ $event->num_people }}" required>
					</div>
					<div class="form-group">
						<h2 class="form-label-create">DESCRIPTION</h2>
						<textarea class="form-control text-form create-event-description"
						name="description" placeholder="Tell everyone why they should go to your event..." required>
            {{ $event->description }} </textarea>
					</div>
					{{ method_field('PUT') }}
					<button class="btn color-4 size-2 hover-7 button-event-create" id="submit">Submit</button>
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
</div>
@stop
