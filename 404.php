<?php get_header(); ?>
<?php get_template_part('template-parts/global/nav/nav'); ?>


<!-- BEGIN 404 ////////////////// -->
<?php $achtegrond = get_field( 'achtegrond_404', 109 ); ?>
<div class="page-not-found position-relative min-vh-100 d-flex align-items-center justify-content-center py-32 overlay bg-image" style="background-image: url('<?php echo esc_url( $achtegrond['url'] ); ?>');">

    	<div class="container">
    		<div class="row">
    			<div class="col">
				 <h1 class="h-2 text-white"><?php the_field('titel_404', 109); ?></h1>
	        	<div class="tekst h-5 text-white mt-32"><?php the_field('tekst_404', 109); ?></div>
				  	<?php $link_404 = get_field( 'link_404', 109 ); ?>
					<?php if ( $link_404 ) : ?>
						<a  class="btn-white mt-32 left" href="<?php echo esc_url( $link_404['url'] ); ?>" target="<?php echo esc_attr( $link_404['target'] ); ?>"><i class="me-16 fa fa-arrow-left" aria-hidden="true"></i><?php echo esc_html( $link_404['title'] ); ?></a>
					<?php endif; ?>
				 </div>
	      </div>
    	</div>

</div>
<!-- EINDE 404 ////////////////// -->

<?php get_template_part('template-parts/global/footer'); ?>
<?php get_footer(); ?><!-- wp-standaard footer inladen -->