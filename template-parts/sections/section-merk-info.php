<?php
if (is_tax()) {
    $taxonomy = get_queried_object();
}
?>

<?php $data = [
'logo'     =>      get_field('logo_merk',$taxonomy),
'naam'     =>      get_field('naam_merk',$taxonomy),
'tekst'     =>      get_field('tekst_merk',$taxonomy),
]; ?>

<?php if ( $data['logo'] ) : ?>
<section class="section-merk-info">
   <div class="container bg-gray-100 p-lg-48 p-32">
      <div class="row align-items-center">
         <div class="col col-lg-3 justify-content-center">
            <img src="<?php echo esc_url($data['logo']['url']); ?>" alt="<?php echo $data['logo']['alt']; ?>" class="media object-fit-contain w-100" height="40">
         </div>	
         <div class="col col-lg-9">
            <h2 class="h-3 text-uppercase fw-300 title-line"><?php echo $data['naam']; ?> <?php
            // Output the current term name
            echo single_term_title('', false);
            ?></h2>
            <div class="text mt-24"><?php echo $data['tekst']; ?></div>
         </div>  
      </div>
   </div>
</section>
<?php endif; ?>