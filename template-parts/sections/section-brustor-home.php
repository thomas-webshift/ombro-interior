<?php $data = [
'titel'     =>      get_field('titel_bru'),
'tekst'     =>      get_field('tekst_bru'),
'foto'     =>      get_field('foto_bru'),
'logo'     =>      get_field('logo_bru'),
]; ?>

<section class="section-brustor-home py-56 py-lg-96 mb-0 bg-gray-100">
	<div class="container">
		<div class="row gy-32">
			<div class="col col-lg-6">
				<div class="pe-32">
					<h2 class="h-2 title-line"><?php echo $data['titel']; ?></h2>
            	<div class="text uni my-24"><div class="vink"><?php echo $data['tekst']; ?></div></div>
				</div>
			</div>
			<div class="col col-lg-6 position-relative">
				<div class="img-wrap position-relative">
					<div class="logo-wrap bg-gray-900 p-16 position-absolute start-0 bottom-0">
						<img width="70" src="<?php echo esc_url($data['logo']['url']); ?>" alt="<?php echo $data['logo']['alt']; ?>" class="media h-100 object-fit-cover"></img>
					</div>
               <img src="<?php echo esc_url($data['foto']['url']); ?>" alt="<?php echo $data['foto']['alt']; ?>" class="media mw-100"></img>
            </div>
			</div>
		</div>
	</div>
</section>