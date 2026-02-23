<?php
/**
 * Title: Events - FFF Show
 * Slug: ixion-child/event-fff-show
 * Categories: fff show, fff-show, food, flower, foto, photo
 * Description: A modified single event card for the FFF Show. Display on the Events and Home pages.
 * Keywords: event, fff show, food, flower, foto, photo
 * Viewport Width: 800
 */
?>
<!-- wp:group {"metadata":{"name":"Events - FFF Show Container"},"className":"custom-tight-card","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"},"lock":{"remove":true,"move":false}} -->
<div class="wp-block-group custom-tight-card">

    <!-- wp:heading {"level":3,"metadata":{"name":"Event Date"},"className":"event-date","textColor":"brand-text-main","lock":{"move":true,"remove":true}} -->
    <h3 class="wp-block-heading event-date has-brand-text-main-color has-text-color">Saturday - Sunday, August DD - DD, YYYY</h3>
    <!-- /wp:heading -->

    <!-- wp:heading {"metadata":{"name":"Event Title"},"className":"event-title","textColor":"brand-text-main","lock":{"move":true,"remove":true}} -->
    <h2 class="wp-block-heading event-title has-brand-text-main-color has-text-color">Flower, Food and Foto (FFF) Show</h2>
    <!-- /wp:heading -->

    <!-- wp:columns {"metadata":{"name":"Event Schedule Group Block"},"className":"event-schedule-group","lock":{"move":true,"remove":true}} -->
    <div class="wp-block-columns event-schedule-group">

        <!-- wp:column {"metadata":{"name":"Day 1 Schedule Group"},"className":"day-schedule-group"} -->
        <div class="wp-block-column day-schedule-group">
            <!-- wp:paragraph {"metadata":{"name":"Day 1 Label"},"className":"day-schedule-wrap"} -->
            <p class="day-schedule-wrap"><strong>Saturday, August DD</strong></p>
            <!-- /wp:paragraph -->

            <!-- wp:list {"metadata":{"name":"Event List"},"className":"event-list-wrap"} -->
            <ul class="wp-block-list event-list-wrap">
                <li class="event-list-item">7:30 AM - 10:15 AM - Entries accepted</li>
                <li class="event-list-item">10:45 AM - 1:00 PM - Judging of entries</li>
                <li class="event-list-item">1:00 PM - 4:30 PM - Show open to the public</li>
            </ul>
            <!-- /wp:list -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"metadata":{"name":"Day 2 Schedule Group"},"className":"day-schedule-group"} -->
        <div class="wp-block-column day-schedule-group">
            <!-- wp:paragraph {"metadata":{"name":"Day 2 Label"},"className":"day-schedule-wrap"} -->
            <p class="day-schedule-wrap"><strong>Sunday, August DD</strong></p>
            <!-- /wp:paragraph -->

            <!-- wp:list {"metadata":{"name":"Event List"},"className":"event-list-wrap"} -->
            <ul class="wp-block-list event-list-wrap">
                <li class="event-list-item">10:00 AM - 4:00 PM - Show open to the public</li>
            </ul>
            <!-- /wp:list -->
        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

    <!-- wp:group {"metadata":{"name":"Event Location Group Block"},"className":"event-location-group","layout":{"type":"constrained"},"lock":{"move":true,"remove":true}} -->
    <div class="wp-block-group event-location-group">
        <!-- wp:paragraph {"metadata":{"name":"Event Location"},"placeholder":"DEFAULT ADDRESS; Enter:\n\nBachman’s on Lyndale (Heritage Room)\n6010 Lyndale Avenue South, Minneapolis, MN 55419\n\n!IMPORTANT: PRESS [SHIFT] + [ENTER] FOR NEW LINES.\n\nTO LINK: Highlight the address, click the 'Link' icon (Ctrl+K), paste the Google Maps URL, and toggle 'Open in new tab'.","className":"event-location","style":{"spacing":{"padding":{"top":"10px","bottom":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|brand-green-dark"}}}},"backgroundColor":"brand-green-light","textColor":"brand-green-dark"} -->
        <p class="event-location has-brand-green-dark-color has-brand-green-light-background-color has-text-color has-background has-link-color"></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"metadata":{"name":"Event Description Group Block"},"className":"event-description-group","layout":{"type":"constrained"},"lock":{"move":true,"remove":true}} -->
    <div class="wp-block-group event-description-group">
        <!-- wp:paragraph {"metadata":{"name":"Details Paragraph"},"className":"event-description","textColor":"brand-text-main"} -->
        <p class="event-description has-brand-text-main-color has-text-color">For {YYYY}, the featured flower is <strong>{flower-name}</strong>; the floral design theme is <strong>{theme-name}</strong>; and the featured vegetable is <strong>{vegetable-name}</strong>.</p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"metadata":{"name":"More Info Link"},"className":"event-description","textColor":"brand-text-main"} -->
        <p class="event-description has-brand-text-main-color has-text-color">Additional event details are available on the Flower, Food, &amp; Foto (FFF) Show event page.</p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->
