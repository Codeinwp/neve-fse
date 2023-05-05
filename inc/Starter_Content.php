<?php
/**
 * Starter content.
 *
 * @author Themeisle
 * @package neve-fse
 * @since 1.0.0
 */

namespace NeveFSE;

/**
 * Class Starter Content
 *
 * @package neve-fse
 */
class Starter_Content {
	const HOME_SLUG = 'home';
	const BLOG_SLUG = 'blog';

	/**
	 * Get the starter content.
	 *
	 * @return array
	 */
	public function get() {
		return array(
			'nav_menus' => array(
				'primary' => array(
					'items' => array(
						'home'      => array(
							'type'      => 'post_type',
							'object'    => 'page',
							'object_id' => '{{' . self::HOME_SLUG . '}}',
						),
						'page_blog' => array(
							'type'      => 'post_type',
							'object'    => 'page',
							'object_id' => '{{' . self::BLOG_SLUG . '}}',
						),
					),
				),
			),
			'options'   => array(
				'page_on_front'  => '{{' . self::HOME_SLUG . '}}',
				'page_for_posts' => '{{' . self::BLOG_SLUG . '}}',
				'show_on_front'  => 'page',
			),
			'posts'     => array(
				self::BLOG_SLUG => array(
					'post_name'  => self::BLOG_SLUG,
					'post_type'  => 'page',
					'post_title' => self::BLOG_SLUG,
				),
				self::HOME_SLUG => array(
					'post_type'    => 'page',
					'post_title'   => self::HOME_SLUG,
					'post_content' => '
					<!-- wp:paragraph {"align":"center"} -->
					<p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
					<!-- /wp:paragraph -->
					',
				),
			),
		);
	}
}
