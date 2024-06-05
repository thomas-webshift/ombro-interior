<?php $pt_id = icl_object_id(108, 'page', false,ICL_LANGUAGE_CODE); ?>

<?php $data = [
'tekst'     =>      get_field('tekst_bro',$pt_id),
'img'     =>      get_field('img_bro',$pt_id),
]; ?>

<section id="brochure" class="section-brochure m-0 bg-primary">
   <div class="container text-white bg-primary py-24 py-lg-56">
      <div class="row align-items-center justify-content-center gy-24">
      <div class="col col-lg-auto position-relative">
            <img src="<?php echo esc_url($data['img']['url']); ?>" alt="<?php echo $data['img']['alt']; ?>" class="media object-fit-contain" height="240">
         </div>  
         <div class="col col-lg-6">
            <h2 class="h-1 text-white fw-800"><?php echo $data['tekst']; ?></h2>
            <button type="button" class="btn btn-black mt-24" data-bs-toggle="modal" data-bs-target="#exampleModal">
				<?php _e( 'Download brochure', 'theme' ); ?>
				</button>
         </div>	
         
      </div>
   </div>
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-header">
         <h3 class="modal-title fs-5" id="exampleModalLabel"><?php _e( 'Download brochure', 'theme' ); ?></h3>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
         <?php gravity_form(9, false, false, false, '', true); ?>
         </div>
      </div>
   </div>
</div>