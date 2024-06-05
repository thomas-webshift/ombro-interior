<!--<?php //$idmeldpopup = icl_object_id(110, 'page', false,ICL_LANGUAGE_CODE); ?> -->
<?php if ( get_field( 'meld_popup_activeren', 110 ) == 1 ) { ?>
<div class="modal fade modal-lg" id="meldModal" tabindex="-1" aria-labelledby="meldModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
			<h1 class="modal-title fs-5" id="meldModalLabel"><?php the_field( 'meld_popup_titel', 110 ); ?></h1>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<?php the_field( 'meld_popup_tekst', 110 ); ?>
			</div>
		</div>
	</div>
</div>
<script>
	jQuery(document).ready(function($) {
		$('#meldModal .btn-close').click(function() { $("#meldModal").modal('hide');
		Cookies.set('melding-popup.hide','true', { expires: 7 });});
		if (Cookies.get('melding-popup.hide')) {$("#meldModal").modal('hide');} else{
			$("#meldModal").modal('show')
		}
	});
</script>
<?php } ?>



