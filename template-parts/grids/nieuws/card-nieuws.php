<div class="card-nieuws h-100 position-relative ani op id-<?php the_id(); ?>">
  <a class="h-100 d-flex flex-column" href="<?php echo get_permalink($post->ID);?>">
  <img class="object-fit-cover w-100 vh-mobile" height="240" src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php echo esc_attr(get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true)); ?>">
    <div class="content mt-16 flex-grow-1">
      <div class="date text-primary"><?php echo get_the_date('d F Y'); ?></div>
      <div class="title fw-400 h-4 mt-16 text-black"><?php the_title(); ?></div>
    </div>
    <span class="fw-700 text-uppercase text-black mt-16 d-inline-block" class="btn"><?php _e( 'Lees verder', 'theme' ); ?><i class="fa fa-arrow-right ms-8" aria-hidden="true"></i></span>
  </a>
</div>