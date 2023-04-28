<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package neve-fse
 * @since 1.0.0
 *
 * slug: archive-cover
 * title: Archive (Cover)
 * categories: NeveFSE
 * keywords: archive, posts, cover
 */

use NeveFSE\Assets_Manager;

return array(
	'title'      => __( 'Archive (Cover)', 'neve-fse' ),
	'categories' => array( 'neve-fse-layouts' ),
	'keywords'   => array( 'archive', 'posts', 'cover' ),
	'content'    => '
<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0","margin":{"top":"0","bottom":"0"}}}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"8px"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"8px"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignfull" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-bottom:8px">
        <!-- wp:query-title {"type":"archive","textAlign":"center","align":"wide"} /-->
    </div>
    <!-- /wp:group -->

	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"blockGap":"40px","margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-bottom:64px">
		<!-- wp:query {"queryId":1,"query":{"perPage":"4","pages":"","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":2},"align":"wide"} -->
		<div class="wp-block-query alignwide">
			<!-- wp:post-template -->
				<!-- wp:cover {"useFeaturedImage":true,"dimRatio":60,"overlayColor":"ti-bg-inv","contentPosition":"bottom left","tagName":"section"} -->
				<section class="wp-block-cover has-custom-content-position is-position-bottom-left">
					<span aria-hidden="true" class="wp-block-cover__background has-ti-bg-inv-background-color has-background-dim-60 has-background-dim"></span>
					<div class="wp-block-cover__inner-container">
						<!-- wp:post-title {"level":3,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|ti-fg-alt"}}}}} /-->
						<!-- wp:post-date {"fontSize":"small"} /-->
					</div>
				</section>
				<!-- /wp:cover -->
			<!-- /wp:post-template -->

			<!-- wp:query-no-results -->
				<!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when a query returns no results.","backgroundColor":"ti-bg-alt"} -->
				<p class="has-text-align-center has-ti-bg-alt-background-color has-background">No Posts were found</p>
				<!-- /wp:paragraph -->
			<!-- /wp:query-no-results -->

			<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
				<!-- wp:query-pagination-previous {"label":"Previous","style":{"typography":{"textTransform":"none"}}} /-->
				<!-- wp:query-pagination-next {"label":"Next","style":{"typography":{"textTransform":"none"}}} /-->
			<!-- /wp:query-pagination -->
		</div>
		<!-- /wp:query -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"ti-bg-inv","textColor":"ti-fg-alt","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignfull has-ti-fg-alt-color has-ti-bg-inv-background-color has-text-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-bottom:64px">
    	<!-- wp:heading {"textAlign":"center"} -->
        <h2 class="wp-block-heading has-text-align-center">Search for an article</h2>
        <!-- /wp:heading -->

        <!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search"} /-->
	</div>
    <!-- /wp:group -->
</main>
<!-- /wp:group -->
	',
);
