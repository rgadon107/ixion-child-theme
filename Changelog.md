# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org).

## [Version 1.4.7 - 2026-08-21](https://github.com/rgadon107/ixion-child-theme/pull/33)

### Added
- `/assets/css/main-style.css`:
  - Add base styles for `.is-vertical-layout` on `.btn-group` container.
  - Add mobile media queries for the `a.wp-block-button__link` selectors to increase line height of label text and offset text-underline.
- `.editorconfig`: Added this file to the child theme to prevent PHPStorm from adding tabs/spaces/newlines that break the parser in the Gutenberg editor.

### Changed
- `/style.css`: Increase child theme version number to `1.4.7`.

### Fixed
- `patterns/primary-and-secondary-button-group.php`:
    - Change `wp:buttons` block JSON delimiter `orientation` attribute from `horizontal` to `vertical`.
        - Fixes a problem with vertical stacking of the 2 (two) buttons on the production website.
    - Remove inline styles for `margin-top` and `margin-bottom` from the `wp:button` block JSON delimiter.
    - To prevent editor parse errors, limit valid categories in the file header to `primary-and-secondary-button-group, featured`.
    - Rebuilt the custom design pattern in the Gutenberg editor on a clean, private page and pasted the markup into the design pattern file.

## [Version 1.4.6 - 2026-08-20](https://github.com/rgadon107/ixion-child-theme/pull/32)

### Added
- `/patterns/primary-and-secondary-button-group.php`: Added custom design pattern file.
- `/includes/register-design-patterns.php`:
  - Added `primary-and-secondary-button-group` to the `register_design_categories` function.
  - Added inline styles within the button group for `margin-top` and `margin-bottom`.
- `/assets/css/main-style.css`: Added styles for the primary and secondary button group applied to `The Garden Spray` section of the `members-only-content` page.

### Changed
- `/style.css`: Increase child theme version number to `1.4.6`.
- `/patterns/button-group.php`: Changed file name to `primary-button-group.php`. Updated file docblock.
- `/includes/register-design-patterns.php`: Changed named of the registered design pattern from `button-group` to `primary-button-group`.

## [Version 1.4.5 - 2026-08-13](https://github.com/rgadon107/ixion-child-theme/pull/31)

### Added
- `/assets/css/main-style.css`:
  - Added custom classes to the button group design pattern to style the member photo directory button.

### Changed
- `/style.css`: Increase child theme version number to `1.4.5`.

## [Version 1.4.4 - 2026-08-10](https://github.com/rgadon107/ixion-child-theme/pull/30)

### Added

- `/assets/css/main-style.css`:
  - Added a mobile media query to adjust line-height on `h3.event-schedule-heading`.
  - Added popup styles that target the correct `post_id` on the production site (different from the development site).
  - Add `.event-date-group` and `.event-date-notification` classes to the Event card.
  - Style `.event-date-group` and `.event-date-notification` to display a 'Date Change!' notice next to event date.
  - Add `:empty` pseudo-class to prevent displaying padding when `.event-date-notification` block is empty.
- `/assets/css/variables.css`:
  - Define `--vivid-red` variable for use as background color on `.event-date-notification` block.

### Changed
- `/style.css`: Increase child theme version number to `1.4.4`.

## [Version 1.4.3 - 2026-08-09](https://github.com/rgadon107/ixion-child-theme/pull/29)

### Added

- `/assets/css/main-style.css`:
  - Style the `Membership Join/Review` popup.
  - Add floret in place of list-item discs for event cards.
  - Style the paragraphs in the 'Call for Volunteers' section of the MN State Fair event card.
- Build and style the `Membership Join/Renew` popup to display on the `/membeship-join-renew` page.

### Changed
- `/style.css`: Increase child theme version number to `1.4.3`.
- Updated the local development site database to accept and render 'utfmb4' characters (emojis).

## [Version 1.4.2 - 2026-08-05](https://github.com/rgadon107/ixion-child-theme/pull/28)

Added styles for the MN State Fair event volunteer button.
Fixed the HTML of the 'Membership Benefits Include...' section on the Membership Benefits page and restyled it.

### Added
- `/assets/css/main-style.css`:
  - Add styles for the MN State Fair event volunteer button.
  - Add styles for the `membership-benefits-section` section on the Membership Benefits page.
    - Includes a color gradient at the bottom of the section to visually transition from the section to the footer.

### Changed
- `/style.css`: Increase child theme version number to `1.4.2`.

### Fixed
- Membership Benefits page: Built `section.membership-benefits-section` on the page that integrated the section heading, 2-column layout (media and text), and button link.

## [Version 1.4.1 - 2026-08-03](https://github.com/rgadon107/ixion-child-theme/pull/27)

### Added

