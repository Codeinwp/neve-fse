<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package neve-fse
 * @since 1.0.0
 *
 * slug: columns-with-icons-and-buttons
 * title: Boxed columns with icons and buttons
 * categories: NeveFSE
 * keywords: services, features, icons
 */

use NeveFSE\Assets_Manager;

$images = array(
	Assets_Manager::get_image_url( 'img-neve-fse-03.svg' ),
	Assets_Manager::get_image_url( 'img-neve-fse-02.svg' ),
	Assets_Manager::get_image_url( 'img-neve-fse-01.svg' ),
);

$feature_markup = '

<!-- wp:column {"style":{"spacing":{"padding":{"top":"32px","right":"32px","bottom":"32px","left":"32px"}}},"backgroundColor":"ti-bg-inv","textColor":"ti-fg-alt"} -->
<div class="wp-block-column has-ti-fg-alt-color has-ti-bg-inv-background-color has-text-color has-background" style="padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px">
<!-- wp:image {"align":"center","sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-large"><img src="%s"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="has-text-align-center">' . __( 'Feature', 'neve-fse' ) . '</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">' . __( 'Learn more', 'neve-fse' ) . '</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:column -->
';

$services_columns = join(
	'',
	array(
		sprintf( $feature_markup, esc_url( $images[0] ) ),
		sprintf( $feature_markup, esc_url( $images[1] ) ),
		sprintf( $feature_markup, esc_url( $images[2] ) ),
	) 
);


return array(
	'title'      => __( 'Boxed columns with icons and buttons', 'neve-fse' ),
	'categories' => array( 'neve-fse' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"40px"}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-bottom:64px">
<!-- wp:heading {"textAlign":"center"} -->
<h2 class="has-text-align-center">Feature boxes section</h2>
<!-- /wp:heading -->

<!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide">
<!-- wp:columns -->
<div class="wp-block-columns">
' . $services_columns . '
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->',
);


