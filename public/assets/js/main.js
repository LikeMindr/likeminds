/*/////////////////////////////////////////////////////////////////////////
                             Navigation Bar
/////////////////////////////////////////////////////////////////////////*/
/* Togglon statusChangeCallback(response) {ing and removing the "responsive" class to main menu when mobile menu icon is clicked */
function responsiveMenu() {
  var x = document.getElementById("desktopMenu");
  if (x.className === "desktop-menu") {
    x.className += " responsive";
  } else {
    x.className = "desktop-menu";
  }
}

/* Toggle between adding and removing the "caretDropdown" class to mobile menu links when caret link are clicked */
function caretDropdownOne() {
  var caretDropdown1 = document.getElementById("caretDropdownOne");
  if (caretDropdown1.className === "dropdown-menu") {
    caretDropdown1.className += " caretDropdown";
  } else {
    caretDropdown1.className = "dropdown-menu";
  }
}

function caretDropdownTwo() {
  var caretDropdown2 = document.getElementById("caretDropdownTwo");
  if (caretDropdown2.className === "dropdown-menu") {
    caretDropdown2.className += " caretDropdown";
  } else {
    caretDropdown2.className = "dropdown-menu";
  }
}

function caretDropdownThree() {
  var caretDropdown3 = document.getElementById("caretDropdownThree");
  if (caretDropdown3.className === "dropdown-menu") {
    caretDropdown3.className += " caretDropdown";
  } else {
    caretDropdown3.className = "dropdown-menu";
  }
}

function caretDropdownFour() {
  var caretDropdown4 = document.getElementById("caretDropdownFour");
  if (caretDropdown4.className === "dropdown-menu") {
    caretDropdown4.className += " caretDropdown";
  } else {
    caretDropdown4.className = "dropdown-menu";
  }
}

function caretDropdownFive() {
  var caretDropdown5 = document.getElementById("caretDropdownFive");
  if (caretDropdown5.className === "dropdown-menu") {
    caretDropdown5.className += " caretDropdown";
  } else {
    caretDropdown5.className = "dropdown-menu";
  }
}

/*/////////////////////////////////////////////////////////////////////////
                             Facebook Login
/////////////////////////////////////////////////////////////////////////*/

function statusChangeCallback(response) {
	if (response.status === 'connected') {
		
	} else {
		
	}
}

function checkLoginState() {
	FB.getLoginStatus(function(response) {
		statusChangeCallback(response);
	});
}

window.fbAsyncInit = function() {
	FB.init({
		appId      : '781692095343244',
		cookie     : true,
		xfbml      : true,
		version    : 'v2.8'
});

FB.getLoginStatus(function(response) {
	statusChangeCallback(response);
});

};

(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/en_US/sdk.js";
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));


/*/////////////////////////////////////////////////////////////////////////
                             Google Location API
/////////////////////////////////////////////////////////////////////////*/


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



// Counter

(function ($) {
  $.fn.countTo = function (options) {
    options = options || {};

    return $(this).each(function () {
      // set options for current element
      var settings = $.extend({}, $.fn.countTo.defaults, {
        from:            $(this).data('from'),
        to:              $(this).data('to'),
        speed:           $(this).data('speed'),
        refreshInterval: $(this).data('refresh-interval'),
        decimals:        $(this).data('decimals')
      }, options);

      // how many times to update the value, and how much to increment the value on each update
      var loops = Math.ceil(settings.speed / settings.refreshInterval),
        increment = (settings.to - settings.from) / loops;

      // references & variables that will change with each update
      var self = this,
        $self = $(this),
        loopCount = 0,
        value = settings.from,
        data = $self.data('countTo') || {};

      $self.data('countTo', data);

      // if an existing interval can be found, clear it first
      if (data.interval) {
        clearInterval(data.interval);
      }
      data.interval = setInterval(updateTimer, settings.refreshInterval);

      // initialize the element with the starting value
      render(value);

      function updateTimer() {
        value += increment;
        loopCount++;

        render(value);

        if (typeof(settings.onUpdate) == 'function') {
          settings.onUpdate.call(self, value);
        }

        if (loopCount >= loops) {
          // remove the interval
          $self.removeData('countTo');
          clearInterval(data.interval);
          value = settings.to;

          if (typeof(settings.onComplete) == 'function') {
            settings.onComplete.call(self, value);
          }
        }
      }

      function render(value) {
        var formattedValue = settings.formatter.call(self, value, settings);
        $self.text(formattedValue);
      }
    });
  };

  $.fn.countTo.defaults = {
    from: 0,               // the number the element should start at
    to: 0,                 // the number the element should end at
    speed: 1000,           // how long it should take to count between the target numbers
    refreshInterval: 100,  // how often the element should be updated
    decimals: 0,           // the number of decimal places to show
    formatter: formatter,  // handler for formatting the value before rendering
    onUpdate: null,        // callback method for every time the element is updated
    onComplete: null       // callback method for when the element finishes updating
  };

  function formatter(value, settings) {
    return value.toFixed(settings.decimals);
  }
}(jQuery));

/*/////////////////////////////////////////////////////////////////////////
                             Events Index Queries
/////////////////////////////////////////////////////////////////////////*/
$( document ).ready(function() {

	$(function() {
		$('a').each(function() {
		link = $(this).attr('href');
		query = location.search;
		if (link.indexOf('?') !== -1 && query !== '') {
			query = query.replace('?','&');
		}
		$(this).attr('href',link+query);
		});
	});

	$('#clrBtn').on("click", function() {
		$(this).attr("href", "/events");
	});

	$('#srchBtn').on("click", function() {
		$('a').each(function() {
		link = $(this).attr('href');
		query = location.search;
		if (link.indexOf('?') !== -1 && query !== '') {
			query = query.replace('?','&');
		}
		$(this).attr('href',link+query);
		});
	});
});

