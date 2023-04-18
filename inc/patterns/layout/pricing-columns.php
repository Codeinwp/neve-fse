<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package neve-fse
 * @since 1.0.0
 *
 * slug: pricing-columns
 * title: Columns with Pricing
 * categories: NeveFSE
 * keywords: Pricing, plans, columns
 */

use NeveFSE\Assets_Manager;

return array(
	'title'      => __( 'Columns with Pricing', 'neve-fse' ),
	'categories' => array( 'neve-fse' ),
	'keywords'   => array( 'Pricing', 'plans', 'columns' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"40px"}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-bottom:64px"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">Pricing Plans</h2>
<!-- /wp:heading -->

<!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"32px","right":"32px","bottom":"32px","left":"32px"}}},"backgroundColor":"ti-bg-inv","textColor":"ti-fg-alt"} -->
<div class="wp-block-column is-vertically-aligned-center has-ti-fg-alt-color has-ti-bg-inv-background-color has-text-color has-background" style="padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="wp-block-heading has-text-align-center">Starter</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"huge"} -->
<p class="has-text-align-center has-huge-font-size">$69</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button">Buy Plan</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Lorem Ipsum</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Lorem Ipsum</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Lorem Ipsum</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Lorem Ipsum</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"64px","right":"32px","bottom":"64px","left":"32px"}}},"backgroundColor":"ti-accent","textColor":"ti-fg-alt"} -->
<div class="wp-block-column has-ti-fg-alt-color has-ti-accent-background-color has-text-color has-background" style="padding-top:64px;padding-right:32px;padding-bottom:64px;padding-left:32px"><!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="wp-block-heading has-text-align-center">Pro</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"huge"} -->
<p class="has-text-align-center has-huge-font-size">$89</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-fill"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill"><a class="wp-block-button__link wp-element-button">Buy Plan</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Lorem Ipsum</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Lorem Ipsum</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Lorem Ipsum</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Lorem Ipsum</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"32px","right":"32px","bottom":"32px","left":"32px"}}},"backgroundColor":"ti-bg-inv","textColor":"ti-fg-alt"} -->
<div class="wp-block-column is-vertically-aligned-center has-ti-fg-alt-color has-ti-bg-inv-background-color has-text-color has-background" style="padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="wp-block-heading has-text-align-center">Expert</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"huge"} -->
<p class="has-text-align-center has-huge-font-size">$199</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button">Buy Plan</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Lorem Ipsum</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Lorem Ipsum</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Lorem Ipsum</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Lorem Ipsum</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"align":"center","backgroundColor":"ti-bg-alt","fontSize":"small"} -->
<p class="has-text-align-center has-ti-bg-alt-background-color has-background has-small-font-size">All plans come with a 14-day money-back guarantee</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
        ',
);
