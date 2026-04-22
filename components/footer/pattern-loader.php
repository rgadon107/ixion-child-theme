<?php
/**
 * Template part for rendering Synced Block Patterns.
 *
 * This file acts as a view that fetches a block pattern from the database
 * and renders it within a section wrapper.
 *
 * @package Ixion_Child
 *
 * @uses get_template_part()
 *
 * @param array $args {
 * An associative array of arguments passed from get_template_part().
 *
 * @type string $slug           The slug of the wp_block pattern to retrieve.
 * @type string $wrapper_class  The CSS class name(s) to apply to the section wrapper.
 * @type string $anchor_id      The ID attribute to apply to the section wrapper.
 * }
 */

// Extract variables from the $args array passed by get_template_part()
$slug           = $args['slug'] ?? '';
$wrapper_class  = $args['class'] ?? '';
$anchor_id      = $args['id'] ?? '';

if (empty($slug)) {
    return;
}

/** @var WP_Post|null $pattern_post */
$pattern_post = get_page_by_path( $slug, OBJECT, 'wp_block' );

if ( $pattern_post instanceof WP_Post ) {

    printf( '<section id="%s" class="%s">', esc_attr( $anchor_id ), esc_attr( $wrapper_class ) );
    echo do_blocks( $pattern_post->post_content );
    echo '</section>';

} else {

    // Inspect the browser's "View Source" if the post_content does not render.
    echo "";

}
