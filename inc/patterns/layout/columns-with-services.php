<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package neve-fse
 * @since 1.0.0
 *
 * slug: columns-with-services
 * title: Columns with Services
 * categories: NeveFSE
 * keywords: columns, services, features, 3col
 */

use NeveFSE\Assets_Manager;

$neve_fse_img09 = Assets_Manager::get_image_url( 'neve-fse-img09.jpg' );
$neve_fse_img10 = Assets_Manager::get_image_url( 'neve-fse-img10.jpg' );
$neve_fse_img11 = Assets_Manager::get_image_url( 'neve-fse-img11.jpg' );

return array(
	'title'      => __( 'Columns with Services', 'neve-fse' ),
	'categories' => array( 'neve-fse' ),
	'keywords'   => array( 'columns', 'services', 'features', '3col' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"40px"}},"layout":{"inherit":true,"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignfull" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-bottom:64px"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"40px"}}} -->
<div class="wp-block-group alignwide"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"blockGap":"8px"}}} -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="text-transform:uppercase"><strong>Subheader</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Our Services</h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"200px"} -->
<div class="wp-block-column" style="flex-basis:200px"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-buttons"><!-- wp:button {"width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button">View all</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0px"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"border":{"radius":"5px"},"spacing":{"blockGap":"24px"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group" style="border-radius:5px">
	<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full">
		<img src="' . esc_url( $neve_fse_img10 ) . '" alt=""/>
	</figure>
	<!-- /wp:image -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Service Title</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0px"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"border":{"radius":"5px"},"spacing":{"blockGap":"24px"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group" style="border-radius:5px">
	<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full">
		<img src="' . esc_url( $neve_fse_img11 ) . '" alt=""/>
	</figure>
	<!-- /wp:image -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Service Title</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0px"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"border":{"radius":"5px"},"spacing":{"blockGap":"24px"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group" style="border-radius:5px">
	<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full">
		<img src="' . esc_url( $neve_fse_img09 ) . '" alt=""/>
	</figure>
	<!-- /wp:image -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Service Title</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
        ',
);
