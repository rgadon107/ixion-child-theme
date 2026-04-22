<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 * This child-theme version implements a hybrid block-based architecture.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ixion_Child
 *
 * @uses get_template_part()
 * @param array $args {
 * * An associative array of arguments passed from get_template_part().
 *
 * @type string $slug  The slug of the wp_block pattern to retrieve.
 * @type string $class The CSS class name(s) to apply to the section wrapper.
 * }
 */
?>
    </div>
    <footer id="colophon" class="site-footer" role="contentinfo">
<?php
    /**
     * Load the Email Signup Call to Action section.
     *
     * Fetches a Synced Block Pattern by its slug using the child theme's
     * pattern-loader view. This section is intended for marketing conversions.
     *
     * @param array $args {
     * @type string $slug               The slug of the wp_block post type.
     * @type string $wrapper_class      CSS classes to be applied to the section wrapper.
     * @type string $anchor_id          The anchor ID to be applied to the section wrapper.
     * }
     */
    get_template_part( 'components/footer/pattern-loader', null, [
        'slug'      => 'footer-email-signup',
        'class'     => 'footer-cta-wrapper alignfull',
        'id'        => 'join-email-list'
    ] );

    /**
     * Load the Navigational Site Map section.
     *
     * Renders a full-site map pattern to improve SEO and user navigation.
     * Targeted via the pattern-loader for easy admin-side updates.
     *
     * @param array $args {
     * @type string $slug               The slug of the wp_block post type.
     * @type string $wrapper_class      CSS classes for the container.
     * @type string $anchor_id          The anchor ID to be applied to the section wrapper.
     * }
     */
    get_template_part( 'components/footer/pattern-loader', null, [
        'slug'  => 'footer-site-map',
        'class' => 'footer-sitemap-wrapper alignfull',
        'id'    => 'site-map'
    ] );
?>
        <div class="site-info-wrapper">
    <?php
        /**
         * Load the Legacy Site Info component.
         *
         * Displays copyright information, credits, and theme-specific
         * footer details. Mirroring the parent theme's component structure.
         */
        get_template_part( 'components/footer/site-info' );
    ?>
        </div>
    </footer>
</div>
<?php wp_footer(); ?>

</body>
</html>
