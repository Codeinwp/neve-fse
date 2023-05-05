<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package neve-fse
 * @since 1.0.0
 *
 * slug: columns-text-image
 * title: Columns with text and image
 * categories: NeveFSE
 * keywords: Columns, content, text, image
 */

use NeveFSE\Assets_Manager;

$neve_fse_img10 = Assets_Manager::get_image_url( 'neve-fse-img10.jpg' );

return array(
	'title'      => __( 'Columns with text and image', 'neve-fse' ),
	'categories' => array( 'neve-fse' ),
	'keywords'   => array( 'Columns', 'content', 'text', 'image' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"ti-bg-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-ti-bg-alt-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:64px;padding-bottom:64px">
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"24px","right":"24px","bottom":"24px","left":"24px"}}}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px">
            <!-- wp:heading -->
            <h2 class="wp-block-heading">Style Variations</h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons -->
            <div class="wp-block-buttons">
                <!-- wp:button -->
                <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Learn More</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full">
                <img src="' . esc_url( $neve_fse_img10 ) . '" alt=""/>
            </figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
        ',
);
