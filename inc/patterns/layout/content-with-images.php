<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package neve-fse
 * @since 1.0.0
 *
 * slug: content-with-images
 * title: Content with images
 * categories: NeveFSE
 * keywords: Content, images, text
 */

use NeveFSE\Assets_Manager;

$neve_fse_img05 = Assets_Manager::get_image_url( 'neve-fse-img05.jpg' );
$neve_fse_img10 = Assets_Manager::get_image_url( 'neve-fse-img10.jpg' );
$neve_fse_img04 = Assets_Manager::get_image_url( 'neve-fse-img04.jpg' );

return array(
	'title'      => __( 'Content with images', 'neve-fse' ),
	'categories' => array( 'neve-fse' ),
	'keywords'   => array( 'Content', 'images', 'text' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-bottom:64px"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading -->
<h2 class="wp-block-heading">Add your title</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"size-full"} -->
<figure class="wp-block-image size-full"><img src="' . esc_url( $neve_fse_img05 ) . '" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"size-full"} -->
<figure class="wp-block-image size-full"><img src="' . esc_url( $neve_fse_img10 ) . '" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"bottom","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-bottom"><!-- wp:column {"verticalAlignment":"bottom","width":"66%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:66%"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"size-full"} -->
<figure class="wp-block-image size-large size-full"><img src="' . esc_url( $neve_fse_img04 ) . '" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size">"...Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut labore et dolore magna aliqua..." </p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button">Learn more</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
',
);