- `/assets/css/main-style.css`:
  - Increase the specificity of FFF Show hero button to assert child-theme color styles.
  - Add a tablet and mobile media query for button group styles.

### Changed
- `/style.css`: Increase child theme version number to `1.4.1`.
- `/assets/css/main-style.css`:
  - Custom button style: Remove the `:active` pseudo-class style.
  - Enforce front-end button colors with `!Important`.

## [Version 1.4.0 - 2026-08-03](https://github.com/rgadon107/ixion-child-theme/pull/26)

Modify a button group pattern to style only a primary button. Style button for `The Garden Spray` archive page.

### Added
- `/assets/css/main-style.css`: Add styles for the primary custom button group.

### Changed
- `/style.css`: Increase child theme version number to `1.4.0`.
- `/patterns/button-group.php`: Modify file to retain only a primary button group. Delete the secondary button.

## [Version 1.3.9 - 2026-08-01](https://github.com/rgadon107/ixion-child-theme/pull/25)

Register and style a two-column hero section pattern and button group pattern.
Style the FFF Show page redesign.

### Added
- `/patterns/two-column-hero-section.php`: Added file docblock and HTML for design pattern.
- `/functions.php`: Registered `hero-section.css` stylesheet to enqueue.
- `/assets/css/hero-section.css`: Added desktop and mobile styles for the 2-column hero section.
- `/patterns/button-group`: WIP: Register a button group design pattern.

### Changed
- `/style.css`:
  - Increase child theme version number to `1.3.9`.
  - Add section styles for the FFF Show page redesign.
- `/includes/register-design-patterns.php`:
  - Add `two-column-hero-section` to the `register_design_categories` function.
  - Add `button-group` to the `register_design_categories` function.

## [Version 1.3.8 - 2026-07-27](https://github.com/rgadon107/ixion-child-theme/pull/24)

### Changed
- `/assets/css/main-style.css`:
  - Change the selector targeting the Ninja Forms number field to a utility class.
  - Style the description field inside the number field container to allow for a wider range of text.
- `/style.css`: Increase child theme version number to `1.3.8`.

## [Version 1.3.7 - 2026-07-27](https://github.com/rgadon107/ixion-child-theme/pull/23)

### Changed
- `/style.css`: Increase child theme version number to `1.3.7`.

### Fixed
- `/assets/css/accordion-styles.css`: Replace `.post-id-*` specific selector with utility class to reduce accordion size.

## [Version 1.3.6 - 2026-07-27](https://github.com/rgadon107/ixion-child-theme/pull/22)

This child theme version adds styles for ordered lists and a stand-alone stylesheet targeting lists in the child theme. It adds specific styles for the WP accordion block used on the Deane Fund page.

Those styles reduce the size of the WP accordion container to match the heading heirarchy of the page.

### Added

- `/assets/css/lists.css`: Added styles for <ol> and <ul> tags.

### Changed
- `/functions.php`: Added custom configuration to enqueue the `lists.css` stylesheet.
- `/assets/css/accordion-styles.css`: Style the font and container size of the WP accordion on the Deane Fund page.
- `/style.css`: Increase child theme version number to `1.3.6`.

## [Version 1.3.5 - 2026-07-18](https://github.com/rgadon107/ixion-child-theme/pull/21)

### Added

Register categories and design patterns to redesign the Flower, Food & Foto Show page.

- `/includes/register-design-patterns.php`: Register `faq-accordion` design pattern.
- `/includes/register-design-patterns.php`: Register `two-column-layout-with-header` design pattern.
- `/patterns/faq-accordion.php`: Add custom design pattern to directory.
- `/patterns/faq-accordion-with-media-grid.php`: Add a file to include a 33%/67% 2-column media grid in the Accordion Component of the registered block.
- `/patterns/two-column-layout-with-header.php`: Add a design pattern file that includes a 2-column grid layout with section and column headings.
- `/assets/css/main-style.css`:
  - Add styles for the custom class `.useful-docs-columns` and descendent selectors.
  - Ninja Forms custom styles: Add styles to target a container id attribute surrounding a number field used on the Deane Fund grant application form.
- `/assets/css/accordion-styles.css`: Style the native WP accordion block.

### Changed
- `/assets/css/main-style.css`: Move styles targeting the Coblocks Accordion block to the `/assets/css/accordion-styles.css` stylesheet.
- `/includes/register-design-patterns.php`: Update the title of a design pattern from `FAQ Accordion` to `FAQ Accordion With Text`.
- `/patterns/faq-accordion.php`: Change filename to `/faq-accordion-with-text.php` and update title in PHP metadata to distinguish this pattern from 'FAQ Accordion With Media Grid'.
- `/style.css`: Increase child theme version number to `1.3.5`.

## [Version 1.3.4 - 2026-07-14](https://github.com/rgadon107/ixion-child-theme/pull/20)

