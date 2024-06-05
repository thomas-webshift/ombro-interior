<?php get_header(); ?>
<?php get_template_part('template-parts/global/nav/nav'); ?>

<main id="site-main">

<!-- BEGIN ////////////////// -->

<section class="single-inhoud mt-0">
	<div class="container-wide">
      <div class="row">
         <img class="object-fit-cover vh-mobile" height="600" src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php echo esc_attr(get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true)); ?>">
      </div>
   </div>
	<div class="container">
		<div class="row mb-48 mt-48 justify-content-center">
			<div class="col col-lg-8">
				<a class="text-black" href="<?php echo get_post_type_archive_link(get_post_type(get_the_ID())) ?>"><i class="fa fa-arrow-left me-8" aria-hidden="true"></i><?php echo __('Terug naar overzicht','theme');?></a>
				<h1 class="h-1 my-16"><?php single_post_title(); ?></h1>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row justify-content-center">

			<div class="col col-lg-8">
				<?php if ( get_field('intro') ) : ?>
					<div class="uni mb-32"><?php echo get_field('intro'); ?></div>
				<?php endif; ?>
				<?php if ( get_field('tekst') ) : ?>
					<div class="uni"><?php echo get_field('tekst'); ?></div>
				<?php endif; ?>
				
			</div>

		</div>
	</div>
</section>

<?php get_template_part('template-parts/sections/section-nieuws-andere'); ?>
<?php get_template_part('template-parts/sections/section-cta-global'); ?>

<!-- EINDE ////////////////// -->

</main>

<?php get_template_part('template-parts/global/footer'); ?>
<?php get_footer(); ?>