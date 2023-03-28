<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package neve-fse
 * @since 1.0.0
 *
 * slug: gallery-with-title
 * title: Gallery with title
 * categories: NeveFSE
 * keywords: gallery, images
 */

use NeveFSE\Assets_Manager;

$images = array(
	Assets_Manager::get_image_url( 'img-neve-fse-08.png' ),
	Assets_Manager::get_image_url( 'img-neve-fse-07.png' ),
	Assets_Manager::get_image_url( 'img-neve-fse-06.png' ),
	Assets_Manager::get_image_url( 'img-neve-fse-05.png' ),
	Assets_Manager::get_image_url( 'img-neve-fse-04.png' ),
);

$single_image_markup = '
<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large">
<img src="%s"/>
</figure>
<!-- /wp:image -->
';

$gallery_inner = join(
	'',
	array_map(
		function ( $image ) use ( $single_image_markup ) {
			return sprintf( $single_image_markup, esc_url( $image ) );
		},
		$images 
	) 
);

return array(
	'title'      => __( 'Gallery with title', 'neve-fse' ),
	'categories' => array( 'neve-fse' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"40px"}},"backgroundColor":"ti-bg-inv","textColor":"ti-fg-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-ti-fg-alt-color has-ti-bg-inv-background-color has-text-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-bottom:64px">
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"40px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide">
<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide">
<!-- wp:heading -->
<h2>' . __( 'An image gallery', 'neve-fse' ) . '</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:gallery {"columns":3,"linkTo":"none"} -->
<figure class="wp-block-gallery has-nested-images columns-3 is-cropped">
' . $gallery_inner . '
</figure>
<!-- /wp:gallery -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
',
);