### Changed
- `/functions.php`:
  - Refactored __NAMESPACE__ .`\enqueue_frontend_styles()` and `\enqueue_frontend_scripts()` to add a custom configuration and loop to separately enqueue styles and scripts.
  - Registered both callbacks via `add_action()` to the 'wp_enqueue_scripts' hook.

## [Version 1.3.4 - 2026-07-11](https://github.com/rgadon107/ixion-child-theme/pull/19)

WIP: FFF Show styles: Style the .event-schedule-header attribute.

### Added
- `/assets/css/main-style.css`: Added styles for the event schedule H2 heading.

### Changed
- `/style.css`: Increase child theme version number to `1.3.4`.

## [Version 1.3.3 - 2026-07-09](https://github.com/rgadon107/ixion-child-theme/pull/18)

### Changed
- `/style.css`: Updated child theme version number to `1.3.3`.

### Fixed
- `/assets/css/main-style.css`: Fixed the `blockquote.mission-statement` selector to maintain desktop styles on mobile.

## [Version 1.3.2 - 2026-07-09](https://github.com/rgadon107/ixion-child-theme/pull/17)

### Added
- `/assets/css/main-style.css`:
  - Added a child-theme selector to target the `<blockquote>` tag on the Deane Fund page.
  - Added a pseudo-element to style the left-handed quotation mark on the `<blockquote>` tag.
  - Added a child-theme selector to target the styling of ordered lists.

- `/functions.php`: Enqueued the `accordion-styles.css` stylesheet on the `wp_enqueue_scripts` hook.

- `/assets/css/accordion-styles.css`:
  - Created a new CSS stylesheet to style the Coblocks Accordion Dean Fund Grant design pattern.
  - Added media queries to restyle the accordion on mobile and tablet views.

- `/patterns/coblocks-accordion-dean-fund-grants.php`: Added a new pattern file to style the Coblocks Accordion Dean Fund Grant design pattern.

### Changed
- `/functions.php`: Added a filter to restore unrestricted, immediate access to a full, unsynced block structure in the WP block editor.
- `/includes/register-design-patterns.php`: Updated the `register_design_pattern` function to register a design pattern for the Coblocks Accordion Dean Fund Grant design pattern.
- `/style.css`: Increase child theme version number to `1.3.2`.

## [Version 1.3.1 - 2026-06-15](https://github.com/rgadon107/ixion-child-theme/pull/16)
### Added
- `assets/css/main-style.css`: Added a link selector in the event card presenter group.
  - Added color and underline to the link on focus, hover, and visited states.

### Changed
- `/style.css`: Increase child theme version number to `1.3.1`.

## [Version 1.3.0 - 2026-06-11](https://github.com/rgadon107/ixion-child-theme/pull/15)
### Added
- `assets/css/main-style.css`: Add a line-height property to targeted <p> tags in the right-side column of the footer CTA.

### Changed
- `/style.css`: Increase child theme version number to `1.3.0`.

## [Version 1.2.0 - 2026-05-23](https://github.com/rgadon107/ixion-child-theme/pull/14)

### Added
- `/includes/register-design-patterns.php`: Update custom configuration to register a design pattern for the progressive garden tour event.

### Changed
- `/patterns/garden-tour-progressive.php`: Duplicated and modified the `events-full-listing.php` pattern file to create a new pattern for the progressive garden tour event.
- `/style.css`: Updated child theme version number to `1.2.0`.

## [Version 1.1.2 - 2026-05-16](https://github.com/rgadon107/ixion-child-theme/pull/13)
### Added
- `assets/css/main-style.css`: Added a selector to target list items within an event description group.

### Changed
- `/style.css`: Increase child theme version number to `1.1.2`.

## [Version 1.1.1 - 2026-05-08](https://github.com/rgadon107/ixion-child-theme/pull/12)
### Changed
- `/style.css`: Increase child theme version number to `1.1.1`.

### Fixed
- `assets/css/main-style.css`: Fixed a selector targeting the style of the event schedule placed on the home page.

## [Version 1.1.0 - 2026-04-29](https://github.com/rgadon107/ixion-child-theme/pull/11)
### Changed
- `assets/css/main-style.css`: Change a `#menu-item-{ID}` selector to a class selector in the navigation menu.
  - This allows for the reposition of the navigation menu parent item across local, staging, and production sites.
- `/style.css`: Increase child theme version number to `1.1.0`.

## [Version 1.0.9 - 2026-04-29](https://github.com/rgadon107/ixion-child-theme/pull/10)
### Added
- `/assets/css/main-style.css`: Target the sub-navigation links in the footer site-map section. Add an underline to the active link using the `border-bottom` property.

### Changed
- `/style.css`: Increase child theme version number to `1.0.9`.

