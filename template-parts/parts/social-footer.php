<div class="social d-flex align-items-center gap-8">
<?php if ( have_rows( 'social', 'option' ) ) : ?>
	<?php while ( have_rows( 'social', 'option' ) ) : the_row(); ?>
		<a class="anif op rounded-circle border border-1 border-black d-flex align-items-center justify-content-center" style="width:40px;height:40px; line-height:40px;" href="<?php the_sub_field( 'url' ); ?>" target="_blank">
			<i class="<?php the_sub_field( 'netwerk' ); ?> t-regular anif op text-black d-inline-block" title="<?php the_sub_field( 'netwerk' ); ?>"></i>
		</a>
	<?php endwhile; ?>
<?php endif; ?>
</div>