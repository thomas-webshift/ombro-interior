<?php
// Get the current product ID
$product_id = get_the_ID();

// Get the current product terms for the 'merk' taxonomy
$terms = get_the_terms($product_id, 'merk');

if ($terms && !is_wp_error($terms)) {
    foreach ($terms as $term) {
        // Retrieve the custom fields associated with the term
        $logo = get_field('logo', 'merk_' . $term->term_id);
        $omschrijving = get_field('omschrijving', 'merk_' . $term->term_id);

        // Check if omschrijving field is not empty
        if ($logo) {
            ?>
            <section class="section-merk-info">
                <div class="container bg-gray-100 p-48">
                    <div class="row align-items-center">
                        <div class="col col-lg-4 d-flex justify-content-center">
                            <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo $logo['alt']; ?>" class="media object-fit-contain" width="180">
                        </div>
                        <div class="col col-lg-8">
                            <h2 class="h-3 text-uppercase fw-300 title-line"><?php echo $term->name; ?> <?php the_title(); ?></h2>
                            <div class="text mt-24"><?php echo $omschrijving; ?></div>
                        </div>
                    </div>
                </div>
            </section>
            <?php
        }
    }
} else {
    echo '<p>No terms found for this product.</p>';
}
?>
