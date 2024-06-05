<?php /* Template Name: Virtueel */ ?>
<?php get_header(); ?>
<?php get_template_part('template-parts/global/nav/nav'); ?>

<main id="site-main">

<!-- BEGIN INHOUD ////////////////// -->
			
	<section class="">
      <div class="container">
         <div class="row">
            <div class="col">
               <h1 class="h-1 mb-48"><?php the_title(); ?></h1>
               <?php while ( have_posts() ) : the_post(); ?>
                  <?php the_content(); ?> 
               <?php endwhile;  wp_reset_query(); ?>
            </div>
         </div>
      </div>
   </section>

   <?php get_template_part('template-parts/sections/section-cta-global'); ?>

<!-- EINDE INHOUD ////////////////// -->

</main>

<?php get_template_part('template-parts/global/footer'); ?>
<?php get_footer(); ?>
