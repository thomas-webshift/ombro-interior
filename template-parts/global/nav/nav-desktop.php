<div class="nav-top bg-primary py-8 d-none d-lg-block">
	<div class="container">
		<div class="col d-flex justify-content-end">
			<?php wp_nav_menu( array( 'theme_location' => 'topmenu' ) ); ?>
		</div>
	</div>
</div>
<div class="nav-primary nav-desktop py-24 d-none d-lg-block border border-bottom-1 border-gray-100 position-relative">
	<div class="container">
		<div class="row align-items-center justify-content-between">

			<div class="col-auto">
				<!-- logo -->
				<div class="nav-desktop-logo">
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
				<div class="menuwrap d-flex flex-column align-items-end gap-24">

					<div class="nav-meta d-flex align-items-center gap-24">
						<nav class="brandmenu">
							<?php wp_nav_menu( array( 'theme_location' => 'brandmenu' ) ); ?>
						</nav>
						<?php get_template_part('template-parts/parts/social'); ?>
						<div class="taalwissellaar"><?php do_action('icl_language_selector'); ?></div>
					</div>
					<!-- content -->
					<div class="nav-desktop-content">
						<nav class="hoofdmenu">
							<?php wp_nav_menu( array( 'theme_location' => 'hoofdmenu' ) ); ?>
						</nav>
					</div>			
				</div>
			</div>

		</div>
	</div>
</div>