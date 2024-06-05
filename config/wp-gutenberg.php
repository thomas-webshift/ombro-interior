<?php

/**
 * Gutenberg Setup
 */

add_filter('use_block_editor_for_post_type', 'webshift_gutenberg_custom_disable_gutenberg', 10, 2);
function webshift_gutenberg_custom_disable_gutenberg($current_status, $post_type)
{
    // Use your post type key instead of 'product'
    if ($post_type !== 'nieuws') return false;
    if ($post_type === 'nieuws') return true;
    return $current_status;
}

add_filter( 'allowed_block_types', 'webshift_gutenberg_allowed_block_types', 10, 2 );

function webshift_gutenberg_allowed_block_types( $allowed_blocks, $post ) {

    if( $post->post_type === 'nieuws' ) {
        $allowed_blocks = [
            'core/paragraph',
            'core/image',
            'core/heading',
            'core/gallery',
            'core/list',
            'core/quote',
            'core/cover',
            'core/video',
            'core/html',
            'core/classic',
            'core/table',
            'core/pullquote',
            'core/code',
            'core/buttons',
            'core/columns',
            'core/page',
            'core/media-text',
            'core/more',
            'core/seperator',
            'core/spacer',
            'core/shortcode',
        ];

        return $allowed_blocks;
    }

}