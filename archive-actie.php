<?php get_header(); ?>
<?php get_template_part('template-parts/global/nav/nav'); ?>

<main id="site-main">

<!-- BEGIN ////////////////// -->

<section>
	<div class="container">
		<div class="row">
			<div class="col">
				<h1 class="h-1"><?php _e( 'Acties', 'theme' ); ?></h1>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<?php get_template_part('template-parts/grids/acties/grid-acties'); ?>
	</div>
</section>

<?php get_template_part('template-parts/sections/section-acties-offerte'); ?>
<?php get_template_part('template-parts/sections/section-brustor'); ?>
<?php get_template_part('template-parts/sections/section-voetnoot-acties'); ?>
<?php get_template_part('template-parts/sections/section-cta-global'); ?>

<!-- EINDE ////////////////// -->

</main>

<?php get_template_part('template-parts/global/footer'); ?>
<?php get_footer(); ?>