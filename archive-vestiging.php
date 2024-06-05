<?php get_header(); ?>
<?php get_template_part('template-parts/global/nav/nav'); ?>

<main id="site-main">

<!-- BEGIN ////////////////// -->

<section>
	<div class="container">
		<div class="row">
			<div class="col">
				<h1 class="h-1"><?php _e( 'Onze vestigingen', 'theme' ); ?></h1>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="row mb-48">
			<div class="col">
				<?php get_template_part('template-parts/parts/map-vestigingen'); ?>
			</div>	
		</div>
		<?php get_template_part('template-parts/grids/vestiging/grid-vestiging'); ?>
	</div>
</section>

<?php get_template_part('template-parts/sections/section-cta-global'); ?>

<!-- EINDE ////////////////// -->

</main>

<?php get_template_part('template-parts/global/footer'); ?>
<?php get_footer(); ?>