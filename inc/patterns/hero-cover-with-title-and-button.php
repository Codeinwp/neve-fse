<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package neve-fse
 * @since 1.0.0
 *
 * slug: hero-cover-with-title-and-button
 * title: Hero cover with title and button
 * categories: NeveFSE
 * keywords: hero, cover
 */

use NeveFSE\Assets_Manager;

$image = Assets_Manager::get_image_url( 'img-neve-fse-06.png' );

return array(
	'title'      => __( 'Hero cover with title and button', 'neve-fse' ),
	'categories' => array( 'neve-fse' ),
	'content'    => '
<!-- wp:cover {"url":"' . esc_url( $image ) . '","dimRatio":40,"overlayColor":"ti-bg-inv","focalPoint":{"x":0.58,"y":1},"minHeight":60,"minHeightUnit":"vh","contentPosition":"center center","isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"24px","right":"24px","bottom":"24px","left":"24px"}}}} -->
<div class="wp-block-cover alignfull is-light" style="padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px;min-height:60vh"><span aria-hidden="true" class="wp-block-cover__background has-ti-bg-inv-background-color has-background-dim-40 has-background-dim"></span>
<img class="wp-block-cover__image-background" alt="" src="' . esc_url( $image ) . '" style="object-position:58% 100%" data-object-fit="cover" data-object-position="58% 100%"/>
<div class="wp-block-cover__inner-container">
<!-- wp:group {"textColor":"ti-fg-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-ti-fg-alt-color has-text-color">
<!-- wp:heading {"textAlign":"center","align":"wide","fontSize":"huge"} -->
<h2 class="alignwide has-text-align-center has-huge-font-size">' . __( 'A hero section with a full-width cover', 'neve-fse' ) . '</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
<p class="has-text-align-center has-medium-font-size">' . __( 'An introduction message for the homepage hero.', 'neve-fse' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">' . __( 'This is a button', 'neve-fse' ) . '</a></div>
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
