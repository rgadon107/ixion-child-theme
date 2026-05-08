# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org).

## [Version 1.2.0 - 2026-XX-XX](https://github.com/rgadon107/ixion-child-theme/pull/13)
### Added

### Changed

### Fixed

### Correction

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


