<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package neve-fse
 * @since 1.0.0
 *
 * slug: post-loop-2
 * title: Posts loop grid inverted
 * categories: NeveFSE
 * keywords: posts, loop, blog, feed, dark, inverted
 */

return array(
	'title'      => __( 'Posts loop grid inverted', 'neve-fse' ),
	'categories' => array( 'neve-fse', 'posts' ),
	'keywords'   => array( 'posts', 'loop', 'blog', 'feed', 'dark', 'inverted' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"blockGap":"40px","margin":{"top":"0px","bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|ti-fg-alt"}}}},"backgroundColor":"ti-bg-inv","textColor":"ti-fg-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-ti-fg-alt-color has-ti-bg-inv-background-color has-text-color has-background has-link-color" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-bottom:64px"><!-- wp:heading {"align":"wide"} -->
<h2 class="wp-block-heading alignwide">From the blog</h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":"3","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true} /-->

<!-- wp:post-date {"fontSize":"small"} /-->

<!-- wp:post-title {"level":3,"isLink":true} /-->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when a query returns no results.","backgroundColor":"ti-bg","textColor":"ti-fg"} -->
<p class="has-text-align-center has-ti-fg-color has-ti-bg-background-color has-text-color has-background">No Posts were found</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
        ',
);
