<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package neve-fse
 * @since 1.0.0
 *
 * slug: post-loop-5
 * title: Post rows
 * categories: NeveFSE
 * keywords: posts, loop, blog, feed, rows, cards
 */

return array(
	'title'      => __( 'Post rows', 'neve-fse' ),
	'categories' => array( 'neve-fse', 'posts' ),
	'keywords'   => array( 'posts', 'loop', 'blog', 'feed', 'rows', 'cards' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"blockGap":"40px","margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"ti-bg-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-ti-bg-alt-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-bottom:64px"><!-- wp:query {"queryId":1,"query":{"perPage":"2","pages":"2","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list","columns":2},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template -->
<!-- wp:columns {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":{"top":"0px","left":"0px"}}},"backgroundColor":"ti-bg"} -->
<div class="wp-block-columns has-ti-bg-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:post-featured-image {"isLink":true,"height":"100%"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"padding":{"top":"32px","right":"32px","bottom":"32px","left":"32px"}}},"backgroundColor":"ti-bg"} -->
<div class="wp-block-column is-vertically-aligned-center has-ti-bg-background-color has-background" style="padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px;flex-basis:50%"><!-- wp:post-date {"textAlign":"left","fontSize":"small"} /-->

<!-- wp:post-title {"textAlign":"left","isLink":true} /-->

<!-- wp:post-excerpt {"textAlign":"left","moreText":"Read more","style":{"elements":{"link":{"color":{"text":"var:preset|color|ti-accent"}}}},"fontSize":"normal"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when a query returns no results.","backgroundColor":"ti-bg"} -->
<p class="has-text-align-center has-ti-bg-background-color has-background">No Posts were found</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results -->

<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":"Previous","style":{"typography":{"textTransform":"none"}}} /-->

<!-- wp:query-pagination-next {"label":"Next","style":{"typography":{"textTransform":"none"}}} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
',
);
