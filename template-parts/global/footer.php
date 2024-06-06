<?php 
$company = [
    'adres'     =>      get_field('adres','option'),
    'phone'     =>      get_field('tel','option'),
    'email'     =>      get_field('e-mailadres','option'),
    'vat'       =>      get_field('btw','option'),
]; ?>

<footer class="py-32">
	<div class="container">
		<div class="row gy-24 align-items-start">
			<div class="col">
				<nav class="footermenu">
					<?php wp_nav_menu( array( 'theme_location' => 'hoofdmenu_footer' ) ); ?>
				</nav>
				<div class="mt-24"><?php get_template_part('template-parts/parts/social-footer'); ?></div>
			</div>
			<div class="col">
				<nav class="footermenu">
					<?php wp_nav_menu( array( 'theme_location' => 'footermenu_2' ) ); ?>
				</nav>
			</div>
			<div class="col">
				<nav class="footermenu">
					<?php wp_nav_menu( array( 'theme_location' => 'footermenu_3' ) ); ?>
				</nav>
			</div>
		</div>
	</div>
</footer>

<?php get_template_part('template-parts/global/footer-copy'); ?>