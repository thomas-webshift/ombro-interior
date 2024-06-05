<section>
	<div class="container">
		<div class="row justify-content-between align-items-end mb-48 gy-32">
			<div class="col col-lg-7">
				<h2 class="h-2 title-line"><?php _e( 'OP ZOEK NAAR INSPIRATIE VOLG HIER ALLE NIEUWTJES …', 'theme' ); ?></h2>
			</div>
			<div class="col col-auto">
				<a class="btn-primary" href="<?php echo get_post_type_archive_link('nieuws'); ?>"><?php _e( 'Meer nieuws', 'theme' ); ?><i class="ms-16 fa fa-chevron-right" aria-hidden="true"></i></a>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<?php get_template_part('template-parts/grids/nieuws/grid-nieuws-laatste'); ?>
			</div>
		</div>
	</div>
</section>