<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package neve-fse
 * @since 1.0.0
 *
 * slug: columns-content-images
 * title: Columns with content and images
 * categories: NeveFSE
 * keywords: Content, images, text, columns
 */

use NeveFSE\Assets_Manager;

$neve_fse_img05 = Assets_Manager::get_image_url( 'neve-fse-img05.jpg' );
$neve_fse_img09 = Assets_Manager::get_image_url( 'neve-fse-img09.jpg' );

return array(
	'title'      => __( 'Columns with content and images', 'neve-fse' ),
	'categories' => array( 'neve-fse' ),
	'keywords'   => array( 'Content', 'images', 'text', 'columns' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"blockGap":"64px","margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"ti-bg-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-ti-bg-alt-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-bottom:64px"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"left":"16px"},"blockGap":"8px"},"border":{"left":{"color":"var:preset|color|ti-accent","width":"4px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="border-left-color:var(--wp--preset--color--ti-accent);border-left-width:4px;padding-left:16px"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="text-transform:uppercase"><strong>Subheader</strong></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Add your title</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button">Learn more</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
    <!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"size-full"} -->
    <figure class="wp-block-image size-full">
        <img src="' . esc_url( $neve_fse_img09 ) . '" alt=""/>
    </figure>
    <!-- /wp:image -->
</div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
    <!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"size-full"} -->
    <figure class="wp-block-image size-full">
        <img src="' . esc_url( $neve_fse_img05 ) . '" alt=""/>
    </figure>
    <!-- /wp:image -->
</div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
        ',
);
