<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package neve-fse
 * @since 1.0.0
 *
 * slug: page-cover-bg-image
 * title: Page Cover with background image
 * categories: NeveFSE
 * keywords: call to action, page cover, inverted, dark
 */

use NeveFSE\Assets_Manager;

$cover_image = Assets_Manager::get_image_url( 'neve-fse-img04.jpg' );

return array(
	'title'      => __( 'Page Cover with background image', 'neve-fse' ),
	'categories' => array( 'neve-fse' ),
	'keywords'   => array( 'call to action', 'page cover', 'inverted', 'dark' ),
	'content'    => '
<!-- wp:cover {"url":"' . esc_url( $cover_image ) . '","dimRatio":50,"overlayColor":"ti-bg-inv","minHeight":500,"minHeightUnit":"px","contentPosition":"center center","isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"24px","right":"24px","bottom":"24px","left":"24px"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-cover alignfull is-light" style="margin-top:0;margin-bottom:0;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px;min-height:500px">
    <span aria-hidden="true" class="wp-block-cover__background has-ti-bg-inv-background-color has-background-dim"></span>
    <img class="wp-block-cover__image-background" alt="" src="' . esc_url( $cover_image ) . '" data-object-fit="cover"/>
    <div class="wp-block-cover__inner-container">
        <!-- wp:group {"textColor":"ti-fg-alt","layout":{"type":"constrained"}} -->
        <div class="wp-block-group has-ti-fg-alt-color has-text-color">
            <!-- wp:heading {"fontSize":"huge"} -->
            <h2 class="wp-block-heading has-huge-font-size">Let’s work together on your next project</h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"left","fontSize":"medium"} -->
            <p class="has-text-align-left has-medium-font-size">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
            <div class="wp-block-buttons">
                <!-- wp:button -->
                <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Learn More</a></div>
                <!-- /wp:button -->
           </div>
           <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->
    </div>
</div>
<!-- /wp:cover -->
',
);
