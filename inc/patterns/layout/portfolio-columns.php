<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package neve-fse
 * @since 1.0.0
 *
 * slug: portfolio-columns
 * title: Columns with portfolio items
 * categories: NeveFSE
 * keywords: Columns, portfolio, cover
 */

use NeveFSE\Assets_Manager;

$neve_fse_img04 = Assets_Manager::get_image_url( 'neve-fse-img04.jpg' );
$neve_fse_img05 = Assets_Manager::get_image_url( 'neve-fse-img05.jpg' );

return array(
	'title'      => __( 'Columns with portfolio items', 'neve-fse' ),
	'categories' => array( 'neve-fse' ),
	'keywords'   => array( 'Columns', 'portfolio', 'cover' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"ti-bg","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-ti-bg-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:64px;padding-bottom:64px">
    <!-- wp:heading {"textAlign":"left","align":"wide"} -->
    <h2 class="wp-block-heading alignwide has-text-align-left">Featured Work</h2>
    <!-- /wp:heading -->

    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
        <div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
            <!-- wp:cover {"url":"' . esc_url( $neve_fse_img05 ) . '","dimRatio":10,"overlayColor":"ti-bg-inv","contentPosition":"bottom left","isDark":false,"style":{"spacing":{"padding":{"top":"24px","right":"24px","bottom":"24px","left":"24px"}}}} -->
            <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left" style="padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px">
                <span aria-hidden="true" class="wp-block-cover__background has-ti-bg-inv-background-color has-background-dim-10 has-background-dim"></span>
                <img class="wp-block-cover__image-background" alt="" src="' . esc_url( $neve_fse_img05 ) . '" data-object-fit="cover"/>
                <div class="wp-block-cover__inner-container">
                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                    <div class="wp-block-buttons">
                        <!-- wp:button {"textAlign":"center","textColor":"ti-fg-alt","className":"is-style-outline"} -->
                        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-ti-fg-alt-color has-text-color has-text-align-center wp-element-button">Details</a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
        <div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
            <!-- wp:cover {"url":"' . esc_url( $neve_fse_img04 ) . '","dimRatio":10,"overlayColor":"ti-bg-inv","contentPosition":"bottom left","isDark":false,"style":{"spacing":{"padding":{"top":"24px","right":"24px","bottom":"24px","left":"24px"}}}} -->
            <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left" style="padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px">
                <span aria-hidden="true" class="wp-block-cover__background has-ti-bg-inv-background-color has-background-dim-10 has-background-dim"></span>
                <img class="wp-block-cover__image-background" alt="" src="' . esc_url( $neve_fse_img04 ) . '" data-object-fit="cover"/>
                <div class="wp-block-cover__inner-container">
                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                    <div class="wp-block-buttons">
                        <!-- wp:button {"textAlign":"center","textColor":"ti-fg-alt","className":"is-style-outline"} -->
                        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-ti-fg-alt-color has-text-color has-text-align-center wp-element-button">Details</a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
        ',
);
