<?php
/**
 * Title: Garden Tour: Progressive
 * Slug: ixion-child/garden-tour-progressive
 * Categories: featured, garden-tour-progressive
 * Description: A complete version of a single event card designed for the Progressive Garden Tour.
 * Keywords: event, garden tour, full, progressive
 * Viewport Width: 800
 */
?>
<!-- wp:group {"metadata":{"name":"Garden Tour - Progressive" },"className":"custom-tight-card","style":{"spacing":{"margin":{"top":"0","bottom":"0" },"padding":{"top":"0","bottom":"0" }}},"layout":{"type":"constrained" },"templateLock":"contentOnly" } -->
<div class="wp-block-group custom-tight-card">

    <!-- wp:heading {"level":3,"metadata":{"name":"Event Date"},"placeholder":"Presentation Date:{Month} DD, YYYY","className":"event-date","style":{"elements":{"link":{"color":{"text":"var:preset|color|brand-text-main"}}}},"textColor":"brand-text-main","lineHeight":1,"lock":{"remove":true,"move":true}} -->
    <h3 class="wp-block-heading event-date has-brand-text-main-color has-text-color has-link-color has-custom-lineheight" style="line-height:1"></h3>
    <!-- /wp:heading -->

    <!-- wp:heading {"metadata":{"name":"Event Title"},"placeholder":"Presentation Title","className":"event-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|brand-text-main"}}}},"textColor":"brand-text-main","lineHeight":1,"lock":{"remove":true,"move":true}} -->
    <h2 class="wp-block-heading event-title has-brand-text-main-color has-text-color has-link-color has-custom-lineheight" style="line-height:1"></h2>
    <!-- /wp:heading -->

    <!-- wp:group {"metadata":{"name":"Event Description Group Block"},"className":"event-description-group","layout":{"type":"constrained"}} -->
    <div class="wp-block-group event-description-group">
        <!-- wp:paragraph {"metadata":{"name":"Event Description"},"placeholder":"Event Description","className":"event-description","style":{"elements":{"link":{"color":{"text":"var:preset|color|brand-text-main"}}}},"textColor":"brand-text-main"} -->
        <p class="event-description has-brand-text-main-color has-text-color has-link-color"></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"lock":{"remove":true,"move":true},"metadata":{"name":"Event Location Group Block"},"className":"event-location-group","layout":{"type":"constrained"}} -->
    <div class="wp-block-group event-location-group">
        <!-- wp:paragraph {"metadata":{"name":"Event Location" },"placeholder":"Addresses to the host gardens are included in the confirmation email sent following registration.","remove":true,"move":true,"className":"event-location","backgroundColor":"brand-green-light","textColor":"brand-green-dark","style":{"spacing":{"padding":{"top":"10px","bottom":"10px" }},"elements":{"link":{"color":{"text":"var(--brand-green-dark)" },":hover":{"color":{"text":"var(--brand-green-dark)" }}}},"color":{"text":"var(--brand-green-dark)" }}} -->
        <p class="event-location has-brand-green-dark-color has-brand-green-light-background-color has-text-color has-background has-link-color"></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"metadata":{"name":"Event Schedule Group Block"},"className":"event-schedule-group","layout":{"type":"constrained"},"lock":{"remove":true,"move":true}} -->
    <div class="wp-block-group event-schedule-group">
        <!-- wp:paragraph {"metadata":{"name":"Event Schedule"},"placeholder":"Garden 1: 6:00 - 7:20 PM; Garden 2: 7:30 - 8:45 PM.","className":"event-schedule","style":{"elements":{"link":{"color":{"text":"var:preset|color|brand-text-main"}}}},"textColor":"brand-text-main","lineHeight":1,"lock":{"remove":true,"move":true}} -->
        <p class="event-schedule has-brand-text-main-color has-text-color has-link-color has-custom-lineheight" style="line-height:1"></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"metadata":{"name":"Event Preregistration Notice Group Block"},"className":"event-preregistration-notice-group-block","style":{"elements":{"link":{"color":{"text":"var:preset|color|brand-text-main"}}}},"textColor":"brand-text-main","layout":{"type":"constrained"}} -->
    <div class="wp-block-group event-preregistration-notice-group-block has-brand-text-main-color has-text-color has-link-color">
        <!-- wp:paragraph {"metadata":{"name":"Event Preregistration Notice"},"className":"event-preregistration-notice","style":{"elements":{"link":{"color":{"text":"var:preset|color|brand-text-main"}}}},"textColor":"brand-text-main"} -->
        <p class="event-preregistration-notice has-brand-text-main-color has-text-color has-link-color">Please preregister by 10 PM Sunday prior to the garden tour.</p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:buttons {"metadata":{"name":"Event Registration Button Block"},"className":"register-button"} -->
    <div class="wp-block-buttons register-button">
        <!-- wp:button {"backgroundColor":"brand-green-dark","textColor":"brand-white-lime","metadata":{"name":"Register for Tour Button"},"className":"has-button","style":{"elements":{"link":{"color":{"text":"var:preset|color|brand-white-lime"}}}},"fontSize":"small"} -->
        <div class="wp-block-button has-button"><a class="wp-block-button__link has-brand-white-lime-color has-brand-green-dark-background-color has-text-color has-background has-link-color has-small-font-size has-custom-font-size wp-element-button">Register for Tour</a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->

</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"10px"} -->
<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

