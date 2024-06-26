<?php $data = [
'titel'     =>      get_field('titel_hero'),
'tekst'     =>      get_field('tekst_hero'),
'foto'     =>      get_field('foto_hero'),
'patch'     =>      get_field('patch_hero'),
'link'     =>      get_field('link'),
'link_2'     =>      get_field('link_2'),
]; ?>

<section class="heroe-home position-relative overlay bg-image my-0 d-flex justify-content-center">

   <!-- Swiper -->
   <div class="swiper-container swiper-home w-100 h-100 z-0 position-absolute">
   <?php $gallery_images = get_field( 'galerij_hero' ); ?>
   <?php if ( $gallery_images ) :  ?>
      <div class="swiper-wrapper">
      <?php foreach ( $gallery_images as $gallery_image ): ?>
         <div class="swiper-slide bg-image d-block h-100 w-100 overlay" style="background-image:url('<?php echo $gallery_image['sizes']['xpl--xxl']; ?>');"></div>
      <?php endforeach; ?>
      </div>
   </div>
   <?php endif; ?>
   
   <div class="container position-relative">
      <div class="row align-items-center">
         <div class="col text-white text-center">
            <h1 class="h-1 text-white"><?php echo $data['titel']; ?></h1>
				<div class="text h-1 my-24"><?php echo $data['tekst']; ?></div>
            <div class="d-flex gap-8 flex-wrap justify-content-center">
            <a class="btn btn-primary" rel="scroll" href="<?php echo $data['link']['url']; ?>" class="btn"><?php echo $data['link']['title']; ?><i class="fa fa-chevron-down ms-8" aria-hidden="true"></i></a>
            <a class="btn btn-white" href="<?php echo $data['link_2']['url']; ?>" class="btn"><?php echo $data['link_2']['title']; ?></a>
            </div>
         </div>	
      </div>
   </div>
   <div class="vstack gap-4 position-absolute bottom-0 end-0 patch mb-96 mb-lg-24">
      <span class="text-white fw-700"><?php _e( 'Officiële partner', 'theme' ); ?></span>
      <img width="124" src="<?php echo esc_url($data['patch']['url']); ?>" alt="<?php echo $data['patch']['alt']; ?>" class="media">
   </div>
      <div class="swiper-arrows d-flex align-items-center gap-0 position-absolute bottom-0 start-50 translate-middle-x">
         <div class="home-prev bg-black p-24 px-32"><i class="fal text-white h-3 fa-chevron-left"></i></div>
         <div class="home-next bg-black p-24 px-32"><i class="fal text-white h-3 fa-chevron-right"></i></div>
      </div>
</section>