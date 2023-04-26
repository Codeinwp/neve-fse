<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package neve-fse
 * @since 1.0.0
 *
 * slug: columns-with-icons
 * title: Columns with icons
 * categories: NeveFSE
 * keywords: Columns, icons, features
 */

use NeveFSE\Assets_Manager;

$icon_image01 = Assets_Manager::get_image_url( 'neve-fse-img01.svg' );
$icon_image02 = Assets_Manager::get_image_url( 'neve-fse-img02.svg' );
$icon_image03 = Assets_Manager::get_image_url( 'neve-fse-img03.svg' );

return array(
	'title'      => __( 'Columns with icons', 'neve-fse' ),
	'categories' => array( 'neve-fse' ),
	'keywords'   => array( 'Columns', 'icons', 'features' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px","right":"24px","left":"24px"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"ti-bg-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-ti-bg-alt-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-right:24px;padding-bottom:64px;padding-left:24px"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"40px","left":"40px"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
<div class="wp-block-column" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"constrained","wideSize":"80px","justifyContent":"left","contentSize":"80px"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"border":{"radius":"100px"},"spacing":{"padding":{"top":"16px","right":"16px","bottom":"16px","left":"16px"}}},"backgroundColor":"ti-accent","layout":{"type":"constrained","contentSize":"80px","justifyContent":"left"}} -->
<div class="wp-block-group has-ti-accent-background-color has-background" style="border-radius:100px;padding-top:16px;padding-right:16px;padding-bottom:16px;padding-left:16px">
    <!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
    <figure class="wp-block-image size-large">
        <img src="' . esc_url( $icon_image01 ) . '" alt=""/>
    </figure>
    <!-- /wp:image -->
</div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"left","level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-text-align-left has-medium-font-size">Build your site</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left">The flexibility and creative control to design your pages exactly as you envision them</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
<div class="wp-block-column" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"constrained","wideSize":"80px","justifyContent":"left","contentSize":"80px"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"border":{"radius":"100px"},"spacing":{"padding":{"top":"16px","right":"16px","bottom":"16px","left":"16px"}}},"backgroundColor":"ti-accent","layout":{"type":"constrained","contentSize":"80px","justifyContent":"left"}} -->
<div class="wp-block-group has-ti-accent-background-color has-background" style="border-radius:100px;padding-top:16px;padding-right:16px;padding-bottom:16px;padding-left:16px">
    <!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
    <figure class="wp-block-image size-large">
        <img src="' . esc_url( $icon_image02 ) . '" alt=""/>
    </figure>
    <!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"left","level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-text-align-left has-medium-font-size">Style Variations</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left">Multiple Style Variations to give a completely different look and feel to your site.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
<div class="wp-block-column" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"constrained","wideSize":"80px","justifyContent":"left","contentSize":"80px"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"border":{"radius":"100px"},"spacing":{"padding":{"top":"16px","right":"16px","bottom":"16px","left":"16px"}}},"backgroundColor":"ti-accent","layout":{"type":"constrained","contentSize":"80px","justifyContent":"left"}} -->
<div class="wp-block-group has-ti-accent-background-color has-background" style="border-radius:100px;padding-top:16px;padding-right:16px;padding-bottom:16px;padding-left:16px">
    <!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
    <figure class="wp-block-image size-large">
        <img src="' . esc_url( $icon_image03 ) . '" alt=""/>
    </figure>
    <!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"left","level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-text-align-left has-medium-font-size">Pattern-ready</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left">Add patterns quickly and easily create a site that looks amazing and help you make a great first impression</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
        ',
);
