<?php 

$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$aantal = 9;

$arg = array(
  'post_type' => 'realisatie',
  'post_status' => 'publish',
  'orderby' => 'date',
  'order' => 'DESC',
  'posts_per_page' => $aantal,
  'paged' => $paged
); ?>

<?php $query = new WP_Query( $arg ); ?>

<?php if( $query->have_posts() ) : ?>

  <div class="row gy-48">
    <?php while( $query->have_posts() ) : $query->the_post(); ?>
      <div class="col-lg-4"><?php get_template_part('template-parts/grids/realisatie/card-realisatie'); ?></div>
    <?php endwhile; wp_reset_postdata(); ?>
  </div>

  <?php if ($aantal < $query->found_posts): ?>
    <div class="grid-pag mt-lg-48 mt-32">
      <?php 
          echo paginate_links( array(
              'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
              'total'        => $query->max_num_pages,
              'current'      => max( 1, get_query_var( 'paged' ) ),
              'format'       => '?paged=%#%',
              'show_all'     => false,
              'type'         => 'plain',
              'end_size'     => 2,
              'mid_size'     => 1,
              'prev_next'    => true,
              'prev_text'    => sprintf( '<i></i> %1$s', __( 'Terug', 'text-domain' ) ),
              'next_text'    => sprintf( '%1$s <i></i>', __( 'Verder', 'text-domain' ) ),
              'add_args'     => false,
              'add_fragment' => '',
          ) );
      ?>
    </div>
  <?php endif; ?>

<?php else : ?>
  <span class="nothing"><?php _e( 'Momenteel niets weer te geven.', 'webshift-theme' ); ?></span>
<?php endif; ?>