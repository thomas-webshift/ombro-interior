<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=<?php the_field( 'google_map_api', 'option' ); ?>"></script> <!-- Vergeet geen API-sleutel aan te maken! (js?key=) -->

<script>

  	google.maps.event.addDomListener(window, 'load', init);

  	function init() {
    		var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
    		var isDraggable = w > 1024 ? true : false;

    		var mapOptions = {

		      zoom: <?php the_field('map_zoom', 'option'); ?>,
		      scrollwheel: false,
		      draggable: isDraggable,
		      center: new google.maps.LatLng(<?php the_field('map_lat', 'option'); ?>, <?php the_field('map_long', 'option'); ?>),

		      // Tussen de twee rechte haakjes kan je de mapstijl aanpassen
		      // Nieuwe stijlen vind je op snazzymaps.com
		      styles:  [
		        {"featureType":"landscape","elementType":"labels","stylers":[{"visibility":"off"}]},
		        {"featureType":"landscape","elementType":"all","stylers":[{"color":"#e9e9e9"}]},
		        {"featureType":"transit","elementType":"labels","stylers":[{"visibility":"off"}]},
		        {"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},
		        {"featureType":"water","elementType":"labels","stylers":[{"visibility":"off"}]},
		        {"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"stylers":[{"hue":"#000"},{"saturation":-100},{"lightness":10}]},
		        {"featureType":"road","elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"lightness":24}]},
		        {"featureType":"road","elementType":"geometry","stylers":[{"lightness":10}]}
		      ]

    		};

	    	var mapElement = document.getElementById('googlemap');
	    	var map = new google.maps.Map(mapElement, mapOptions);

		marker = new google.maps.Marker({
		      map:map,
		      clickable: false,
		      position: new google.maps.LatLng(<?php the_field('map_lat', 'option'); ?>, <?php the_field('map_long', 'option'); ?>),
		      icon: '<?php the_field('mapicon', 'option'); ?>'
		});
  	}

</script>
<div id="googlemap"></div>