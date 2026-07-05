<?php
/**
 * Registration of custom block pattern categories.
 *
 * This file handles the registration of custom categories for the block editor (Gutenberg),
 * allowing custom block patterns to be organized under specific headings
 * in the pattern inserter.
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern_category/
 *
 * @package Ixion_Child
 * @since 1.0.1
 */

namespace gardenClubOfMpls;

add_action('init', __NAMESPACE__ . '\\register_pattern_categories', 20 );
/**
 * Register custom block pattern categories for use in the Gutenberg editor.
 *
 * The function defines an array of categories, each with a unique slug and label.
 * It then iterates through the array and registers each category using `register_block_pattern_category`.
 *
 * @since 1.0.0
 *
 * @return void
 */
function register_pattern_categories(): void    {
    $categories = array(
        'footer-sections'                       => array('label' => __('Footer: Site-Wide', 'ixion-child')),
        'events-full-listing'                   => array('label' => __('Events: Full Listing', 'ixion-child')),
        'events-general-home-page'              => array('label' => __('Events: Home Page', 'ixion-child')),
        'events-plant-sale'                     => array('label' => __('Events: Plant Sale', 'ixion-child')),
        'events-fff-show'                       => array('label' => __('Events: FFF Show', 'ixion-child')),
        'garden-tour-progressive'               => array('label' => __('Garden Tour: Progressive', 'ixion-child')),
        'coblocks-accordion-deane-fund-grants'  => array('label' => __('Coblocks Accordion: Deane Fund Grants', 'ixion-child')),
    );

    foreach ($categories as $slug => $settings) {
        register_block_pattern_category($slug, $settings);
    }
}
