<?php get_header(); ?>
<?php get_template_part('template-parts/global/nav/nav'); ?>

<main id="site-main">

<!-- BEGIN ////////////////// -->

<section>
	<div class="container">
		<div class="row">
			<div class="col col-lg-8">
				<h1 class="h-1"><?php _e( 'Op zoek naar inspiratie volg hier alle nieuwtjes …', 'theme' ); ?></h1>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<?php get_template_part('template-parts/grids/nieuws/grid-nieuws'); ?>
	</div>
</section>

<?php get_template_part('template-parts/sections/section-cta-global'); ?>

<!-- EINDE ////////////////// -->

</main>

<?php get_template_part('template-parts/global/footer'); ?>
<?php get_footer(); ?>