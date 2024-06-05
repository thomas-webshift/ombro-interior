<?php get_header(); ?>
<?php get_template_part('template-parts/global/nav/nav'); ?>
      
<main id="site-main">

<!-- BEGIN ////////////////// -->

<section>
	<div class="container">
		<div class="row">
			<div class="col">
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