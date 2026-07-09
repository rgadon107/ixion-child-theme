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

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\enqueue_frontend_styles' );
/**
 * Enqueue the parent and child theme stylesheets to display on the front-end of the website.
 * Enqueue JavaScript to toggle a navigation submenu list items on mobile view.
 *
 * * This function ensures that the parent theme's styles are loaded first,
 * followed by the child theme's overrides to maintain correct CSS specificity.
 *
 * @since 1.0.2
 * @return void
 */
function enqueue_frontend_styles(): void {
    // Load the parent theme's style
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    // Load the child theme's style
    wp_enqueue_style(
        'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'parent-style' ), // The child-theme depends on the parent theme loading first.
        _get_asset_version( 'style.css' )
    );

    // Load the `variables.css` file first so that they can be used by the `main-style.css` file.
    $css_variables_path = 'assets/css/variables.css';
    wp_enqueue_style(
        'ixion-child-variables',
        get_stylesheet_directory_uri() . '/' . $css_variables_path,
        array(),
        _get_asset_version( $css_variables_path )
    );

    $accordion_styles_path = 'assets/css/accordion-styles.css';
    wp_enqueue_style(
        'ixion-child-coblocks-accordion-styles',
        get_stylesheet_directory_uri() . '/' . $accordion_styles_path,
        array( 'ixion-child-variables' ),
        _get_asset_version( $accordion_styles_path )
    );

    $main_styles_path = 'assets/css/main-style.css';
    wp_enqueue_style(
        'ixion-child-main',
        get_stylesheet_directory_uri() . '/' . $main_styles_path,
        array( 'ixion-child-variables' ),
        _get_asset_version( $main_styles_path )
    );

    $js_nav_toggle_path ='assets/js/navigation-toggle.js';
    wp_enqueue_script(
        'ixion-child-nav-toggle-js',
        get_stylesheet_directory_uri() . '/' . $js_nav_toggle_path,
        array(),
        _get_asset_version( $main_styles_path ),
        true
    );

}

add_action( 'enqueue_block_editor_assets', __NAMESPACE__ . '\\enqueue_block_editor_styles' );
/**
 * Enqueue the block editor styles for the child-theme.
 *
 * Ensure that the child-theme's block editor styles override the default link styles
 * * imposed by the parent theme.
 *
 * @since 1.0.1
 * @return void
 */
function enqueue_block_editor_styles(): void {

    // Load the `variables.css` file first so that they can be used by the `admin-style.css` file.
    $css_variables_path = 'assets/css/variables.css';

    wp_enqueue_style(
        'ixion-child-variables-admin',
        get_stylesheet_directory_uri() . '/' . $css_variables_path,
        array(),
        _get_asset_version( $css_variables_path )
    );

    $admin_styles_path = 'assets/css/admin-style.css';

    wp_enqueue_style(
        'ixion-child-admin',
        get_stylesheet_directory_uri() . '/' .  $admin_styles_path,
        array( 'ixion-child-variables-admin' ),
        _get_asset_version( $admin_styles_path )
    );
}

add_action( 'after_setup_theme', __NAMESPACE__ . '\\register_theme_features', 20 );

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
function register_theme_features(): void   {

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

    // 3. Point the editor to the child-theme's main stylesheet so the editor looks like the front-end.
    add_editor_style('assets/css/main-style.css');

    // 4. Enable support for `align-wide` rendering of images.
    add_theme_support( 'align-wide' );

    // 5. Enable responsive embedded content to maintain a proper aspect ratio across devices.
    add_theme_support( 'responsive-embeds' );
}

/**
 * Load custom pattern registrations.
 */
require_once get_stylesheet_directory() . '/includes/register-design-patterns.php';

/**
 * Disable 'Content-Only Mode' isolation for unsynced patterns in WordPress 7.0.
 *
 * This restores unrestricted, immediate access to the full block structure.
 *
 * @since 1.3.2
 *
 * @param array $settings The current block editor settings.
 * @return array The updated block editor settings.
 */
add_filter( 'block_editor_settings_all', function( $settings ) {
    $settings['disableContentOnlyForUnsyncedPatterns'] = true;
    return $settings;
} );