## [Version 1.0.8 - 2026-04-26](https://github.com/rgadon107/ixion-child-theme/pull/9)
### Added
- `/assets/css/main-style.css`: Target selective top-level nav links in the footer site-map section. Override the default link behavior for text color.

### Changed
- `/style.css`: Increase child theme version number to `1.0.8`.
- Added site navigation links to the navigation list items in the `footer-site-map` design pattern.

### Correction
- Version 1.0.7 - `/components/footer/pattern-loader.php`: Modify the view to run `do_shortcode()`. This renders the `[current_year]` shortcode.
- Version 1.0.7 - Did not add `/components/footer/site-info.php` from parent theme into child theme in version 1.0.7.
  - Child theme relies instead on a registered design pattern for `footer-site-info` and a view rendered by `/components/footer/pattern-loader.php`.

## [Version 1.0.7 - 2026-04-22](https://github.com/rgadon107/ixion-child-theme/pull/8)
### Added
- `/footer.php`: Add a file to serve as a view for the site footer.
- `/components/footer/pattern-loader.php`: Add a file to manage the logic for loading synched block patterns passed to `/footer.php`.
- `/functions.php`: Add theme support for responsive embeds (images, icons) passed into the footer.
- `/includes/register-design-patterns.php`: Register design pattern category `Footer: Site-Wide` for footer sections.
- `/assets/css/main-style.css`: Add footer styles for global reset, and media queries for mobile and desktop view. Add `<svg>` icon styles.
- `/assets/css/variables.css`: Add color variable for soft-orange and update block editor color palette.
- Added three design patterns to child theme for footer sections; `Footer Email Signup`, `Footer Site Map`, and `Footer Site Info`.
- Add `Changelog.md` file to document changes to the theme.

### Changed
- `/components/footer/site-info.php`: File added to theme to update site info at the bottom of each page or post.

### Fixed
- `/assets/css/main-style.css`: Mobile view – Fixed margin and text-alignment for media and text blocks on the front page.
- Desktop view – Changed the position of the third-level navigation sub-menu named 'Photo Show Archives' from right to left.
- `/includes/register-design-patterns.php`: Modify the view to run `do_shortcode()`. This renders the `[current_year]` shortcode.

## [Version 1.0.6 - 2026-03-05](https://github.com/rgadon107/ixion-child-theme/pull/7)
### Added
- Enqueue CSS and JS files in `/functions.php` file.
- Add `/patterns/monthly-event-group-home-page.php` file.
- Add and enqueue `/assets/js/navigation-toggle.js` file to add `.is-open` class and toggle subnav menus on mobile.

### Changed
- Split `/style.css` file into multiple files:
  - `/assets/css/variables.css`;
  - `/assets/css/admin-style.css`; and
  - `/assets/css/main-style.css`;
- Add comment to `style.css` file referencing the other CSS files in the theme.
- Modify JSON in HTML comments of pattern files to allow Editors to delete patterns in the block editor.
- Update styles for custom event card components.
- Update and reorganize mobile navigation styles in `/assets/css/main-style.css` file.
- Update theme version number on `/style.css` file.

### Fixed
- Corrected the site navigation menu on mobile view. All subnav menus on mobile are now closed by default.

## [Version 1.0.5 - 2026-02-14](https://github.com/rgadon107/ixion-child-theme/pull/6)
### Added
- `/style.css`: Add a global link reset so that anchor tags use the dark green theme color.
- Exclude style rules on buttons, which have their own style rules.
- Add global list styles for an unordered list on desktop and mobile view.

## [Version 1.0.4 - 2026-02-14](https://github.com/rgadon107/ixion-child-theme/pull/5)
### Added
- `/style.css`: Add a global link reset so that anchor tags use the dark green theme color. Exclude style rules on buttons, which have their own style rules.
- Add global list styles for an unordered list on desktop and mobile view.

## [Version 1.0.3 - 2026-02-12](https://github.com/rgadon107/ixion-child-theme/pull/4)
### Added
- Add styling for a map pin icon to the `event-location` block within an event block.

## [Version 1.0.2 - 2026-02-12](https://github.com/rgadon107/ixion-child-theme/pull/3)
### Added
- `/style.css`: Add theme-based color-customizations to the desktop and mobile navigation menus.
- Style the `event-location` section within event blocks.

### Changed
- Modify the child-theme description.

## [Version 1.0.1 - 2026-02-11](https://github.com/rgadon107/ixion-child-theme/pull/2)
### Changed
- `/style.css`: Update class selectors targeting event buttons.

## [Version 1.0.0 - 2026-02-11](https://github.com/rgadon107/ixion-child-theme/pull/1)
### Added
- Initial commit of `ixion-child-theme`.

### Changed
- Update child theme `README.md` file.


