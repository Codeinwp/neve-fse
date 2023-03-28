<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package neve-fse
 * @since 1.0.0
 *
 * slug: columns-with-icons
 * title: Columns with icons
 * categories: NeveFSE
 * keywords: icons, columns, features
 */

use NeveFSE\Assets_Manager;

$images = array(
	Assets_Manager::get_image_url( 'img-neve-fse-03.svg' ),
	Assets_Manager::get_image_url( 'img-neve-fse-02.svg' ),
	Assets_Manager::get_image_url( 'img-neve-fse-01.svg' ),
);

$service_markup = '
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:image {"align":"center","sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-large">
<img src="%s"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="has-text-align-center">' . __( 'Service', 'neve-fse' ) . '</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
';

$services_columns = join(
	'',
	array(
		sprintf( $service_markup, esc_url( $images[0] ) ),
		sprintf( $service_markup, esc_url( $images[1] ) ),
		sprintf( $service_markup, esc_url( $images[2] ) ),
	) 
);


return array(
	'title'      => __( 'Columns with icons', 'neve-fse' ),
	'categories' => array( 'neve-fse' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"ti-accent","textColor":"ti-fg-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-ti-fg-alt-color has-ti-accent-background-color has-text-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-bottom:64px">
<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide">
' . $services_columns . '
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->',
);


