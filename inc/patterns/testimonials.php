<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package neve-fse
 * @since 1.0.0
 *
 * slug: testimonials
 * title: Testimonials
 * categories: NeveFSE
 * keywords: testimonials, reviews
 */

return array(
	'title'      => __( 'Testimonials', 'neve-fse' ),
	'categories' => array( 'neve-fse' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"40px"}},"backgroundColor":"ti-bg-inv","textColor":"ti-fg-alt","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull has-ti-fg-alt-color has-ti-bg-inv-background-color has-text-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-bottom:64px">
<!-- wp:group {"align":"wide","layout":{"inherit":false}} -->
<div class="wp-block-group alignwide">
<!-- wp:columns -->
<div class="wp-block-columns">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:heading -->
<h2>' . __( 'Selected client testimonials', 'neve-fse' ) . '</h2>
<!-- /wp:heading -->
</div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size">"...Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore..."</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="text-transform:uppercase"><strong>' . __( 'Client name', 'neve-fse' ) . '</strong></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size">"...Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore..."</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="text-transform:uppercase"><strong>' . __( 'Client name', 'neve-fse' ) . '</strong></p>
<!-- /wp:paragraph -->
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
