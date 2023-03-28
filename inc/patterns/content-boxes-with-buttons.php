<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package neve-fse
 * @since 1.0.0
 *
 * slug: content-boxes-with-buttons
 * title: Content boxes with buttons
 * categories: NeveFSE
 * keywords: cards, button, content, boxes
 */

use NeveFSE\Assets_Manager;

return array(
	'title'      => __( 'Content boxes with buttons', 'neve-fse' ),
	'categories' => array( 'neve-fse' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"63px"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"ti-bg-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-ti-bg-alt-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-bottom:63px">
<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"0px","left":"0px"},"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"backgroundColor":"ti-bg"} -->
<div class="wp-block-columns alignwide has-ti-bg-background-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
<!-- wp:column {"style":{"spacing":{"blockGap":"0px"}},"backgroundColor":"ti-bg"} -->
<div class="wp-block-column has-ti-bg-background-color has-background">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full">
<img src="' . esc_url( Assets_Manager::get_image_url( 'img-neve-fse-07.png' ) ) . '"/>
</figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"24px","right":"24px","bottom":"24px","left":"24px"}}},"backgroundColor":"ti-bg"} -->
<div class="wp-block-column is-vertically-aligned-center has-ti-bg-background-color has-background" style="padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px">
<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="text-transform:uppercase"><strong>' . __( 'Service', 'neve-fse' ) . ' 1</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2>Lorem ipsum</h2>
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
<!-- /wp:column -->
</div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"0px","left":"0px"},"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"backgroundColor":"ti-bg"} -->
<div class="wp-block-columns alignwide has-ti-bg-background-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
<!-- wp:column {"style":{"spacing":{"blockGap":"0px"}},"backgroundColor":"ti-bg"} -->
<div class="wp-block-column has-ti-bg-background-color has-background">
<!-- wp:image {"id":63,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full">
<img src="' . esc_url( Assets_Manager::get_image_url( 'img-neve-fse-04.png' ) ) . '"/>
</figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"24px","right":"24px","bottom":"24px","left":"24px"}}},"backgroundColor":"ti-bg"} -->
<div class="wp-block-column is-vertically-aligned-center has-ti-bg-background-color has-background" style="padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px">
<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="text-transform:uppercase"><strong>' . __( 'Service', 'neve-fse' ) . ' 2</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2>Lorem ipsum</h2>
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
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->
',
);
