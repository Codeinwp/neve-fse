<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package neve-fse
 * @since 1.0.0
 *
 * slug: full-width-columns-content-image
 * title: Full-width columns with image and content
 * categories: NeveFSE
 * keywords: Full-width, columns, image, inverted, dark
 */

use NeveFSE\Assets_Manager;

$cover_image = Assets_Manager::get_image_url( 'neve-fse-img04.jpg' );

return array(
	'title'      => __( 'Full-width columns with image and content', 'neve-fse' ),
	'categories' => array( 'neve-fse' ),
	'keywords'   => array( 'Full-width', 'columns', 'image', 'inverted', 'dark' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0px","margin":{"top":"0px","bottom":"0px"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"ti-bg-alt","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-ti-bg-alt-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|ti-fg-alt"}}},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"ti-bg-inv","textColor":"ti-fg-alt"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center has-ti-fg-alt-color has-ti-bg-inv-background-color has-text-color has-background has-link-color" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">

<!-- wp:cover {"url":"' . esc_url( $cover_image ) . '", "dimRatio":0,"overlayColor":"ti-accent","minHeight":600,"minHeightUnit":"px","isDark":false,"style":{"spacing":{"padding":{"top":"24px","right":"24px","bottom":"24px","left":"24px"}}}} -->
<div class="wp-block-cover is-light" style="padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px;min-height:600px">
    <span aria-hidden="true" class="wp-block-cover__background has-ti-accent-background-color has-background-dim-0 has-background-dim"></span>
    <img class="wp-block-cover__image-background" alt="" src="' . esc_url( $cover_image ) . '" data-object-fit="cover"/>
    <div class="wp-block-cover__inner-container">
        <!-- wp:paragraph {"align":"center","placeholder":"Write title…","textColor":"ti-fg-alt","fontSize":"large"} -->
        <p class="has-text-align-center has-ti-fg-alt-color has-text-color has-large-font-size"></p>
        <!-- /wp:paragraph -->
    </div>
</div><!-- /wp:cover -->

</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"padding":{"top":"64px","right":"24px","bottom":"64px","left":"24px"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:64px;padding-right:24px;padding-bottom:64px;padding-left:24px;flex-basis:50%"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="text-transform:uppercase"><strong>Subheader</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Add your title here</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"32px"} -->
<div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">Ut enim ad minim veniam, quis nostrud exercitation.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">Ut enim ad minim veniam, quis nostrud.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">Ut enim ad minim veniam, quis nostrud exercitation.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
',
);
