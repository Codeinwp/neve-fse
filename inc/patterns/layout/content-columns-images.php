<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package neve-fse
 * @since 1.0.0
 *
 * slug: content-columns-images
 * title: Columns with Images and text
 * categories: NeveFSE
 * keywords: content, columns, gallery, images
 */

use NeveFSE\Assets_Manager;

$main_image = Assets_Manager::get_image_url( 'neve-fse-img10.jpg' );

$images = array(
	Assets_Manager::get_image_url( 'neve-fse-img05.jpg' ),
	Assets_Manager::get_image_url( 'neve-fse-img09.jpg' ),
	Assets_Manager::get_image_url( 'neve-fse-img11.jpg' ),
);

$single_image_markup = '
<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image size-large is-style-rounded">
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
	'title'      => __( 'Columns with Images and text', 'neve-fse' ),
	'categories' => array( 'neve-fse' ),
	'keywords'   => array( 'content', 'columns', 'gallery', 'images' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"blockGap":"64px","margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-bottom:64px"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"size-full"} -->
<figure class="wp-block-image size-full"><img src="' . esc_url( $main_image ) . '" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="text-transform:uppercase"><strong>Subheader</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Add your title here</h2>
<!-- /wp:heading -->

<!-- wp:gallery {"columns":3,"linkTo":"none"} -->
<figure class="wp-block-gallery has-nested-images columns-3 is-cropped">
    ' . $gallery_inner . '
</figure>
<!-- /wp:gallery -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
        ',
);
