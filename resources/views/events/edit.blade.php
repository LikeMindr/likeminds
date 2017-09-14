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
					<input type="checkbox" name="default_img">
					Check this box to revert to the default image
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
			</div>
		</div>
	</div>
</div>
</div>
 <script>
      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 37.0902, lng: 95.7129},
          zoom: 13
        });
        var card = document.getElementById('pac-card');
        var input = document.getElementById('pac-input');
        var types = document.getElementById('type-selector');
        var strictBounds = document.getElementById('strict-bounds-selector');

        map.controls[google.maps.ControlPosition.TOP_RIGHT].push(card);

        var autocomplete = new google.maps.places.Autocomplete(input);

        // Bind the map's bounds (viewport) property to the autocomplete object,
        // so that the autocomplete requests use the current map bounds for the
        // bounds option in the request.
        autocomplete.bindTo('bounds', map);

        var infowindow = new google.maps.InfoWindow();
        var infowindowContent = document.getElementById('infowindow-content');
        infowindow.setContent(infowindowContent);
        var marker = new google.maps.Marker({
          map: map,
          anchorPoint: new google.maps.Point(0, -29)
        });

        autocomplete.addListener('place_changed', function() {
          infowindow.close();
          marker.setVisible(false);
          var place = autocomplete.getPlace();
          if (!place.geometry) {
            // User entered the name of a Place that was not suggested and
            // pressed the Enter key, or the Place Details request failed.
            window.alert("No details available for input: '" + place.name + "'");
            return;
          }

          // If the place has a geometry, then present it on a map.
          if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
          } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);  // Why 17? Because it looks good.
          }
          marker.setPosition(place.geometry.location);
          marker.setVisible(true);

          var address = '';
          if (place.address_components) {
            address = [
              (place.address_components[0] && place.address_components[0].short_name || ''),
              (place.address_components[1] && place.address_components[1].short_name || ''),
              (place.address_components[2] && place.address_components[2].short_name || '')
            ].join(' ');
          }

          infowindowContent.children['place-icon'].src = place.icon;
          infowindowContent.children['place-name'].textContent = place.name;
          infowindowContent.children['place-address'].textContent = address;
          infowindow.open(map, marker);
        });

        // Sets a listener on a radio button to change the filter type on Places
        // Autocomplete.
        function setupClickListener(id, types) {
          var radioButton = document.getElementById(id);
          radioButton.addEventListener('click', function() {
            autocomplete.setTypes(types);
          });
        }

        setupClickListener('changetype-all', []);
        setupClickListener('changetype-address', ['address']);
        setupClickListener('changetype-establishment', ['establishment']);
        setupClickListener('changetype-geocode', ['geocode']);

        document.getElementById('use-strict-bounds')
            .addEventListener('click', function() {
              console.log('Checkbox clicked! New state=' + this.checked);
              autocomplete.setOptions({strictBounds: this.checked});
            });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places&callback=initMap"
        async defer></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDmMMlFhy_THlzLJwFcbN_bF5n--tWyv5s&libraries=places&callback=initMap"
        async defer></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZlOlrDyh3XWlEoMzezxJs3DxhubldJys&libraries=places&callback=initMap"
        async defer></script>
@stop
