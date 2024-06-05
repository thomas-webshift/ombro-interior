<?php $data = [
'titel'     =>      get_field('titel'),
'tekst'     =>      get_field('tekst'),
]; ?>

<section class="section-over">
   <div class="container">
      <div class="row">
         <div class="col">
            <h2 class="h-1"><?php echo $data['titel']; ?></h2>
            <div class="text mt-24"><?php echo $data['tekst']; ?></div>
         </div>  
      </div>
   </div>
</section>