# Ixion Child Theme

This is a child theme for the [Ixion WordPress Theme](https://wordpress.org/themes/ixion/).

## Purpose
This child theme was created to manage custom CSS overrides that were previously stored in the WordPress Customizer.

## Key Modifications
* **Color Scheme:** Overrides the default blue brand colors to match the branding for the Garden Club of Minneapolis, MN. 
* **Typography:** Minor adjustments to the site title and navigation spacing.
* **Performance:** Moved ~80 lines of CSS from the database (Customizer) to a version-controlled stylesheet.

## Technical Notes
* **Parent Theme:** Ixion
* **Enqueuing:** Front-end styles are enqueued via `functions.php` with a dependency on `ixion-style` to ensure correct loading order.
* **Added theme support:** Block editor support to display custom text and background colors are added in `functions.php`. 

## Deployment
This theme is managed via Git. Changes should be committed locally and pushed to the GitHub repository before being deployed to the production server. A public version of this child-theme can be viewed [in a GitHub repository owned by Robert Gadon](https://github.com/rgadon107/ixion-child-theme). 