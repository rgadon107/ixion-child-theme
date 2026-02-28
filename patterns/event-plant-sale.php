<?php
/**
 * Title: Events - Plant Sale
 * Slug: ixion-child/events-plant-sale
 * Categories: featured, events-plant-sale
 * Description: A modified single event card for the spring plant sale. Display on the Events and Home pages.
 * Keywords: event, plant sale, spring plant sale, garden club
 * Viewport Width: 800
 */
?>
<!-- wp:group {"metadata": {"name": "Events - Plant Sale"}, "className": "custom-tight-card", "style": {"spacing": {"margin": {"top": "0", "bottom": "0"}, "padding": {"top": "0", "bottom": "0"}}}, "layout": {"type": "constrained"}, "lock": {"remove": true, "move": false}} -->
<div class="wp-block-group custom-tight-card">
    <!-- wp:heading {"level":3,"placeholder":"Presentation Date: M-Su, May DD, YYYY","lock":{"remove":true,"move":true},"metadata":{"name":"Event Date"},"className":"event-date","style":{"elements":{"link":{"color":{"text":"var:preset|color|brand-text-main"}}}},"textColor":"brand-text-main","lineHeight":1} -->
    <h3 class="wp-block-heading event-date has-brand-text-main-color has-text-color has-link-color has-custom-lineheight" style="line-height:1"></h3>
    <!-- /wp:heading -->

    <!-- wp:heading {"placeholder":"Annual Plant Sale - Members Only; or Annual Public Plant Sale","lock":{"remove":true,"move":true},"metadata":{"name":"Event Title"},"className":"event-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|brand-text-main"}}}},"textColor":"brand-text-main","lineHeight":1} -->
    <h2 class="wp-block-heading event-title has-brand-text-main-color has-text-color has-link-color has-custom-lineheight" style="line-height:1"></h2>
    <!-- /wp:heading -->

    <!-- wp:group {"lock":{"remove":true,"move":true},"metadata":{"name":"Event Location Group Block"},"className":"event-location-group","layout":{"type":"constrained"}} -->
    <div class="wp-block-group event-location-group">
        <!-- wp:paragraph {"className":"event-location","style":{"elements":{"link":{"color":{"text":"var:preset|color|brand-green-dark"}}}},"backgroundColor":"brand-green-light","textColor":"brand-green-dark"} -->
        <p class="event-location has-brand-green-dark-color has-brand-green-light-background-color has-text-color has-background has-link-color"><a href="https://maps.app.goo.gl/aXXc297VbUZipgpv9" target="_blank" rel="noreferrer noopener"><strong>St. Mary’s Greek Orthodox Church ( Great Hall )<br>3450 Irving Ave South, Minneapolis, MN 55408</strong></a></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"lock":{"remove":true,"move":true},"metadata":{"name":"Event Schedule Group Block"},"className":"event-schedule-group","layout":{"type":"constrained"}} -->
    <div class="wp-block-group event-schedule-group">
        <!-- wp:paragraph {"placeholder":"5:00 - 7:00 PM ( Member's Only Event ) or 9:00 AM - 7:00 PM ( Public Sale )","lock":{"remove":true,"move":true},"metadata":{"name":"Event Schedule"},"className":"event-schedule","style":{"elements":{"link":{"color":{"text":"var:preset|color|brand-text-main"}}}},"textColor":"brand-text-main","lineHeight":1} -->
        <p class="event-schedule has-brand-text-main-color has-text-color has-link-color has-custom-lineheight" style="line-height:1"></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"10px"} -->
<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
