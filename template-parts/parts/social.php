<div class="social d-flex align-items-center gap-16">
<?php if ( have_rows( 'social', 'option' ) ) : ?>
	<?php while ( have_rows( 'social', 'option' ) ) : the_row(); ?>
		<a class="anif op" href="<?php the_sub_field( 'url' ); ?>" target="_blank">
			<i class="<?php the_sub_field( 'netwerk' ); ?> t-regular anif op text-gray-500" title="<?php the_sub_field( 'netwerk' ); ?>"></i>
		</a>
	<?php endwhile; ?>
<?php endif; ?>
</div>