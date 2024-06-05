<?php if( have_posts() ) : ?>

   <div class="row mb-4">
      <div class="meta">
         <span class=""><?php _e( 'In totaal', 'theme' ); ?> <strong><?php echo $wp_query->found_posts; ?> <?php _e( 'resultaten', 'theme' ); ?></strong> <?php _e( 'gevonden', 'theme' ); ?>.</span>
      </div>
   </div>

  <div class="row g-24">
   <?php while ( have_posts() ) : the_post(); ?>
      <div class="col-lg-4"><?php get_template_part('template-parts/grids/search/card-search'); ?></div>
      <?php endwhile; ?>
  </div>

  <?php
   global $wp_query;
   $total_results = $wp_query->found_posts;
   ?>

   <?php //echo $total_results ?>

   <?php $aantal = 12; ?>
   <?php if ($aantal < $total_results): ?>

    <div class="grid-pag cen mt-5">
      <?php 
          echo paginate_links( array(
              'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
              'total'        => $wp_query->max_num_pages,
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
  <span class="nothing mt-5"><?php _e( 'Momenteel niets weer te geven.', 'webshift-theme' ); ?></span>
<?php endif; ?>