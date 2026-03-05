/**
 * Ixion Child Theme: Navigation Toggles
 *
 * Handles the toggling of sub-menus on mobile devices to prevent
 * the "Scroll of Doom" and improve user experience.
 *
 * @package Ixion_Child
 * @since 1.0.0
 */

/**
 * Handle Mobile Menu Sub-menu Toggles.
 *
 * Synchronizes with the CSS breakpoint @media screen and (max-width: 57.5625em).
 */
document.addEventListener( 'DOMContentLoaded', function () {
    /**
     * Select all menu items that have children.
     *
     * @type {NodeList}
     */
    const menuLinks = document.querySelectorAll( '.menu-item-has-children > a' );

    /**
     * Loop through each parent link and attach a click event listener.
     */
    menuLinks.forEach( function ( anchor ) {
        anchor.addEventListener( 'click', function ( e ) {
            /**
             * Check if the current viewport matches the mobile breakpoint.
             *
             * @type {boolean}
             */
            const isMobileView = window.matchMedia( '(max-width: 57.5625em)' ).matches;

            if ( isMobileView ) {
                const parentLi = this.parentElement;

                // If the sub-menu isn't open yet, prevent navigation and open it.
                if ( ! parentLi.classList.contains( 'is-open' ) ) {
                    e.preventDefault();

                    // Close any other open sub-menus at the same level.
                    const siblings = parentLi.parentElement.querySelectorAll( '.is-open' );
                    siblings.forEach( function ( sibling ) {
                        if ( sibling !== parentLi ) {
                            sibling.classList.remove( 'is-open' );
                        }
                    } );

                    parentLi.classList.add( 'is-open' );
                } else {
                    // If already open, the second click allows the link to be followed.
                    return true;
                }
            }
        } );
    } );

    /**
     * Global click listener to close open menus when clicking outside the navigation area.
     */
    document.addEventListener( 'click', function ( e ) {
        if ( ! e.target.closest( '#site-navigation' ) ) {
            const openItems = document.querySelectorAll( '.is-open' );
            openItems.forEach( function ( item ) {
                item.classList.remove( 'is-open' );
            } );
        }
    } );
} );
