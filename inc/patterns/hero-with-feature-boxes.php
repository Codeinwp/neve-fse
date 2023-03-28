<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package neve-fse
 * @since 1.0.0
 *
 * slug: hero-with-feature-boxes
 * title: Hero with feature boxes
 * categories: NeveFSE
 * keywords: hero, features
 */

$feature_markup = '
<!-- wp:column {"style":{"spacing":{"padding":{"top":"32px","right":"32px","bottom":"32px","left":"32px"}}},"backgroundColor":"ti-bg"} -->
<div class="wp-block-column has-ti-bg-background-color has-background" style="padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px">
<!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="has-text-align-center">' . __( 'Feature', 'neve-fse' ) . '</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">' . __( 'Learn more', 'neve-fse' ) . '</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:column -->
';

return array(
	'title'      => __( 'Hero with feature boxes', 'neve-fse' ),
	'categories' => array( 'neve-fse' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"40px"}},"backgroundColor":"ti-bg-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-ti-bg-alt-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-bottom:64px">
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"40px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide">
<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"huge"} -->
<h1 class="has-text-align-center has-huge-font-size">Lorem ipsum dolor sit amet, consectetur.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size">Lorem ipsum dolor sit amet.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide">
' . $feature_markup . $feature_markup . $feature_markup . '
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->
',
);
