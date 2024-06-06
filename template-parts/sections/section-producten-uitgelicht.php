<section id="producten" class="section-producten-uitgelicht">
   <div class="container">
      <div class="row mb-32">
         <h2 class="h-2 title-line"><?php _e( 'Ontdek ons gamma aan...', 'theme' ); ?></h2>
      </div>
      <div class="row gy-32">
      <?php
// Get the taxonomy terms
$terms = get_field('producten');

if ($terms) {
    // Sort the terms by menu_order
    usort($terms, function($a, $b) {
        return $a->menu_order - $b->menu_order;
    });

    foreach ($terms as $term) {
        // Get the term ID
        $term_id = $term->term_id;

        // Get ACF fields associated with the term
        $image = get_field('uitgelichte_afbeelding', 'term_' . $term_id);
        $title = $term->name;
        $description = get_field('inleiding', 'term_' . $term_id);

        // Get the URL of the taxonomy page
        $term_link = get_term_link($term);

        // Display the content
        ?>
        <div class="col col-lg-6">
            <a href="<?php echo esc_url($term_link); ?>" class="taxonomy-term-link">
                <div class="card-uitgelicht ani op up">
                    <?php if ($image) { ?>
                        <img class="object-fit-cover w-100 vh-mobile" height="400" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php } ?>
                    <h3 class="mt-16 h-3 text-center fw-400 text-uppercase text-primary"><?php echo esc_html($title); ?></h3>
                    <?php if ($description) { ?>
                        <p><?php echo esc_html($description); ?></p>
                    <?php } ?>
                </div>
            </a>
        </div>
        <?php
    }
}
?>




      </div>
   </div>
</section>