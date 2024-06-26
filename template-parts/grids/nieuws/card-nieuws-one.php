<div class="card-nieuws ani op id-<?php the_id(); ?>">
  <a href="<?php echo get_permalink($post->ID);?>">
    <div class="content p-lg-48 p-32 bg-primary text-white">
      <div class="date"><?php echo get_the_date('d F Y'); ?></div>
      <div class="title h-4 fw-700 my-24 fw-500"><?php the_title(); ?></div>
      <?php if ( get_field('uitgelichte_tekst') ) : ?>
        <div class="uitgelicht t-medium fw-500 d-none"><?php echo get_field('uitgelichte_tekst'); ?></div>
      <?php endif; ?>
      <span class="text-white text-uppercase fw-700 mt-24 d-inline-block"><?php _e( 'Lees verder', 'theme' ); ?><i class="fa fa-arrow-right ms-8" aria-hidden="true"></i></span>
    </div>
  </a>
</div>