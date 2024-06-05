<?php get_header(); ?>
<?php get_template_part('template-parts/global/nav/nav'); ?>

<main id="site-main">

<!-- BEGIN ////////////////// -->

<section class="heroe-vestiging m-0">
	<div class="container-wide">
		<div class="row">
			<div class="col">
			<img class="object-fit-cover w-100" height="600" src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php echo esc_attr(get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true)); ?>">
			</div>	
		</div>
	</div>
</section>

<section class="single-inhoud mt-64">
	<div class="container">
		<div class="row mb-32">
			<div class="col">
				<a class="text-black anif op" href="<?php echo get_post_type_archive_link(get_post_type(get_the_ID())) ?>"><i class="fa fa-arrow-left me-8" aria-hidden="true"></i><?php echo __('Terug naar overzicht','theme');?></a>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row gy-32">

			<div class="col col-lg-6">
				<h1 class="h-3 mb-16"><?php the_title(); ?></h1>
				<div class="adres">
					<?php $location = get_field('locatie');
					if( $location ): ?>
					<?php echo esc_attr($location['street_name']); ?>&nbsp;
					<?php echo esc_attr($location['street_number']); ?>,<br />
					<?php echo esc_attr($location['post_code']); ?>&nbsp;
					<?php echo esc_attr($location['city']); ?>
					<?php endif; ?>
					<?php $vest_data = [
					'email'     =>      get_field('email'),
					'telefoon'     =>      get_field('telefoon'),
					'route'     =>      get_field('route'),
					]; ?>
				</div>
				<a target="_blank" class="route text-primary mt-8 border-1 border-bottom d-inline-block anif op" href="<?php echo $vest_data['route'] ?>"><i class="fa fa-map me-4" aria-hidden="true"></i><?php _e( 'Plan je route', 'theme' ); ?></a>
			<div class="d-flex flex-column align-items-start gap-8 mt-8">
				<?php echo '<a class="item tel text-primary border-1 border-bottom d-inline-block anif op" href="' . strip_tel( $vest_data['telefoon'] ) . '"><i class="me-4 fa fa-phone" aria-hidden="true"></i>' . $vest_data['telefoon'] . '</a>'; ?>
				<a class="item mail text-primary border-1 border-bottom d-inline-block anif op text-lowercase" href="mailto:<?php echo $vest_data['email'] ?>"><i class="fa fa-envelope me-4" aria-hidden="true"></i><?php echo $vest_data['email'] ?></a>
			</div>
			</div>
			<div class="col col-lg-6">
				<h4 class="h-5 mb-16"><?php _e( 'Openingsuren', 'theme' ); ?></h4>
				<?php if ( have_rows('uren_winter') ) : ?>
				
					<ul>
						<?php while( have_rows('uren_winter') ) : the_row(); ?>
					
							<li class="item d-flex py-8 border-top border-gray-200 border-bottom-1">
								<div class="dag fw-700 w-25"><?php the_sub_field('dag'); ?>:</div>
								<div class="tekst"><?php the_sub_field('tekst'); ?></div>
							</li>
					
						<?php endwhile; ?>
					</ul>
				
				<?php endif; ?>
				
			</div>

		</div>
	</div>
</section>

<?php $gallery_images = get_field( 'fotos' ); ?>
<?php if ( $gallery_images ) :  ?>
<section class="section-vestiging-gallery">
	<div class="container">
		<div class="row">
			<div class="col">
            <div class="acf-justigal" id="vestgal">
                <?php foreach ( $gallery_images as $gallery_image ): ?>
                    <a href="<?php echo $gallery_image['url']; ?>" data-fancybox="gallery">
                    <img src="<?php echo $gallery_image['sizes']['xpl--xl']; ?>" alt="<?php echo $gallery_image['alt']; ?>" />
                    </a>
                <?php endforeach; ?>
					 <script>
						jQuery(document).ready(function($) {
							$('#vestgal').justifiedGallery({
								rowHeight : 130,
								lastRow : 'justify',
								margins : 10
							});
						});
					</script>
            </div>
			</div>	
		</div>
	</div>
</section>
<?php endif; ?>

<section class="bg-gray-100 py-lg-96 py-56 mx-lg-32 m-0">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="h-2 text-uppercase fw-300 title-line"><?php _e( 'Andere vestigingen', 'theme' ); ?></h2>
			</div>	
		</div>
		<div class="row mt-40">
			<div class="col">
				<?php get_template_part('template-parts/grids/vestiging/grid-vestiging-laatste'); ?>
			</div>
		</div>
	</div>
</section>

<!-- EINDE ////////////////// -->

</main>

<?php get_template_part('template-parts/global/footer'); ?>
<?php get_footer(); ?>