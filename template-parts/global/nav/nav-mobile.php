<div class="nav-primary nav-mobile border border-bottom-1 border-gray-100 d-lg-none py-16">
	<div class="container">
		<div class="row align-items-center justify-content-between">

			<div class="col-auto">
				<!-- logo -->
				<div class="nav-mobile-logo">
					<a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo('name'); ?>">
						<?php if ( get_field('logo', 'option') ) : ?>
							<img src="<?php the_field('logo', 'option'); ?>" alt="<?php echo get_bloginfo(); ?>">
						<?php else: ?>
							<?php bloginfo('name'); ?>
						<?php endif; ?>
					</a>
				</div>
			</div>

			<div class="col-auto">
				<!-- content -->
				<div class="nav-mobile-content">
					<div class="hamburger d-flex align-items-center justify-content-center pointer"><span class="lijnen"></span></div>
				</div>
			</div>
			
		</div>
	</div>
</div>

<div class="nav-mobile-menu py-24 w-100 position-absolute bg-gray-100">
	<div class="container">
		<nav class="hoofdmenu">
			<?php wp_nav_menu( array( 'theme_location' => 'hoofdmenu' ) ); ?>
		</nav>
	</div>
</div>