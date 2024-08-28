<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package neve-fse
 * @since 1.1.0
 *
 * slug: hero-with-feature-columns
 * title: Hero section with feature columns
 * categories: NeveFSE
 * keywords: columns, hero
 */

use NeveFSE\Assets_Manager;

return array(
	'title'      => __( 'Hero section with feature columns', 'neve-fse' ),
	'categories' => array( 'neve-fse' ),
	'keywords'   => array( 'columns', 'hero' ),
	'content'    => '
<!-- wp:group {"style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"blockGap":"24px","margin":{"top":"0px","bottom":"0px"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-bottom:64px">
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:heading {"level":1,"align":"wide","fontSize":"huge"} -->
			<h1 class="alignwide has-huge-font-size">Create and grow your<br>unique website today</h1>
			<!-- /wp:heading -->
		
			<!-- wp:paragraph {"fontSize":"medium"} -->
			<p class="has-medium-font-size">Build a website for your business or brand, with Neve FSE</p>
			<!-- /wp:paragraph -->
		
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Learn more</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image aligncenter size-full">
			<img src="' . esc_url( Assets_Manager::get_image_url( 'neve-fse-img13.webp' ) ) . '"/>
			</figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->',
);
