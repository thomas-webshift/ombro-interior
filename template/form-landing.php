<?php /* Template Name: Form landing */ ?>
<?php get_header(); ?>
<?php get_template_part('template-parts/global/nav/nav'); ?>

<main id="site-main">

<!-- BEGIN INHOUD ////////////////// -->
			
<section class="">
	<div class="container">
		<div class="row align-items-start gy-32">
			<div class="col col-lg-6">
            <h1 class="h-1 mb-lg-48 mb-32"><?php the_title(); ?></h1>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?> 
				<?php endwhile;  wp_reset_query(); ?>
			</div>
			<div class="col col-lg-6">
				<img class="object-fit-contain mw-100" height="" src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php echo esc_attr(get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true)); ?>">
			</div>
		</div>
	</div>
</section>

<?php get_template_part('template-parts/sections/section-cta-global'); ?>

<!-- EINDE INHOUD ////////////////// -->

</main>

<?php get_template_part('template-parts/global/footer'); ?>
<?php get_footer(); ?>
