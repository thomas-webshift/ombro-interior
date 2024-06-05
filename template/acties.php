<?php /* Template Name: Landing - acties */ ?>
<?php get_header(); ?>

<main id="site-main">

<!-- BEGIN INHOUD ////////////////// -->

<?php $data = [
'logo'     =>      get_field('logo'),
'titel'     =>      get_field('titel'),
'tekst'     =>      get_field('tekst'),
'visual'     =>      get_field('visual'),
]; ?>

<section class="">
   <div class="container">
      <div class="row cen">
			<div class="col cen">
				<div class="d-flex flex-column justify-content-center align-items-center">
				<img src="<?php echo esc_url($data['logo']['url']); ?>" alt="<?php echo $data['logo']['alt']; ?>" width="360px" class="media"></img>
				<h1 class="h-1 mt-32 text-primary text-center"><?php echo $data['titel']; ?></h1>
				</div>
			</div>
      </div>
   </div>
</section>

<section class="">
	<div class="container">
		<div class="row gy-32">
			<div class="col col-lg-4">
				<div class="uni">
					<div class="t-medium fw-700 vink">
						<?php echo $data['tekst']; ?>
					</div>
				</div>
			</div>	
			<div class="col col-lg-8">
				<div class="row gy-24">
					<?php $posts = get_field('vestigingen'); ?>
					<?php if ( $posts ): ?>
							<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
							<?php $vest_data = [
							'email'     =>      get_field('email'),
							'telefoon'     =>      get_field('telefoon'),
							'route'     =>      get_field('route'),
							]; ?>
								<div class="col col-lg-6">
									<div class="p-24 bg-gray-100">
										<h3 class="h-4 mb-16"><?php the_title(); ?></h3>
										<div class="adres">
											<?php $location = get_field('locatie');
											if( $location ): ?>
												<?php echo esc_attr($location['street_name']); ?>&nbsp;
												<?php echo esc_attr($location['street_number']); ?>,<br />
												<?php echo esc_attr($location['post_code']); ?>&nbsp;
												<?php echo esc_attr($location['city']); ?>
											<?php endif; ?>
										</div>
										<a target="_blank" class="route mt-8 text-primary d-inline-block anif op" href="<?php echo $vest_data['route'] ?>"><i class="fa fa-map me-4" aria-hidden="true"></i><?php _e( 'Plan je route', 'theme' ); ?></a>
										<div class="d-flex flex-column align-items-start gap-8 mt-16">
											<?php echo '<a class="item tel btn-primary" href="' . strip_tel( $vest_data['telefoon'] ) . '"><i class="me-4 fa fa-phone" aria-hidden="true"></i>' . $vest_data['telefoon'] . '</a>'; ?>
											<a class="item mail btn-black" href="mailto:<?php echo $vest_data['email'] ?>"><i class="fa fa-envelope me-4" aria-hidden="true"></i><?php echo $vest_data['email'] ?></a>
										</div>
									</div>
								</div>
							<?php endforeach; wp_reset_postdata(); ?>
					<?php endif; ?>
				</div>
			</div>  
		</div>
	</div>
</section>

<section class="">
	<div class="container">
		<div class="row">
			<div class="col">
				<img src="<?php echo esc_url($data['visual']['url']); ?>" alt="<?php echo $data['visual']['alt']; ?>" class="media">
            </img>
			</div>	
		</div>
	</div>
</section>

<?php get_template_part('template-parts/sections/section-brustor'); ?>
<?php get_template_part('template-parts/sections/section-acties-offerte'); ?>

<!-- EINDE INHOUD ////////////////// -->

</main>

<?php get_footer(); ?>
