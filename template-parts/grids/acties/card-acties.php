<div class="card-acties h-100 d-flex flex-column position-relative id-<?php the_id(); ?>">
  <img class="object-fit-cover w-100" height="300" src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php echo esc_attr(get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true)); ?>">
    <div class="content flex-grow-1 bg-gray-100 p-16 p-lg-24">
      <div class="title fw-700 text-primary h-3"><?php the_title(); ?></div>
      <?php if ( get_field('intro') ) : ?>
        <div class="mt-16"><?php echo get_field('intro'); ?></div>
      <?php endif; ?>
      <div class="actions hstack flex-wrap mt-32 gap-16">
        <a class="btn border-1 border-bottom border-black ani op fw-700 text-black" href="<?php echo get_permalink($post->ID);?>"><?php _e( 'Meer info', 'theme' ); ?></a>
        <a class="btn border-1 border-bottom border-black ani op fw-700 text-black" rel="scroll" href="#offerte"><?php _e( 'Offerte aanvraag', 'theme' ); ?></a>
    </div>
      
    </div>
    
</div>