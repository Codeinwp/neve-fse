<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package neve-fse
 * @since 1.0.0
 *
 * slug: team-members-columns
 * title: Columns with Team members
 * categories: NeveFSE
 * keywords: Columns, team members
 */

use NeveFSE\Assets_Manager;

$neve_fse_img06 = Assets_Manager::get_image_url( 'neve-fse-img06.jpg' );
$neve_fse_img07 = Assets_Manager::get_image_url( 'neve-fse-img07.jpg' );
$neve_fse_img08 = Assets_Manager::get_image_url( 'neve-fse-img08.jpg' );

return array(
	'title'      => __( 'Columns with Team members', 'neve-fse' ),
	'categories' => array( 'neve-fse' ),
	'keywords'   => array( 'Columns', 'team members' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"40px"}},"backgroundColor":"ti-bg-alt","layout":{"inherit":true,"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignfull has-ti-bg-alt-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-bottom:64px"><!-- wp:group {"style":{"border":{"radius":"5px"},"spacing":{"blockGap":"8px"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group" style="border-radius:5px"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">Our Team</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
<p class="has-text-align-center has-medium-font-size">Lorem ipsum dolor sit amet, consectetur.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":{"top":"32px","left":"32px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"","style":{"spacing":{"blockGap":"0px"}}} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:group {"style":{"spacing":{"blockGap":"16px","padding":{"top":"24px","right":"24px","bottom":"24px","left":"24px"}}},"backgroundColor":"ti-bg","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-ti-bg-background-color has-background" style="padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px">
    <!-- wp:image {"align":"center","width":100,"height":100,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
    <figure class="wp-block-image aligncenter size-full is-resized is-style-rounded">
        <img src="' . esc_url( $neve_fse_img08 ) . '" alt="" width="100" height="100"/>
    </figure>
    <!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-text-align-center has-medium-font-size">Jake Austin</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size" style="text-transform:uppercase"><strong>CEO</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"style":{"spacing":{"blockGap":{"top":"8px","left":"8px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:group {"style":{"border":{"radius":"5px"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group" style="border-radius:5px"><!-- wp:group {"style":{"spacing":{"blockGap":"16px","padding":{"top":"24px","right":"24px","bottom":"24px","left":"24px"}}},"backgroundColor":"ti-bg","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-ti-bg-background-color has-background" style="padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px">
    <!-- wp:image {"align":"center","width":100,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
    <figure class="wp-block-image aligncenter size-full is-resized is-style-rounded">
        <img src="' . esc_url( $neve_fse_img07 ) . '" alt="" width="100"/>
    </figure>
    <!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-text-align-center has-medium-font-size">Jake Austin</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size" style="text-transform:uppercase"><strong>CEO</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"style":{"spacing":{"blockGap":{"top":"8px","left":"8px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:group {"style":{"border":{"radius":"5px"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group" style="border-radius:5px"><!-- wp:group {"style":{"spacing":{"blockGap":"16px","padding":{"top":"24px","right":"24px","bottom":"24px","left":"24px"}}},"backgroundColor":"ti-bg","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-ti-bg-background-color has-background" style="padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px">
    <!-- wp:image {"align":"center","width":100,"height":100,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
    <figure class="wp-block-image aligncenter size-full is-resized is-style-rounded">
        <img src="' . esc_url( $neve_fse_img06 ) . '" alt="" width="100" height="100"/>
    </figure>
    <!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-text-align-center has-medium-font-size">Jane Spears</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size" style="text-transform:uppercase"><strong>Client Service</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"align":"center","style":{"spacing":{"blockGap":{"top":"8px","left":"8px"}}}} -->
<ul class="wp-block-social-links aligncenter"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
        ',
);
