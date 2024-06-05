<?php $data = [
'titel'     =>      get_field('titel_bru',108),
'tekst'     =>      get_field('tekst_bru',108),
'foto'     =>      get_field('foto_bru',108),
]; ?>

<section class="section-brustor py-56 py-lg-72 bg-gray-100">
   <div class="container">
      <div class="row align-items-center gy-24">
         <div class="col col-lg-9">
            <h2 class="h-2 fw-300 title-line"><?php echo $data['titel']; ?></h2>
            <div class="text mt-24 pe-lg-32 pe-0"><?php echo $data['tekst']; ?></div>
         </div>	
         <div class="col col-lg-3">
            <img src="<?php echo esc_url($data['foto']['url']); ?>" alt="<?php echo $data['foto']['alt']; ?>" class="media mw-100">
            </img>
         </div>  
      </div>
   </div>
</section>