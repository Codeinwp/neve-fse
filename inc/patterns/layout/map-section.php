<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package neve-fse
 * @since 1.0.0
 *
 * slug: map-section
 * title: Map Section
 * categories: NeveFSE
 * keywords: contact
 */

use NeveFSE\Assets_Manager;

$map_image = Assets_Manager::get_image_url( 'neve-fse-img14.webp' );

return array(
	'title'      => __( 'Map Section', 'neve-fse' ),
	'categories' => array( 'neve-fse' ),
	'keywords'   => array( 'contact' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|80","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:image {"id":1198,"sizeSlug":"full","linkDestination":"none","align":"wide"} -->
<figure class="wp-block-image alignwide size-full"><img src="' . esc_url( $map_image ) . '" alt="" class="wp-image-1198"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->',
);
