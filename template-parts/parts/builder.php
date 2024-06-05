<!-- Section -------------- -->
<?php if ( have_rows('sections') ) : ?>
<?php while( have_rows('sections') ) : the_row(); ?>

   <?php if ( get_sub_field('additional_classes_section') ) : ?>
      <section class="<?php echo get_sub_field('additional_classes_section'); ?>">
   <?php else: ?>
      <section>
   <?php endif; ?>

      <!-- Container -------------- -->
      <?php if ( have_rows('containers') ) : ?>
      <?php while( have_rows('containers') ) : the_row(); ?>
   
         <?php if ( get_sub_field('additional_classes_container') ) : ?>
            <div class="container <?php echo get_sub_field('additional_classes_container'); ?>">
         <?php else: ?>
            <div class="container">
         <?php endif; ?>
         
         <!-- Row -------------- -->
         <?php if ( have_rows('rows') ) : ?>
         <?php while( have_rows('rows') ) : the_row(); ?>
      
            <?php if ( get_sub_field('additional_classes_row') ) : ?>
               <div class="row <?php echo get_sub_field('row_justify-content'); ?> <?php echo get_sub_field('row_align-items'); ?> <?php echo get_sub_field('additional_classes_row'); ?>">
            <?php else: ?>
               <div class="row">
            <?php endif; ?>

               <!-- Column -------------- -->
               <?php if ( have_rows('columns') ) : ?>
               <?php while( have_rows('columns') ) : the_row(); ?>
            
                  <?php if ( get_sub_field('additional_classes_column') ) : ?>
                     <div class="col <?php echo get_sub_field('additional_classes_column'); ?>">
                  <?php else: ?>
                     <div class="col">
                  <?php endif; ?>

                     <?php get_template_part('template-parts/parts/builder-content'); ?>

                  </div>
               <?php endwhile; ?>
               <?php endif; ?>

            </div>
         <?php endwhile; ?>
         <?php endif; ?>

         </div>
      <?php endwhile; ?>
      <?php endif; ?>
      
   </div>
<?php endwhile; ?>
<?php endif; ?>
