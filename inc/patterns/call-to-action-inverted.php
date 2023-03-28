<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package neve-fse
 * @since 1.0.0
 *
 * slug: call-to-action-inverted
 * title: Call to action
 * categories: NeveFSE
 * keywords: call to action, CTA
 */

return array(
	'title'      => __( 'Call to action', 'neve-fse' ),
	'categories' => array( 'neve-fse' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"40px"}},"backgroundColor":"ti-accent","textColor":"ti-fg-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-ti-fg-alt-color has-ti-accent-background-color has-text-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-bottom:64px">
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"40px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide">
<!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"huge"} -->
<h1 class="has-text-align-center has-huge-font-size">' . __( 'A call to action section', 'neve-fse' ) . '</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">' . __( 'Learn more', 'neve-fse' ) . '</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
',
);

