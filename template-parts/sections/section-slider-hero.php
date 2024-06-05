<?php 

$arg = array(
  'post_type' => 'nieuws',
  'post_status' => 'publish',
  'post__not_in' => array( $post->ID ),
  'orderby' => 'date',
  'order' => 'DESC',
  'tax_query' => array(
    array(
      'taxonomy' => 'status_post',
      'field' => 'slug',
      'terms' => array( 'uitgelicht' ),
      'operator' => 'IN'
    ),
  ),
  'posts_per_page' => 1,
); ?>
<?php $query = new WP_Query( $arg ); ?>

<?php $gallery_images = get_field( 'slider' ); ?>
<?php if ( $gallery_images ) :  ?>
<section class="section-slider-hero m-0">
	<div class="container-fluid g-0 z-1">
		<div class="row">
			<div class="col">
				<!-- Swiper -->
				<div class="swiper-container swiper-heroe">
					<div class="swiper-wrapper">
               <?php foreach ( $gallery_images as $gallery_image ): ?>
						<div class="swiper-slide bg-image d-block vh-mobile" style="background-image:url('<?php echo $gallery_image['sizes']['xpl--xxl']; ?>');"></div>
               <?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
   <div class="container" style="height:0;">
		<?php if( $query->have_posts() ) : ?>
			<div class="row trans-neg z-3 position-relative">
				<div class="col col-lg-5 offset-lg-2 offset-0 d-flex justify-content-end">
					<!-- Arrows -->
					<div class="swiper-arrows d-flex align-items-center gap-0 position-relative" style="right:66px; top:-1px;">
						<div class="heroe-prev bg-black p-24 px-32"><i class="fal text-white h-3 fa-chevron-left"></i></div>
						<div class="heroe-next bg-black p-24 px-32"><i class="fal text-white h-3 fa-chevron-right"></i></div>
					</div>
				</div>
			</div>
	   <?php else: ?>
			<div class="row trans-neg z-3 position-relative">
				<div class="col d-flex justify-content-start">
					<!-- Arrows -->
					<div class="swiper-arrows d-flex align-items-center gap-0 position-relative" style="top:-1px;">
						<div class="heroe-prev bg-black p-24 px-32"><i class="fal text-white h-3 fa-chevron-left"></i></div>
						<div class="heroe-next bg-black p-24 px-32"><i class="fal text-white h-3 fa-chevron-right"></i></div>
					</div>
				</div>
			</div>
		<?php endif; ?>
   </div>
</section>

<?php if( $query->have_posts() ) : ?>
<section class="section-nieuws-one mb-0 position-relative z-2" style="margin-top: -180px;">
   <div class="container">
      <div class="row justify-content-end">
         <?php while( $query->have_posts() ) : $query->the_post(); ?>
            <div class="col-lg-6"><?php get_template_part('template-parts/grids/nieuws/card-nieuws-one'); ?></div>
         <?php endwhile; wp_reset_postdata(); ?>
      </div>
   </div>
</section>
<?php endif; ?>

<?php endif; ?>