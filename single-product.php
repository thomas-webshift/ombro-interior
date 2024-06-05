<?php get_header(); ?>
<?php get_template_part('template-parts/global/nav/nav'); ?>

<?php $data = [
'inhoud'     =>      get_field('inhoud'),
'voordelen'     =>      get_field('voordelen'),
]; ?>

<?php $gallery_images = get_field( 'fotos' ); ?>

<?php
// Get the current product ID
$product_id = get_the_ID();

// Define the taxonomies you want to display
$taxonomies = array('categorie', 'gebruikstype', 'montagetype', 'type-dak');

// Initialize an empty array to store the term labels and names
$term_data = array();

// Loop through each taxonomy
foreach ($taxonomies as $taxonomy) {
    // Get the terms for the current product and taxonomy
    $terms = get_the_terms($product_id, $taxonomy);

    // Check if terms exist and if not, skip to the next taxonomy
    if ($terms && !is_wp_error($terms)) {
        $term_names = array();
        foreach ($terms as $term) {
            // Store the term names in an array
            $term_names[] = $term->name;
        }
        // Store the term names as a comma-separated string under the taxonomy key
        $term_data[$taxonomy] = implode(', ', $term_names);
    }
}
?>




<main id="site-main">

<!-- BEGIN ////////////////// -->

<section class="heroe-vestiging m-0">
	<div class="container-wide">
		<div class="row">
			<div class="col">
			<img class="object-fit-cover w-100 vh-mobile" height="600" src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php echo esc_attr(get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true)); ?>">
			</div>	
		</div>
	</div>
</section>

<section class="single-inhoud mt-lg-64 mt-56">
	<div class="container">
		<div class="row mb-32 mb-lg-48">
			<div class="col">
				<a class="text-black anif op" href="<?php echo get_post_type_archive_link(get_post_type(get_the_ID())) ?>"><i class="fa fa-arrow-left me-8" aria-hidden="true"></i><?php echo __('Terug naar overzicht','theme');?></a>
				<h1 class="h-1 mt-32"><?php the_title(); ?></h1>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row justify-content-between gy-32">

			<div class="col col-lg-6">
				<div class="uni"><div class="vink"><?php echo $data['inhoud']; ?></div></div>
				
				

				<?php if ( have_rows('downloads') ) : ?>

				<div class="downloads mt-32">
					<h3 class="fw-700 text-uppercase text-primary mb-8"><?php _e( 'Downloads', 'theme' ); ?></h3>

					<ul class="d-flex flex-column gap-8">

						<?php while( have_rows('downloads') ) : the_row(); ?>

							<li class="item">
							<?php
							$file = get_sub_field('bestand');
							if( $file ): ?>
								<i class="fa fa-file me-8" aria-hidden="true"></i><a target="_blank" class="text-black op anif" href="<?php echo $file['url']; ?>"><?php echo $file['title']; ?></a>
							<?php endif; ?>
								
							</li>

						<?php endwhile; ?>

					</ul>
				</div>

				<?php endif; ?>


			</div>
			<div class="col col-lg-5">
				
				<?php if ($gallery_images && count($gallery_images) <= 10): ?>				
				<?php if ( $gallery_images ) :  ?>
					<div class="acf-justigal mb-32" id="productimgs">
					<?php foreach ( $gallery_images as $gallery_image ): ?>
						<a class="anif op" href="<?php echo $gallery_image['url']; ?>" data-fancybox="gallery">
						<img src="<?php echo $gallery_image['sizes']['xpl--xl']; ?>" alt="<?php echo $gallery_image['alt']; ?>" />
						</a>
					<?php endforeach; ?>
					</div>

					<script>
						jQuery(document).ready(function($) {
							$('#productimgs').justifiedGallery({
								rowHeight : 70,
								lastRow : 'justify',
								margins : 10
							});
						});
					</script>

				<?php endif; ?>
				<?php endif; ?>
				
			<?php if ( have_rows('specificaties') ) : ?>

				<h3 class="fw-700 text-uppercase text-primary mb-8"><?php _e( 'Product specificaties', 'theme' ); ?></h3>
				
				<ul>

					<?php 
					// Output the term data in an unordered list
					if (!empty($term_data)) {
						foreach ($term_data as $taxonomy => $terms) {
							echo '<li class="item d-flex py-8 border-bottom border-gray-200 border-bottom-1"><div class="specificatie fw-700 w-50">' . esc_html(get_taxonomy($taxonomy)->labels->name) . ':</div><div class="w-50 omschrijving"> ' . esc_html($terms) . '</div></li>';
						}
					}
					?>

					<?php while( have_rows('specificaties') ) : the_row(); ?>
				
						<li class="item d-flex py-8 border-bottom border-gray-200 border-bottom-1">
							<div class="specificatie fw-700 w-50"><?php the_sub_field('specificatie'); ?>:</div>
							<div class="omschrijving w-50"><?php the_sub_field('omschrijving'); ?></div>
						</li>
				
					<?php endwhile; ?>


				</ul>
			
			<?php endif; ?>
				
			</div>

		</div>

		<?php if ($gallery_images && count($gallery_images) > 10): ?>				
			<div class="row mt-48">
				<div class="col">
				<?php if ( $gallery_images ) :  ?>
				<div class="acf-justigal mb-32" id="productimgs">
				<?php foreach ( $gallery_images as $gallery_image ): ?>
					<a class="anif op" href="<?php echo $gallery_image['url']; ?>" data-fancybox="gallery">
					<img src="<?php echo $gallery_image['sizes']['xpl--xl']; ?>" alt="<?php echo $gallery_image['alt']; ?>" />
					</a>
				<?php endforeach; ?>
				</div>

				<script>
					jQuery(document).ready(function($) {
						$('#productimgs').justifiedGallery({
							rowHeight : 100,
							lastRow : 'nojustify',
							margins : 10
						});
					});
				</script>

			<?php endif; ?>
				</div>
			</div>
		<?php endif; ?>			


	</div>
</section>

<?php $pt_id = icl_object_id(108, 'page', false,ICL_LANGUAGE_CODE); ?>
<?php $data = [
'text'     =>      get_field('tekst_cta_prod',$pt_id),
]; ?>

<section class="section-cta-product">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="text border-start border-primary border-1 text-primary h-3 ps-32"><?php _e( 'Benieuwd hoeveel een', 'theme' ); ?><strong> <?php the_title();?></strong> <?php _e( 'kost? ', 'theme' ); ?><br><br><div class="h-2"><?php echo $data['text']; ?></div></div>
			</div>	
		</div>
	</div>
</section>

<?php $data = [
'video'     =>      get_field('video'),
]; ?>

<?php if ( $data['video'] ) : ?>
<section class="section-product-video">
	<div class="container">
		<div class="row">
			<div class="col">
			<div class="builder-content-item builder-video vidresp">
            <?php echo $data['video']; ?>
         </div>
			</div>	
		</div>
	</div>
</section>
<?php endif; ?>

<?php get_template_part('template-parts/sections/section-merk-info-product'); ?>
<?php get_template_part('template-parts/sections/section-cta-global'); ?>

<!-- EINDE ////////////////// -->

</main>

<?php get_template_part('template-parts/global/footer'); ?>
<?php get_footer(); ?>