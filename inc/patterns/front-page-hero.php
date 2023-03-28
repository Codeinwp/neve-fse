<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package neve-fse
 * @since 1.0.0
 *
 * slug: front-page-hero
 * title: Front page hero
 * categories: NeveFSE
 * keywords: hero, image, heading, buttons
 */

use NeveFSE\Assets_Manager;

return array(
	'title'      => __( 'Hero with feature boxes', 'neve-fse' ),
	'categories' => array( 'neve-fse' ),
	'content'    => '
<!-- wp:group {"style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"40px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-bottom:64px">
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"40px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide">
<!-- wp:heading {"level":1,"fontSize":"huge"} -->
<h1 class="has-huge-font-size">' . __( 'Neve FSE is a clean &amp; minimal theme for your next Gutenberg project.', 'neve-fse' ) . '</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","fontSize":"large"} -->
<p class="has-text-align-left has-large-font-size">' . __( 'Meaningful simplicity, powered by Full-site editing & style variations.', 'neve-fse' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">' . __( 'Get in touch', 'neve-fse' ) . '</a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"ti-fg","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-ti-fg-color has-text-color wp-element-button">' . __( 'Learn more', 'neve-fse' ) . '</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->

<!-- wp:image {"align":"wide","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image alignwide size-full"><img src="' . esc_url( Assets_Manager::get_image_url( 'img-neve-fse-08.png' ) ) . '"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
',
);
