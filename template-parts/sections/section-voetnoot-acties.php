<?php $data = [
'voetnoot'     =>      get_field('tekst_vt_acties',108),
]; ?>

<?php if ( $data['voetnoot'] ) : ?>
<section class="section-voetnoot-acties">
   <div class="container">
      <div class="row">
         <div class="col">
         <div class="text t-tiny mt-24"><?php echo $data['voetnoot']; ?></div>
         </div>	
      </div>
   </div>
</section>
<?php endif; ?>