<?php
/**
 * Ixion Child Theme functions and definitions
 */

namespace gardenClubOfMpls\IxionChild;

/**
 * Get the file modification time as a version string for cache busting.
 *
 * * This is a helper function when enqueuing the child theme's stylesheet.
 *
 * @param string $relative_path The path to the file relative to the theme root.
 * @return string|int The modification time or the theme version as a fallback.
 */
function _get_asset_version(string $relative_path ): int|string   {
    $absolute_path = get_stylesheet_directory() . '/' . $relative_path;

    if ( file_exists( $absolute_path ) ) {
        return filemtime( $absolute_path );
    }

    // Fallback to the version number of the child-theme if the absolute path to the file isn't found.
    return wp_get_theme( 'ixion-child' )->get( 'Version' );
}

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\enqueue_styles' );
/**
 * Enqueue the parent and child theme stylesheets to display on the front-end of the website.
 *
 * * This function ensures that the parent theme's styles are loaded first,
 * followed by the child theme's overrides to maintain correct CSS specificity.
 *
 * @since 1.0.0
 * @return void
 */
function enqueue_styles(): void {
    // Load the parent theme's style
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    // Load the child theme's style
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'ixion-style' ), // This ensures child CSS loads AFTER the parent theme CSS
        _get_asset_version( 'style.css' )
    );
}

add_action( 'after_setup_theme', __NAMESPACE__ . '\\register_block_editor_colors', 20 );

/**
 * Register a custom color palette and link editor styles for the Block Editor.
 *
 * This function adds branded colors to the editor sidebar, enables editor-style
 * support, and enqueues the child-theme stylesheet to ensure the back-end
 * visually matches the front-end.
 *
 * @return void
 * @since 1.0.0
 */
function register_block_editor_colors(): void   {

    // 1. Register the custom color palette
    add_theme_support('editor-color-palette', array(
        array(
            'name' => __('Brand Strong Yellow', 'ixion-child'),
            'slug' => 'brand-strong-yellow',
            'color' => '#c1a01e',
        ),
        array(
            'name' => __('Brand Text Main', 'ixion-child'),
            'slug' => 'brand-text-main',
            'color' => '#333333',
        ),
        array(
            'name' => __('Brand Green Dark', 'ixion-child'),
            'slug' => 'brand-green-dark',
            'color' => '#527a55',
        ),
        array(
            'name' => __('Brand Green Light', 'ixion-child'),
            'slug' => 'brand-green-light',
            'color' => '#cbd8cb',
        ),
        array(
            'name' => __('Brand White Lime', 'ixion-child'),
            'slug' => 'brand-white-lime',
            'color' => '#f8faf8',
        ),
    ));

    // 2. Enable the editor styles feature
    add_theme_support('editor-styles');

    // 3. Point the editor to your child-theme stylesheet
    // This allows the editor to see your .has-{slug}-color CSS classes.
    add_editor_style('style.css?v=' . _get_asset_version('style.css') );
}
