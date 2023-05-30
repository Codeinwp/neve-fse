<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package neve-fse
 * @since 1.0.0
 *
 * slug: single-post-cover
 * title: Single Post 3 (Cover)
 * categories: NeveFSE
 * keywords: single, post, cover
 */

use NeveFSE\Assets_Manager;

return array(
	'title'      => __( 'Single Post 3 (Cover)', 'neve-fse' ),
	'categories' => array( 'neve-fse-layouts' ),
	'keywords'   => array( 'single', 'post', 'cover', 'boxed' ),
	'content'    => '
<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0","margin":{"top":"0","bottom":"0"}}}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","bottom":"0px"},"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignfull" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px">
		<!-- wp:cover {"useFeaturedImage":true,"dimRatio":80,"overlayColor":"ti-bg-inv","minHeight":45,"minHeightUnit":"vh","align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px","right":"24px","left":"24px"}}}} -->
		<div class="wp-block-cover alignfull" style="padding-top:64px;padding-right:24px;padding-bottom:64px;padding-left:24px;min-height:45vh">
			<span aria-hidden="true" class="wp-block-cover__background has-ti-bg-inv-background-color has-background-dim-80 has-background-dim"></span>
			<div class="wp-block-cover__inner-container">
				<!-- wp:group {"textColor":"ti-fg-alt","layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-ti-fg-alt-color has-text-color">
					<!-- wp:post-title {"textAlign":"center","level":1} /-->

					<!-- wp:post-date {"textAlign":"center"} /-->
				</div>
				<!-- /wp:group -->
			</div>
		</div>
		<!-- /wp:cover -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-bottom:64px">
		<!-- wp:group {"layout":{"inherit":true,"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:group {"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:post-content /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"40px"}},"backgroundColor":"ti-bg-alt","layout":{"inherit":true,"type":"constrained"}} -->
	<div class="wp-block-group alignfull has-ti-bg-alt-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-bottom:64px">
		<!-- wp:comments {"className":"wp-block-comments-query-loop "} -->
		<div class="wp-block-comments wp-block-comments-query-loop">
			<!-- wp:comments-title {"level":3,"style":{"spacing":{"margin":{"top":"40px"}}}} /-->

			<!-- wp:comment-template -->
				<!-- wp:columns -->
				<div class="wp-block-columns">
					<!-- wp:column {"width":"40px"} -->
					<div class="wp-block-column" style="flex-basis:40px">
						<!-- wp:avatar {"size":40,"style":{"border":{"radius":"20px"}}} /-->
					</div>
					<!-- /wp:column -->
	
					<!-- wp:column -->
					<div class="wp-block-column">
						<!-- wp:comment-author-name {"style":{"spacing":{"margin":{"bottom":"8px"}}}} /-->
	
						<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"flex"}} -->
						<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px">
							<!-- wp:comment-date /-->
	
							<!-- wp:comment-edit-link /-->
						</div>
						<!-- /wp:group -->
	
						<!-- wp:comment-content /-->
	
						<!-- wp:comment-reply-link /-->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->
			<!-- /wp:comment-template -->

			<!-- wp:comments-pagination {"align":"center","layout":{"type":"flex","justifyContent":"space-between"}} -->
				<!-- wp:comments-pagination-previous {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} /-->
				<!-- wp:comments-pagination-numbers /-->
				<!-- wp:comments-pagination-next {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} /-->
			<!-- /wp:comments-pagination -->
		</div>
		<!-- /wp:comments -->

		<!-- wp:comments {"className":"wp-block-comments-query-loop "} -->
		<div class="wp-block-comments wp-block-comments-query-loop">
			<!-- wp:post-comments-form /-->
		</div>
		<!-- /wp:comments -->
	</div>
	<!-- /wp:group -->
</main>
<!-- /wp:group -->
	',
);
