<?php $pt_id = icl_object_id(108, 'page', false,ICL_LANGUAGE_CODE); ?>

<?php $data = [
'titel'     =>      get_field('titel_vir',$pt_id),
'tekst'     =>      get_field('tekst_vir',$pt_id),
'link'     =>      get_field('link_vir',$pt_id),
'foto'     =>      get_field('foto_vir',$pt_id),
]; ?>

<section class="section-virtueel mb-0 mx-lg-32 bg-gray-100">
   <div class="container py-56 py-lg-96">
      <div class="row g-0">
         <div class="col">
            <div class="p-24 p-lg-48 bg-black text-white">
               <h2 class="h-2 fw-300 text-uppercase text-white"><?php echo $data['titel']; ?></h2>
               <div class="text my-24 t-medium"><?php echo $data['tekst']; ?></div>
               <a class="fw-700 text-uppercase text-white anif op right d-inline-block" href="<?php echo $data['link']['url']; ?>" class="btn"><?php echo $data['link']['title']; ?><i class="fa fa-chevron-right ms-8" aria-hidden="true"></i></a>
            </div>
         </div>  
         <div class="col col-lg-6">
            <a href=<?php echo $data['link']['url']; ?>" class="anif op overflow-hidden position-relative overlay bg-image h-100 d-block vh-mobile" style="background-image:url('<?php echo esc_url($data['foto']['url']); ?>');">
					<i class="fa fa-play-circle h-1 text-white position-absolute top-50 start-50 translate-middle" aria-hidden="true"></i>
				</a>
         </div>
      </div>
   </div>
</section>