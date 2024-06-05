<?php $data = [
'tekst'     =>      get_field('tekst_over'),
'foto'     =>      get_field('foto_over'),
'link'     =>      get_field('link_over'),
]; ?>

<section class="section-over-home pb-lg-48">
	<div class="container">
		<div class="row gy-32">
         <div class="col col-lg-5 position-relative">
				<div class="wrap position-relative h-100">
               <img src="<?php echo esc_url($data['foto']['url']); ?>" alt="<?php echo $data['foto']['alt']; ?>" class="media h-100 object-fit-cover position-absolute end-0 top-0"></img>
            </div>
			</div>
			<div class="col col-lg-7">
            <div class="py-lg-64 ps-lg-32">
               <div class="text uni mb-24"><?php echo $data['tekst']; ?></div>
               <a class="btn btn-primary" href="<?php echo $data['link']['url']; ?>" class="btn"><?php echo $data['link']['title']; ?></a>
            </div>
			</div>
		</div>
	</div>
</section>