<div class="card-vestiging h-100 position-relative id-<?php the_id(); ?>">
  <img class="object-fit-cover w-100" height="240" src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php echo esc_attr(get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true)); ?>">
    <div class="border p-16 border-gray-200">
    <h3 class="h-4 mb-16"><?php the_title(); ?></h3>
    <div class="adres">
      <?php $location = get_field('locatie');
      if( $location ): ?>
        <?php echo esc_attr($location['street_name']); ?>&nbsp;
        <?php echo esc_attr($location['street_number']); ?>,<br />
        <?php echo esc_attr($location['post_code']); ?>&nbsp;
        <?php echo esc_attr($location['city']); ?>
      <?php endif; ?>
      <?php $vest_data = [
        'email'     =>      get_field('email'),
        'telefoon'     =>      get_field('telefoon'),
        'route'     =>      get_field('route'),
      ]; ?>
    </div>
    <a target="_blank" class="route text-primary mt-8 border-1 border-bottom d-inline-block anif op" href="<?php echo $vest_data['route'] ?>"><i class="fa fa-map me-4" aria-hidden="true"></i><?php _e( 'Plan je route', 'theme' ); ?></a>
    <div class="d-flex flex-column align-items-start gap-8 mt-8">
      <?php echo '<a class="item tel text-primary border-1 border-bottom d-inline-block anif op" href="' . strip_tel( $vest_data['telefoon'] ) . '"><i class="me-4 fa fa-phone" aria-hidden="true"></i>' . $vest_data['telefoon'] . '</a>'; ?>
      <a class="item mail text-primary border-1 border-bottom d-inline-block anif op text-lowercase" href="mailto:<?php echo $vest_data['email'] ?>"><i class="fa fa-envelope me-4" aria-hidden="true"></i><?php echo $vest_data['email'] ?></a>
    </div>
    <a href="<?php echo get_permalink($post->ID);?>" class="fw-700 text-uppercase text-black mt-16 d-inline-block ani op" ><?php _e( 'Openingsuren', 'theme' ); ?><i class="fa fa-arrow-right ms-8" aria-hidden="true"></i></a>
    </div>
</div>