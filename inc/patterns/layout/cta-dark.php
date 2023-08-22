<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package neve-fse
 * @since 1.0.0
 *
 * slug: cta-dark
 * title: Call to Action with Background Color
 * categories: NeveFSE
 * keywords: call to action, CTA, inverted, dark, centered, cover
 */

use NeveFSE\Assets_Manager;

return array(
	'title'      => __( 'Call to Action with Background Color', 'neve-fse' ),
	'categories' => array( 'neve-fse' ),
	'keywords'   => array( 'call to action', 'CTA', 'inverted', 'dark', 'centered', 'cover' ),
	'content'    => '
<!-- wp:cover {"overlayColor":"ti-bg-inv","minHeight":500,"minHeightUnit":"px","contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"top":"24px","right":"24px","bottom":"24px","left":"24px"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-cover alignfull" style="margin-top:0;margin-bottom:0;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px;min-height:500px"><span aria-hidden="true" class="wp-block-cover__background has-ti-bg-inv-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"textColor":"ti-fg-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-ti-fg-alt-color has-text-color"><!-- wp:heading {"textAlign":"center","align":"wide","fontSize":"huge"} -->
<h2 class="wp-block-heading alignwide has-text-align-center has-huge-font-size">Let’s work together on your<br>next project</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Learn More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
',
);
