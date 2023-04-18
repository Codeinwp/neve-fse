<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package neve-fse
 * @since 1.0.0
 *
 * slug: page-cover-hero
 * title: Page Cover Hero
 * categories: NeveFSE
 * keywords: Hero, Page Hero, Cover
 */

use NeveFSE\Assets_Manager;

$cover_image = Assets_Manager::get_image_url( 'neve-fse-cover01.png' );

return array(
	'title'      => __( 'Page Cover Hero', 'neve-fse' ),
	'categories' => array( 'neve-fse' ),
	'keywords'   => array( 'Hero', 'Page Hero', 'Cover' ),
	'content'    => '
<!-- wp:cover {"url":"' . esc_url( $cover_image ) . '","dimRatio":0,"overlayColor":"ti-bg-inv","minHeight":72,"minHeightUnit":"vh","contentPosition":"center center","isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"24px","right":"24px","bottom":"24px","left":"24px"}}}} -->
<div class="wp-block-cover alignfull is-light" style="padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px;min-height:72vh">
    <span aria-hidden="true" class="wp-block-cover__background has-ti-bg-inv-background-color has-background-dim-0 has-background-dim"></span>
    <img class="wp-block-cover__image-background" alt="" src="' . esc_url( $cover_image ) . '" data-object-fit="cover"/>
    <div class="wp-block-cover__inner-container">
        <!-- wp:group {"layout":{"type":"constrained"}} -->
        <div class="wp-block-group">
            <!-- wp:heading {"textAlign":"center","level":1,"align":"wide"} -->
            <h1 class="wp-block-heading alignwide has-text-align-center">Create and grow your<br>unique website today</h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
            <p class="has-text-align-center has-medium-font-size">Programmatically work but low hanging fruit so new economy cross-pollination. Quick sync new economy.</p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons">
                <!-- wp:button {"className":"is-style-fill"} -->
                <div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button">Learn More</a></div>
                <!-- /wp:button -->

                <!-- wp:button {"className":"is-style-outline"} -->
                <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Hire us</a></div>
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
