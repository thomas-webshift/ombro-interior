

<div class="card-product ani op id-<?php the_id(); ?>">
  <a href="<?php echo get_permalink($post->ID);?>">
  <div class="img-wrap position-relative">
    <div class="bg-gray-100 p-16 position-absolute bottom-0 end-0">
    <?php
    // Get the terms for the current post in the loop
    $terms = get_the_terms(get_the_ID(), 'merk');

      // Check if terms are found
      if ($terms && !is_wp_error($terms)) {
        // Loop through each term
        foreach ($terms as $term) {
            // Get the ACF image field from the current term
            $image = get_field('logo', $term);

            // Check if the image field has a value
            if ($image) {
                // Output the image HTML
                echo '<img class="object-fit-contain" height="50" width="140" src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '" />';
            } else {
                // Output a message if the image field is empty
                echo 'No image found for this term.';
            }
        }
    } else {
        // Output a message if no terms are found
        echo 'No terms found.';
    } ?>
    </div>
    <img class="object-fit-cover w-100" height="400" src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php echo esc_attr(get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true)); ?>">
  </div>


    <div class="content mt-16">
      <div class="title mt-16 h-4 text-primary"><?php the_title(); ?></div>
      <?php if ( get_field('voordelen') ) : ?>
       <div class="voordelen mt-16 uni text-black"> <?php echo get_field('voordelen'); ?></div>
      <?php endif; ?>
      
    </div>
  </a>
</div>