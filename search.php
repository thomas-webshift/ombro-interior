<?php get_header(); ?>
<?php get_template_part('template-parts/global/nav/nav'); ?><!-- Inladen van header (navigatie) -->
<?php $post_type = get_post_type( $post->ID ); ?>

<main id="site-main"></main>

<section>
   <div class="container">
      <div class="row">
         <div class="col col-lg-6">
            <h1 class="h-2 mb-4"><?php _e( 'Zoeken', 'webshift-theme' ); ?></h1>
				<div class="zoekbalk"><?php get_search_form( ) ?></div>
         </div>	
      </div>
   </div>
</section>

<section class="inhoud">
   <div class="container">
      <?php get_template_part('template-parts/grids/search/grid-search'); ?>
   </div>
</section>

</main>

<!-- EINDE ZOEKPAGINA ////////////////// -->

<?php get_template_part('template-parts/global/footer'); ?><!-- Inladen footer -->
<?php get_footer(); ?><!-- wp-standaard footer -->