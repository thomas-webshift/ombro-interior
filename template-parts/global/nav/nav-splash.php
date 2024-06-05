<div class="nav-splash nav-top pt-24 pt-lg-56 d-lg-block">
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="col col-auto">
				<?php wp_nav_menu( array( 'theme_location' => 'topmenu' ) ); ?>
			</div>
			<div class="col col-auto d-none">
				<nav class="brandmenu">
					<?php wp_nav_menu( array( 'theme_location' => 'brandmenu' ) ); ?>
				</nav>
			</div>
			<div class="col col-auto d-flex align-items-center justify-content-end gap-24">
				<?php get_template_part('template-parts/parts/social'); ?>
				<div class="taalwissellaar"><?php do_action('icl_language_selector'); ?></div>
			</div>
		</div>
	</div>
</div>