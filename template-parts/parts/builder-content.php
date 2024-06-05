<div class="builder-content d-flex flex-column gap-32">
<?php if ( have_rows( 'content' ) ): ?>
   <?php while ( have_rows( 'content' ) ) : the_row(); ?>
      <!-- Text -------------- -->
      <?php if ( get_row_layout() == 'text' ) : ?>
         <div class="builder-content-item builder-text uni">
            <?php the_sub_field( 'text' ); ?>
         </div>
      <!-- Photo -------------- -->
      <?php elseif ( get_row_layout() == 'photo' ) : ?>
         <div class="builder-content-item builder-photo">
            <?php $photo = get_sub_field( 'photo' ); ?>
            <img class="w-100" src="<?php echo $photo['sizes']['large']; ?>" alt="<?php echo $photo['alt']; ?>" />
            <?php if( $photo['caption'] ): ?><span class="t-tiny d-block border border-1 border-top-0 border-gray-400 py-8 px-16"><?php echo $photo['caption']; ?></span><?php endif; ?>
         </div>
      <!-- Buttons -------------- -->
      <?php elseif ( get_row_layout() == 'buttons' ) : ?>
         <div class="builder-content-item builder-buttons">
            <?php $part_data = [
            'btns'     =>      get_sub_field('btns')
            ]; ?>
            <?php if( $part_data['btns'] ): ?>
            <div class="actions spacer narrow">
               <?php foreach($part_data['btns'] as $i=>$btn): ?>
                  <a class="<?php echo $btn['type']; ?>" href="<?php echo $btn['btn']['url']; ?>" class="btn"><?php echo $btn['btn']['title']; ?></a>
               <?php endforeach; ?>
            </div>
            <?php endif; ?>
         </div>
      <!-- Gallery -------------- -->
      <?php elseif ( get_row_layout() == 'gallery' ) : ?>
         <div class="builder-content-item builder-gallery">
            <?php $gallery_images = get_sub_field( 'gallery' ); ?>
            <div class="acf-justigal">
               <?php if ( $gallery_images ) :  ?>
                  <?php foreach ( $gallery_images as $gallery_image ): ?>
                     <a href="<?php echo $gallery_image['url']; ?>" data-fancybox="gallery">
                        <img src="<?php echo $gallery_image['sizes']['large']; ?>" alt="<?php echo $gallery_image['alt']; ?>" />
                     </a>
                  <?php endforeach; ?>
               <?php endif; ?>
            </div>
         </div>
      <!-- Video -------------- -->
      <?php elseif ( get_row_layout() == 'video' ) : ?>
         <div class="builder-content-item builder-video vidresp">
            <?php the_sub_field( 'video' ); ?>
         </div>
      <?php endif; ?>
   <?php endwhile; ?>
<?php endif; ?>
</div>