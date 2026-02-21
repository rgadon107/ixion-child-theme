<?php
/**
 * Title: Monthly Event Group - Full Listing
 * Slug: ixion-child/monthly-event-group-full-listing
 * Categories: events-full-listing
 * Description: A complete version of a single event card designed for the Events page layout.
 * Keywords: event, monthly, full, garden club
 * Viewport Width: 800
 */
?>
<!-- wp:group {"metadata":{"name":"Monthly Event Group - Full Listing"},"className":"custom-tight-card","layout":{"type":"constrained"}} -->
<div class="wp-block-group custom-tight-card">

    <!-- wp:heading {"level":3,"metadata":{"name":"Event Date"},"placeholder":"Presentation Date: {Month} DD, YYYY","className":"event-date","style":{"elements":{"link":{"color":{"text":"var:preset|color|brand-text-main"}}}},"textColor":"brand-text-main","lineHeight":1,"lock":{"remove":true,"move":true}} -->
    <h3 class="wp-block-heading event-date has-brand-text-main-color has-text-color has-link-color has-custom-lineheight" style="line-height:1"></h3>
    <!-- /wp:heading -->

    <!-- wp:heading {"metadata":{"name":"Event Title"},"placeholder":"Presentation Title","className":"event-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|brand-text-main"}}}},"textColor":"brand-text-main","lineHeight":1,"lock":{"remove":true,"move":true}} -->
    <h2 class="wp-block-heading event-title has-brand-text-main-color has-text-color has-link-color has-custom-lineheight" style="line-height:1"></h2>
    <!-- /wp:heading -->

    <!-- wp:group {"metadata":{"name":"Presenter Info Group Block"},"className":"presenter-group","layout":{"type":"constrained"}} -->
    <div class="wp-block-group presenter-group">
        <!-- wp:paragraph {"metadata":{"name":"Presented by ______ "},"placeholder":"Presented by { Presenter's-Name }","className":"event-presenter","style":{"elements":{"link":{"color":{"text":"var:preset|color|brand-text-main"}}}},"textColor":"brand-text-main","lineHeight":1} -->
        <p class="event-presenter has-brand-text-main-color has-text-color has-link-color has-custom-lineheight" style="line-height:1"></p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"metadata":{"name":"( Optional ) Presenter's Title, Organization "},"placeholder":"{ Presenter's-Title }, { Organization-Name }","className":"presenter-title-and-organization"} -->
        <p class="presenter-title-and-organization"></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"metadata":{"name":"Event Description Group Block"},"className":"event-description-group","layout":{"type":"constrained"}} -->
    <div class="wp-block-group event-description-group">
        <!-- wp:paragraph {"metadata":{"name":"Event Description"},"placeholder":"Event Description","className":"event-description","style":{"elements":{"link":{"color":{"text":"var:preset|color|brand-text-main"}}}},"textColor":"brand-text-main"} -->
        <p class="event-description has-brand-text-main-color has-text-color has-link-color"></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"metadata":{"name":"Event Location Group Block"},"className":"event-location-group","layout":{"type":"constrained"},"lock":{"remove":true,"move":true}} -->
    <div class="wp-block-group event-location-group">
        <!-- wp:paragraph {"metadata":{"name":"Event Location"},"placeholder":"St. Mary’s Greek Orthodox Church\n3450 Irving Ave South, Minneapolis, MN 55408\n\nDon't forget to link the address to Google Maps! In the link popup, check the box to open the link in a new tab.","className":"event-location","style":{"elements":{"link":{"color":{"text":"var:preset|color|brand-green-dark"}}}},"backgroundColor":"brand-green-light","textColor":"brand-green-dark","lock":{"remove":true,"move":true}} -->
        <p class="event-location has-brand-green-dark-color has-brand-green-light-background-color has-text-color has-background has-link-color"></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"metadata":{"name":"Event Schedule Group Block"},"className":"event-schedule-group","layout":{"type":"constrained"},"lock":{"remove":true,"move":true}} -->
    <div class="wp-block-group event-schedule-group">
        <!-- wp:paragraph {"metadata":{"name":"Event Schedule"},"placeholder":"6:00 PM - Dinner;  6:30 PM - Business Meeting;  7:00 PM - Program","className":"event-schedule","style":{"elements":{"link":{"color":{"text":"var:preset|color|brand-text-main"}}}},"textColor":"brand-text-main","lineHeight":1,"lock":{"remove":true,"move":true}} -->
        <p class="event-schedule has-brand-text-main-color has-text-color has-link-color has-custom-lineheight" style="line-height:1"></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:paragraph {"metadata":{"name":"Dinner Preregistration Notice"},"className":"dinner-preregistration-notice","style":{"elements":{"link":{"color":{"text":"var:preset|color|brand-text-main"}}}},"textColor":"brand-text-main"} -->
    <p class="dinner-preregistration-notice has-brand-text-main-color has-text-color has-link-color">Please preregister for dinner by 5 PM Friday prior to the club meeting.</p>
    <!-- /wp:paragraph -->

    <!-- wp:buttons {"metadata":{"name":"Dinner Registration Button Block"},"className":"register-button"} -->
    <div class="wp-block-buttons register-button">
        <!-- wp:button {"backgroundColor":"brand-green-dark","textColor":"brand-white-lime","metadata":{"name":"Register for Dinner Button"},"className":"has-button","style":{"elements":{"link":{"color":{"text":"var:preset|color|brand-white-lime"}}}},"fontSize":"small"} -->
        <div class="wp-block-button has-button"><a class="wp-block-button__link has-brand-white-lime-color has-brand-green-dark-background-color has-text-color has-background has-link-color has-small-font-size has-custom-font-size wp-element-button">Register for Dinner</a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->

</div>
<!-- /wp:group -->