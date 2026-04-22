# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org).

## [Unreleased] Version 1.0.7 - 2026-XX-XX
### Added
- `/footer.php`: Add file to serve as a view for the site footer.
- `/components/footer/pattern-loader.php`: Add file to manage the logic for loading synched block patterns passed to `/footer.php`.
- `/functions.php`: Add theme support for responsive embeds (images, icons) passed into the footer.
- `/includes/register-design-patterns.php`: Register design pattern category `Footer: Site-Wide` for footer sections .
- `/assets/css/main-style.css`: Add footer styles for global reset, and media queries for mobile and desktop view. Add <svg> icon styles.
- `/assets/css/variables.css`: Add color variable for soft-orange and update block editor color palette.
- Added 3 design patterns to child theme for footer sections; `Footer Email Signup`, `Footer Site Map`, and `Footer Site Info`.
- Add `Changelog.md` file to document changes to the theme.

### Changed
- `/components/footer/site-info.php`: File added to theme to update site info at the bottom of each page or post.

### Fixed
- `/assets/css/main-style.css`: Mobile view - Fixed margin and text-alignment for media and text blocks on the front page.
- Desktop view - Changed the position of the 3rd level navigation sub-menu named 'Photo Show Archives' from right to left. 

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


