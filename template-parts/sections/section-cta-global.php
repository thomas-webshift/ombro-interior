<?php $pt_id = icl_object_id(108, 'page', false,ICL_LANGUAGE_CODE); ?>

<?php $data = [
'titel'     =>      get_field('titel_cta',$pt_id),
'tekst'     =>      get_field('tekst_cta',$pt_id),
'link'     =>      get_field('link_cta',$pt_id),
]; ?>

<section class="section-cta-global bg-primary m-0 mx-lg-32">
   <div class="container text-white py-24 py-lg-48">
      <div class="row align-items-end gy-24">
         <div class="col">
            <h2 class="h-2 text-white fw-800"><?php echo $data['titel']; ?></h2>
				<div class="text h-4"><?php echo $data['tekst']; ?></div>
         </div>	
         <div class="col col-auto">
            <a class="btn btn-black" href="<?php echo $data['link']['url']; ?>" class="btn"><?php echo $data['link']['title']; ?></a>
         </div>  
      </div>
   </div>
</section>