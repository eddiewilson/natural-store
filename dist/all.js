var map;
function initMap() {
	
	var mapOptions = {
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		mapTypeControl: false,
		zoom: 10,
		zoomControl: false,
		streetViewControl: false,
		scaleControl: false,
		center: new google.maps.LatLng(50.302132, -5.044308),
		gestureHandling: 'cooperative',
        scrollwheel: false
	};
	
	map = new google.maps.Map(document.getElementById('map-canvas'),
		mapOptions);
		
	// $mughal-green: #256A37;
	// $white: #ffffff;
	// $white-smoke: #F7F6F2;
	// $gainsboro: #E1DDD4;
	// $onyx: #313639;
	// $dim-grey: #6D6D6D;
	// $light-grey: #D9D8DD;	
	
	var mapStyles = [
		{
			"featureType": "landscape",
			"stylers": [
				{ "visibility": "on" },
				{ "color": "#E1DDD4"}
			]
		},{
			"featureType": "water",
			"stylers": [
				{ "visibility": "on" },
				{ "color": "#F7F6F2" }
			]
		},{
			"featureType": "water",
			"elementType": "labels",
			"stylers": [
				{ "visibility": "off" }
			]
		},{
			"featureType": "administrative",
			"stylers": [
				{ "visibility": "off" }
			]
		},{
			"featureType": "administrative",
			"elementType": "labels",
			"stylers": [
				{ "visibility": "off" }
			]
		},{
			"featureType": "poi",
			"stylers": [
				{ "visibility": "off" }
			]
		},{
			"featureType": "road",
			"stylers": [
				{ "visibility": "on" },
				{ "color": "#ffffff"}
			]
		},{
			"featureType": "road",
			"elementType": "labels",
			"stylers": [
				{ "visibility": "off" }
			]
		},{
			"featureType": "transit",
			"stylers": [
				{ "visibility": "off" }
			]
		}
	];
	var shops = [
		['Helston', 50.099277, -5.271752, 4],
		['Falmouth', 50.156206, -5.071225, 5],
		['St Austell', 50.337792, -4.793016, 3]
	];
	
	for (var i = 0; i < shops.length; i++) {
		var shop = shops[i];
		var icon = {
			path: 'M16.5,33c-9.0818,0-16.5-7.119-16.5-16.327,0-9.2082,7.3873-16.673,16.5-16.673,9.113,0,16.5,7.4648,16.5,16.673,0,9.208-7.418,16.327-16.5,16.327',
			anchor: new google.maps.Point(16.5, 16.5),
			strokeWeight: 2,
			strokeColor: '#256A37',
			scale: 2
		};
		
		var marker = new google.maps.Marker({
			position: {lat: shop[1], lng: shop[2]},
			// position: new google.maps.LatLng(50.156206, -5.071225),
			map: map,
			icon: icon,
			title: 'marker'
		});
	}
	
	google.maps.event.addListener(marker, 'click', function() {
		infowindow.open(map,marker);
	});
	
	map.setOptions({styles: mapStyles});
}
// Body State toggled

var nav = document.querySelector('.nav-burger');
var toggleState = function (elem, one, two) {
var elem = document.querySelector(elem);
  elem.setAttribute('data-state', elem.getAttribute('data-state') === one ? two : one);
};

nav.onclick = function (e) {
  toggleState('body', 'hide', 'show');
  e.preventDefault();
};

// ES5 using .bind() #ftw
// nav.addEventListener('click', toggleState.bind(null, '.nav ul', 'closed', 'open'), false);

// Twitter 

// var selection = document.querySelector('#basic-waypoint img');
// var waypoint = new Waypoint({
// 	element: document.getElementById('basic-waypoint'),
// 	handler: function() {
//     	
// 		for (i = 0; i < selection.length; i++) { 
//     		// selection.classList.toggle('animate');
//     		console.log(selection);
// 		}
// 	}
// });