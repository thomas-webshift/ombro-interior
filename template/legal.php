<?php /* Template Name: Legal */ ?>
<?php get_header(); ?>
<?php get_template_part('template-parts/global/nav/nav'); ?>
      
<main id="site-main">

<!-- BEGIN ////////////////// -->

<section>
	<div class="container">
		<div class="row">
			<div class="col col-lg-8 uni">
            <div class="mb-16 d-flex t-small text-gray-600"><div class="me-8"><?php _e( 'Update: ', 'theme' ); ?></div><?php echo get_the_modified_date('d F Y'); ?></div>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?> 
				<?php endwhile;  wp_reset_query(); ?>
			</div>
		</div>
	</div>
</section>

<!-- EINDE ////////////////// -->

</div>

<?php get_template_part('template-parts/global/footer'); ?>
<?php get_footer(); ?>