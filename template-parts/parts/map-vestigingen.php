<div id="map-canvas" style="width: 100%; height: 500px;"></div>

<script>
  var map;

  function initMap() {
    // Create a map object and specify the DOM element for display.
    map = new google.maps.Map(document.getElementById('map-canvas'), {
      zoom: 10, // Adjust the zoom level as needed
      center: {lat: 0, lng: 0}, // Initialize center with default values
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
    });

    // Array to store marker positions, corresponding post IDs, and marker icons
    var markerData = [];

    <?php
      $args = array(
        'post_type' => 'vestiging', // Adjust post type if needed
        'posts_per_page' => -1 // Retrieve all posts
      );
      $query = new WP_Query($args);
      if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
          // Get latitude and longitude values for each post
          $location = get_field('locatie');
          $latitude = $location['lat'];
          $longitude = $location['lng'];
          // Get marker icon URL from ACF field
          $marker_icon = the_field('mapicon', 'option');
    ?>
          // Create a marker for each post's location and store its position, post ID, and marker icon
          var marker = new google.maps.Marker({
            position: {lat: <?php echo $latitude; ?>, lng: <?php echo $longitude; ?>},
            map: map,
            title: '<?php the_title(); ?>', // Use post title as marker title
            icon: '<?php the_field('mapicon', 'option'); ?>' // Set marker icon URL
          });
          markerData.push({ position: marker.position, postId: <?php echo get_the_ID(); ?>, icon: '<?php echo $marker_icon; ?>' });

          // Add click event listener to each marker
          google.maps.event.addListener(marker, 'click', function() {
            window.location.href = '<?php the_permalink(); ?>'; // Redirect to the post URL
          });
    <?php
        endwhile;
        wp_reset_postdata();
      endif;
    ?>

    // Set the map center to the average of all marker positions
    if (markerData.length > 0) {
      var bounds = new google.maps.LatLngBounds();
      markerData.forEach(function(data) {
        bounds.extend(data.position);
      });
      map.setCenter(bounds.getCenter());
      map.fitBounds(bounds);
    }
  }

  function loadGoogleMaps() {
    var script = document.createElement('script');
    script.src = 'https://maps.googleapis.com/maps/api/js?key=<?php the_field( 'google_map_api', 'option' ); ?>&callback=initMap';
    script.defer = true;
    document.body.appendChild(script);
  }
  loadGoogleMaps();
</script>
