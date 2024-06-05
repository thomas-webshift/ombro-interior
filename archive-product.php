<?php get_header(); ?>
<?php get_template_part('template-parts/global/nav/nav'); ?>

<main id="site-main">

<!-- BEGIN ////////////////// -->

<section>
	<div class="container">
		<div class="row">
			<div class="col col-lg-8">
				<h1 class="h-1"><?php _e( 'Producten', 'theme' ); ?></h1>
			</div>
		</div>
	</div>
</section>

<section class="section-product-archive mb-96">
	<div class="container">
	<div class="row gy-48">

	<?php
// Array to hold the parent terms and their child terms
$taxonomy_hierarchy = array();

// Get all terms
$all_terms = get_terms(array(
    'taxonomy' => 'categorie', // Change this to the actual taxonomy name
    'hide_empty' => false // Include terms with no posts
));

// Group terms by parent term
foreach ($all_terms as $term) {
    $parent = $term->parent;
    if ($parent && array_key_exists($parent, $taxonomy_hierarchy)) {
        $taxonomy_hierarchy[$parent][] = $term;
    } elseif ($parent) {
        // If parent exists but isn't in the predefined hierarchy, add it to a separate array
        $taxonomy_hierarchy[$parent][] = $term;
    } 
}

// Reverse the order of parent terms
$reversed_hierarchy = array_reverse($taxonomy_hierarchy, true);

// Output terms grouped by parent term in reverse order
foreach ($reversed_hierarchy as $parent => $child_terms) { 
    $parent_term = get_term($parent);
    ?>
    <div class="col col-lg-12">
        <?php echo '<h2 class="h-2 mb-32">' . $parent_term->name . '</h2>'; ?>
        <div class="row gy-32">
            <?php
            // Get the child terms of the current parent ordered by menu order
            $child_terms_args = array(
                'taxonomy'   => 'categorie',
                'parent'     => $parent,
                'orderby'    => 'term_order', // Order by menu order
                'order'      => 'ASC',        // Ascending order
                'hide_empty' => false         // Show empty terms
            );
            $child_terms = get_terms($child_terms_args);

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
                    echo '<h3 class="text-primary mt-16 h-4 fw-400">' . $child_term->name . '</h3>';
                    if ($term_link) {
                        echo '</a>';
                    }
                    echo '</div>';
                    ?>
                </div>
            <?php } ?>
        </div>
    </div>
<?php } ?>



	</div>


	</div>
</section>

<?php get_template_part('template-parts/sections/section-cta-global'); ?>

<!-- EINDE ////////////////// -->

</main>

<?php get_template_part('template-parts/global/footer'); ?>
<?php get_footer(); ?>