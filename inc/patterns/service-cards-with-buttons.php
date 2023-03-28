<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package neve-fse
 * @since 1.0.0
 *
 * slug: service-cards-with-buttons
 * title: Service cards with buttons
 * categories: NeveFSE
 * keywords: columns, features, services
 */

use NeveFSE\Assets_Manager;

return array(
	'title'      => __( 'Service cards with buttons', 'neve-fse' ),
	'categories' => array( 'neve-fse' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"40px"}},"backgroundColor":"ti-bg-alt","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull has-ti-bg-alt-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-bottom:64px">

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="has-text-align-center">' . __( 'My services', 'neve-fse' ) . '</h2>
<!-- /wp:heading -->

<!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide">
<!-- wp:columns -->
<div class="wp-block-columns">
<!-- wp:column {"style":{"spacing":{"blockGap":"0px"}},"backgroundColor":"ti-bg"} -->
<div class="wp-block-column has-ti-bg-background-color has-background">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="' . esc_url( Assets_Manager::get_image_url( 'img-neve-fse-05.png' ) ) . '"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","right":"24px","bottom":"24px","left":"24px"}}},"backgroundColor":"ti-bg","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-ti-bg-background-color has-background" style="padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px">
<!-- wp:heading {"level":3} -->
<h3>Lorem ipsum</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">' . __( 'Learn more', 'neve-fse' ) . '</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"0px"}},"backgroundColor":"ti-bg"} -->
<div class="wp-block-column has-ti-bg-background-color has-background">
<!-- wp:image {"id":63,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="' . esc_url( Assets_Manager::get_image_url( 'img-neve-fse-04.png' ) ) . '"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","right":"24px","bottom":"24px","left":"24px"}}},"backgroundColor":"ti-bg","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-ti-bg-background-color has-background" style="padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px">
<!-- wp:heading {"level":3} -->
<h3>Lorem ipsum</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">' . __( 'Learn more', 'neve-fse' ) . '</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
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
