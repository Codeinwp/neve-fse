<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package neve-fse
 * @since 1.0.0
 *
 * slug: page-title-4
 * title: Page Title - Cover
 * categories: NeveFSE
 * keywords: Page Title, Post title, background, cover
 */

use NeveFSE\Assets_Manager;

$cover_image = Assets_Manager::get_image_url( 'neve-fse-img04.jpg' );

return array(
	'title'      => __( 'Page Title - Cover', 'neve-fse' ),
	'categories' => array( 'neve-fse', 'posts' ),
	'keywords'   => array( 'Page Title', 'Post title', 'background', 'cover' ),
	'content'    => '
<!-- wp:cover {"url":"' . esc_url( $cover_image ) . '","dimRatio":70,"overlayColor":"ti-bg-inv","minHeight":200,"contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"top":"64px","right":"32px","bottom":"64px","left":"32px"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:64px;padding-right:32px;padding-bottom:64px;padding-left:32px;min-height:200px">
    <span aria-hidden="true" class="wp-block-cover__background has-ti-bg-inv-background-color has-background-dim-70 has-background-dim"></span>
    <img class="wp-block-cover__image-background" alt="" src="' . esc_url( $cover_image ) . '" data-object-fit="cover"/>
    <div class="wp-block-cover__inner-container">
        <!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
        <div class="wp-block-group alignwide">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"32px","right":"32px","bottom":"32px","left":"32px"},"blockGap":"8px"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px">
                <!-- wp:post-title {"textAlign":"center","level":1} /-->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
</div>
<!-- /wp:cover -->
        ',
);
