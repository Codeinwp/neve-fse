<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package neve-fse
 * @since 1.0.0
 *
 * slug: columns-with-cards
 * title: Columns with cards
 * categories: NeveFSE
 * keywords: Columns, cards, services
 */

use NeveFSE\Assets_Manager;

$neve_fse_img05 = Assets_Manager::get_image_url( 'neve-fse-img05.jpg' );
$neve_fse_img10 = Assets_Manager::get_image_url( 'neve-fse-img10.jpg' );
$neve_fse_img11 = Assets_Manager::get_image_url( 'neve-fse-img11.jpg' );

return array(
	'title'      => __( 'Columns with cards', 'neve-fse' ),
	'categories' => array( 'neve-fse' ),
	'keywords'   => array( 'Columns', 'cards', 'services' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"40px"}},"backgroundColor":"ti-bg-alt","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull has-ti-bg-alt-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-bottom:64px"><!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"blockGap":"0px"}}} -->
<div class="wp-block-column">
    <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full">
        <img src="' . esc_url( $neve_fse_img10 ) . '" alt=""/>
    </figure>
    <!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"32px","right":"32px","bottom":"32px","left":"32px"}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"5px","bottomRight":"5px"}}},"backgroundColor":"ti-bg","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-ti-bg-background-color has-background" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:5px;border-bottom-right-radius:5px;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:heading {"textAlign":"left","level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-text-align-left has-medium-font-size">Lorem ipsum</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Learn more</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"0px"}}} -->
<div class="wp-block-column">
    <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full">
        <img src="' . esc_url( $neve_fse_img05 ) . '" alt=""/>
    </figure>
    <!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"32px","right":"32px","bottom":"32px","left":"32px"}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"5px","bottomRight":"5px"}}},"backgroundColor":"ti-bg","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-ti-bg-background-color has-background" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:5px;border-bottom-right-radius:5px;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:heading {"textAlign":"left","level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-text-align-left has-medium-font-size">Lorem ipsum</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Learn more</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"0px"}}} -->
<div class="wp-block-column">
    <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full">
        <img src="' . esc_url( $neve_fse_img11 ) . '" alt=""/>
    </figure>
    <!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"32px","right":"32px","bottom":"32px","left":"32px"}},"border":{"radius":"5px"}},"backgroundColor":"ti-bg","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-ti-bg-background-color has-background" style="border-radius:5px;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:heading {"textAlign":"left","level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-text-align-left has-medium-font-size">Lorem ipsum</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Learn more</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
        ',
);
