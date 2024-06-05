<div class="copyrights">
	<div class="container border-top border-top-1 border-gray-500 py-32">
		<div class="row gy-16 align-items-center justify-content-between">
			<div class="col col-auto">
				<div class="klant">© <?php echo get_bloginfo( 'name' ); ?> <?php echo date("Y"); ?></div>
			</div>
			<div class="col col-auto">
				<nav class="legalmenu">
					<?php wp_nav_menu( array( 'theme_location' => 'legalmenu' ) ); ?>
				</nav>
			</div>
			<div class="col col-auto ftr-icons d-flex align-items-center gap-16">
				<a class="creator-icon anif op text-black" target="_blank" href="https://https://jakobusencorneel.be/.be" title="Jakobus en corneel"><?php _e( 'Jakobus en Corneel', 'theme' ); ?></a>
				<a class="google anif op" target="_blank" href="https://policies.google.com/privacy" title="Google reCAPTCHA"><?php get_template_part('template-parts/svg/google-icoon'); ?></a>
			</div>
		</div>
	</div>
</div>