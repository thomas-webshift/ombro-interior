<?php get_header(); ?>
<?php get_template_part('template-parts/global/nav/nav'); ?>

<?php
if (is_tax()) {
    $taxonomy = get_queried_object();
}
?>

<?php $data = [
'subtitel'     =>      get_field('subtitel',$taxonomy),
'inleiding'     =>      get_field('inleiding',$taxonomy),
]; ?>

<main id="site-main">

<!-- BEGIN ////////////////// -->

<section>
    <div class="container">
        <div class="row">
			<div class="col">
                <h1 class="h-1"><?php echo $taxonomy->name; ?></h1>
                <?php if ( $data['subtitel'] ) : ?>
                    <h2 class="h-3 text-uppercase fw-300 mt-32 title-line"><?php echo $data['subtitel']; ?></h2>
                <?php endif; ?>
                <?php if ( $data['inleiding'] ) : ?>
                    <div class="tekst mt-24 uni">
                        <div class="toggle-content" id="toggleContent">
                            <?php echo $data['inleiding']; ?>
                        </div>
                        <button class="btn btn-link d-none w-100 pt-16 mt-16 text-center ani op text-uppercase border-top border-1" id="toggleButton" onclick="toggleContent()"><?php _e( 'Toon meer', 'theme' ); ?></button>
                    </div>
                    <style>
    .toggle-content {
      overflow: hidden;
      max-height: 160px; /* Adjust as needed */
      transition: max-height 0.5s ease;
    }
    .toggle-content.show-all {
      max-height: none;
    }
  </style>
                     <script>
        var buttonText = {
            'nl': {
                'showMore': 'Toon meer',
                'showLess': 'Toon minder'
            },
            'fr': {
                'showMore': 'Montre plus',
                'showLess': 'Montre moins'
            }
        };

        // Function to get the user's language preference from the <html> tag
        function getLanguagePreference() {
            var lang = document.documentElement.lang || 'nl'; // Default to 'nl' if no lang attribute is set
            if (lang.startsWith('nl')) {
                return 'nl';
            } else if (lang.startsWith('fr')) {
                return 'fr';
            } else {
                return 'nl'; // Fallback to 'nl' if not 'nl' or 'fr'
            }
        }

        var language = getLanguagePreference();

        function toggleContent() {
            var content = document.getElementById('toggleContent');
            var button = document.getElementById('toggleButton');
            if (content.classList.contains('show-all')) {
                content.classList.remove('show-all');
                button.textContent = buttonText[language]['showMore'];
            } else {
                content.classList.add('show-all');
                button.textContent = buttonText[language]['showLess'];
            }
        }

        window.onload = function() {
            var content = document.getElementById('toggleContent');
            var button = document.getElementById('toggleButton');
            if (content.scrollHeight > content.clientHeight) {
                button.classList.remove('d-none');
                button.textContent = buttonText[language]['showMore'];
            }
        }
    </script>

                <?php endif; ?>

                <?php $gallery_images = get_field( 'fotos',$taxonomy ); ?>
                <?php if ( $gallery_images ) :  ?>
                <div class="acf-justigal mt-48">
                    <?php foreach ( $gallery_images as $gallery_image ): ?>
                        <a class="anif op" href="<?php echo $gallery_image['url']; ?>" data-fancybox="gallery">
                        <img src="<?php echo $gallery_image['sizes']['large']; ?>" alt="<?php echo $gallery_image['alt']; ?>" />
                        </a>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>


        <?php
        // Check if the current page is a taxonomy archive page for the 'categorie' taxonomy
        if (is_tax('categorie')) {
            // Get the current term object
            $current_term = get_queried_object();

            // Check if the current term has parent terms
            $parent_terms = get_ancestors($current_term->term_id, $current_term->taxonomy);

            if (!empty($parent_terms)) { ?>
                
            
            
                
                <?php
                    $taxonomy_found = false; // Initialize variable to track if any term with a taxonomy term is found

                    // Get the current post ID
                    $current_post_id = get_the_ID();

                    // Check if the current post has terms for the specific taxonomy
                    $terms = get_the_terms($current_post_id, 'montagetype');

                    if ($terms && !is_wp_error($terms)) {
                        $taxonomy_found = true;
                    }

                    if ($taxonomy_found) {
                    ?>

                    <div class="row">
                        <div class="col">
                            <div class="mt-40"><?php echo do_shortcode('[searchandfilter id="345"]'); ?></div>
                        </div>
                    </div>

                <?php } ?>

                <?php if (have_posts()) { ?>
                <div class="mt-32">
                    <div class="row gy-32" id="results">
                    <?php while (have_posts()) {
                            the_post();
                            ?>
                            <div class="col-lg-6"><?php get_template_part('template-parts/grids/product/card-product'); ?></div>
                        <?php } ?> 
                    </div>
                </div>
                <?php } ?>

            <?php } else { ?>
                

                <div class="mt-32">
                    <div class="row gy-32">
                    <?php
                    // Check if the current page is a taxonomy archive page for the 'categorie' taxonomy
                    if (is_tax('categorie')) {
                        // Get the current term object
                        $current_term = get_queried_object();

                        // Get the child terms of the current term ordered by menu order
                        $child_terms_args = array(
                            'taxonomy'   => 'categorie',
                            'parent'     => $current_term->term_id,
                            'orderby'    => 'term_order', // Order by menu order
                            'order'      => 'ASC',         // Ascending order
                            'hide_empty' => false          // Show empty terms
                        );
                        $child_terms = get_terms($child_terms_args);

                        // Output child terms
                        if (!empty($child_terms)) {
                            foreach ($child_terms as $child_term) { ?>
                            <div class="col col-lg-4">
                                <?php
                                $term_link = get_term_link($child_term);

                                // Get ACF image field
                                $image = get_field('uitgelichte_afbeelding', $child_term);

                                echo '<div class="card-categorie anif op">';
                                if ($term_link) {
                                    echo '<a href="' . esc_url($term_link) . '">';
                                }
                                
                                if ($image) {
                                    echo '<img class="object-fit-cover w-100" height="300" src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '" />';
                                }
                                echo '<h3 class="text-primary mt-16 h-3">' . $child_term->name . '</h3>';
                                if ($term_link) {
                                    echo '</a>';
                                }
                                echo '</div>'; ?>
                            </div>
                            <?php }
                        } else {
                            echo 'No child terms found.';
                        }
                    } else {
                        echo 'You are not on the current taxonomy page template for the taxonomy "categorie".';
                    }
                    ?>
                    </div>
                </div>






            <?php } ?>
        <?php } ?>
        

    </div>
</section>
<?php get_template_part('template-parts/sections/section-merk-info'); ?>
<?php get_template_part('template-parts/sections/section-cta-global'); ?>

<!-- EINDE ////////////////// -->

</main>

<?php get_template_part('template-parts/global/footer'); ?>
<?php get_footer(); ?>