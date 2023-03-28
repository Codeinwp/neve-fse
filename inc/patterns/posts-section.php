<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package neve-fse
 * @since 1.0.0
 *
 * slug: posts-section
 * title: Posts Section
 * categories: NeveFSE
 * keywords: posts, related, articles, loop
 */

return array(
	'title'      => __( 'Posts Section', 'neve-fse' ),
	'categories' => array( 'neve-fse' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"blockGap":"40px","margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-bottom:64px">

<!-- wp:heading {"align":"wide"} -->
<h2 class="alignwide">' . __( 'Read these Posts', 'neve-fse' ) . '</h2>
<!-- /wp:heading -->

<!-- wp:query {"query":{"perPage":3,"pages":"3","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3},"align":"wide"} -->
<div class="wp-block-query alignwide">

<!-- wp:post-template -->
<!-- wp:post-featured-image /-->
<!-- wp:post-title {"level":3} /-->
<!-- wp:post-date /-->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results.","backgroundColor":"ti-bg-alt"} -->
<p class="has-ti-bg-alt-background-color has-background">' . __( 'No Posts were found', 'neve-fse' ) . '</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results -->

</div>
<!-- /wp:query -->

</div>
<!-- /wp:group -->
',
);
