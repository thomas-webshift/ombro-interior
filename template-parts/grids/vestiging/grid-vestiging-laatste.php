<?php 

$arg = array(
  'post_type' => 'vestiging',
  'post_status' => 'publish',
  'post__not_in' => array( $post->ID ),
  'orderby' => 'date',
  'order' => 'DESC',
  'posts_per_page' => -1,
); ?>

<?php $query = new WP_Query( $arg ); ?>

<?php if( $query->have_posts() ) : ?>

  <div class="row gy-32">
    <?php while( $query->have_posts() ) : $query->the_post(); ?>
      <div class="col-lg-6"><?php get_template_part('template-parts/grids/vestiging/card-vestiging'); ?></div>
    <?php endwhile; wp_reset_postdata(); ?>
  </div>

<?php else : ?>
  <span class="nothing"><?php _e( 'Momenteel niets weer te geven.', 'webshift-theme' ); ?></span>
<?php endif; ?>