<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package neve-fse
 * @since 1.0.0
 *
 * slug: columns-testimonials
 * title: Three Columns with Testimonials
 * categories: NeveFSE
 * keywords: Columns, testimonial, client, review
 */

use NeveFSE\Assets_Manager;

$neve_fse_img06 = Assets_Manager::get_image_url( 'neve-fse-img06.jpg' );
$neve_fse_img07 = Assets_Manager::get_image_url( 'neve-fse-img07.jpg' );
$neve_fse_img08 = Assets_Manager::get_image_url( 'neve-fse-img08.jpg' );

return array(
	'title'      => __( 'Three Columns with Testimonials', 'neve-fse' ),
	'categories' => array( 'neve-fse' ),
	'keywords'   => array( 'Columns', 'testimonial', 'client', 'review' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"40px"}},"backgroundColor":"ti-accent","textColor":"ti-fg-alt","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull has-ti-fg-alt-color has-ti-accent-background-color has-text-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-bottom:64px">
    <!-- wp:group {"align":"wide"} -->
    <div class="wp-block-group alignwide">
        <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"24px","left":"24px"}}}} -->
        <div class="wp-block-columns">
            <!-- wp:column {"style":{"spacing":{"blockGap":"0px"}}} -->
            <div class="wp-block-column">
                <!-- wp:group {"style":{"border":{"radius":"5px"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="border-radius:5px">
                    <!-- wp:image {"width":80,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
                    <figure class="wp-block-image size-full is-resized is-style-rounded">
                        <img src="' . esc_url( $neve_fse_img08 ) . '" alt="" width="80"/>
                    </figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph {"align":"left"} -->
                    <p class="has-text-align-left">"...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis..."</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph {"align":"left","fontSize":"small"} -->
                    <p class="has-text-align-left has-small-font-size"><strong>JANE DOE</strong></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"style":{"spacing":{"blockGap":"0px"}}} -->
            <div class="wp-block-column">
                <!-- wp:group {"style":{"border":{"radius":"5px"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="border-radius:5px">
                    <!-- wp:image {"width":80,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
                    <figure class="wp-block-image size-full is-resized is-style-rounded">
                        <img src="' . esc_url( $neve_fse_img07 ) . '" alt="" width="80"/>
                    </figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph {"align":"left"} -->
                    <p class="has-text-align-left">"...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis..."</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph {"align":"left","fontSize":"small"} -->
                    <p class="has-text-align-left has-small-font-size"><strong>JOHN DOE</strong></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"style":{"spacing":{"blockGap":"0px"}}} -->
            <div class="wp-block-column">
                <!-- wp:group {"style":{"border":{"radius":"5px"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="border-radius:5px">
                    <!-- wp:image {"width":80,"height":80,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
                    <figure class="wp-block-image size-full is-resized is-style-rounded">
                        <img src="' . esc_url( $neve_fse_img06 ) . '" alt="" width="80" height="80"/>
                    </figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph {"align":"left"} -->
                    <p class="has-text-align-left">"...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis..."</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph {"align":"left","fontSize":"small"} -->
                    <p class="has-text-align-left has-small-font-size"><strong>MARIA DOE</strong></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
        ',
);
