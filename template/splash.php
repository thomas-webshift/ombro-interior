<?php /* Template Name: Splash */ ?>
<?php get_header(); ?>
<?php get_template_part('template-parts/global/nav/nav-splash'); ?>

<main id="site-main">

<!-- BEGIN INHOUD ////////////////// -->

<section class="section-splash my-0 py-56 py-lg-56">
	<div class="container">
		<div class="row gy-24">
				<?php if ( have_rows('brands') ) : ?>
				
					<?php while( have_rows('brands') ) : the_row(); ?>

						<?php $rep = [
						'foto'     =>      get_sub_field('foto'),
						'logo'     =>      get_sub_field('logo'),
						'titel'     =>      get_sub_field('titel'),
						'tekst'     =>      get_sub_field('tekst'),
						'link'     =>      get_sub_field('link'),
						]; ?>
				
						<div class="col col-lg-4">
							<div class="card-splash anif op">
								<a href="<?php echo $rep['link']['url']; ?>" class="w-100 mediawrap position-relative d-inline-block">
									<img height="460" src="<?php echo esc_url($rep['foto']['url']); ?>" alt="<?php echo $rep['foto']['alt']; ?>" class="w-100 media object-fit-cover vh-mobile"></img>
									<div class="w-100 position-absolute start-50 top-50 translate-middle d-flex align-items-center justify-content-center flex-column">
										<img width="150" height="150" src="<?php echo esc_url($rep['logo']['url']); ?>" alt="<?php echo $rep['logo']['alt']; ?>" class="media h-100 object-fit-contain"></img>
										<span class="btn btn-white d-inline-block flex-grow-1 mt-32" class="btn"><?php echo $rep['link']['title']; ?></span>
									</div>
									
								</a>
							</div>
						</div>
				
					<?php endwhile; ?>
				
				<?php endif; ?>
				
		</div>
	</div>
</section>
<?php get_template_part('template-parts/sections/section-cta-global'); ?>

<!-- EINDE INHOUD ////////////////// -->

</main>

<?php get_template_part('template-parts/global/footer-copy'); ?>
<?php get_footer(); ?>
