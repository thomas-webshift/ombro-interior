<?php /* Template Name: Landing - acties - bedankt */ ?>
<?php get_header(); ?>

<main id="site-main">

<!-- BEGIN INHOUD ////////////////// -->

<section class="">
	<div class="container">
		<div class="row">
			<div class="col cen">
				<div class="h-2 text-success">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?> 
				<?php endwhile;  wp_reset_query(); ?>
				</div>
			</div>	
		</div>
	</div>
</section>

<!-- EINDE INHOUD ////////////////// -->

</main>

<?php get_footer(); ?>
