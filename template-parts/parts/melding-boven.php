<!--<?php //$idmeldboven = icl_object_id(110, 'page', false,ICL_LANGUAGE_CODE); ?> -->
<?php if ( get_field( 'meld_boven_activeren', 110 ) == 1 ) { ?>
<div class="offcanvas offcanvas-top" data-bs-backdrop="false" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
  <div class="container">
	<div class="offcanvas-header bg-white bs-small">
		<div class="offcanvas-title" id="offcanvasTopLabel"><?php the_field('meld_boven_tekst', 110); ?></div>
		<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	</div>
  </div>
</div>

<script>
	jQuery(document).ready(function($) {
		$('#offcanvasTop .btn-close').click(function() { $("#offcanvasTop").removeClass("show");
		Cookies.set('melding-boven.hide','true', { expires: 7 });});
		if (Cookies.get('melding-boven.hide')) {$("#offcanvasTop").removeClass("show");} else{
			$("#offcanvasTop").addClass("show");
		}
	});
</script>
<?php } ?>