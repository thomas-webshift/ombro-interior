<?php $pt_id = 108; ?>
<?php $data = [
	'intro'     =>      get_field('intro_brands',$pt_id),
]; ?>

<section class="section-splash my-0 py-32 py-lg-112">
	<div class="container">
		<div class="row justify-content-center mb-32 mb-lg-56">
			<div class="col col-lg-12">
				<h2 class="h-2 title-line"><?php echo $data['intro']; ?></h2>
			</div>
		</div>
		<div class="row gy-24">
				<?php if ( have_rows('brands',$pt_id) ) : ?>
				
					<?php while( have_rows('brands',$pt_id) ) : the_row(); ?>

						<?php $rep = [
						'foto'     =>      get_sub_field('foto'),
						'logo'     =>      get_sub_field('logo'),
						'titel'     =>      get_sub_field('titel'),
						'tekst'     =>      get_sub_field('tekst'),
						'link'     =>      get_sub_field('link'),
						]; ?>
				
						<div class="col col-lg-6">
							<div class="card-splash anif op">
								<a href="<?php echo $rep['link']['url']; ?>" class="w-100 mediawrap position-relative d-inline-block">
									<img height="400" src="<?php echo esc_url($rep['foto']['url']); ?>" alt="<?php echo $rep['foto']['alt']; ?>" class="w-100 media object-fit-cover vh-mobile-fit"></img>
									<div class="w-100 position-absolute start-50 top-50 translate-middle d-flex align-items-center justify-content-center flex-column">
										<div class="bg-white p-16 align-items-center d-flex" style="width:150px; height:150px;"><img src="<?php echo esc_url($rep['logo']['url']); ?>" alt="<?php echo $rep['logo']['alt']; ?>" class="media w-100 object-fit-contain logo"></img></div>
										<span class="btn btn-white d-inline-block flex-grow-1 mt-32" class="btn"><?php echo $rep['link']['title']; ?></span>
									</div>
									
								</a>
							</div>
						</div>
				
					<?php endwhile; ?>
				
				<?php endif; ?>
				
		</div>
	</div>
</section>