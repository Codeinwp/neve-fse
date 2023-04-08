<?php
/**
 * Template Parts Handler.
 *
 * @author Themeisle
 * @package neve-fse
 * @since 1.0.0
 */

namespace NeveFSE;

/**
 * Class Template_Parts
 *
 * @package neve-fse
 */
class Template_Parts {

	/**
	 * Template_Parts constructor.
	 */
	public function __construct() {
		$this->register_hooks();
	}

	/**
	 * Register hooks.
	 *
	 * @return void
	 */
	private function register_hooks() {
		add_action( 'default_wp_template_part_areas', array( $this, 'register_template_parts_areas' ) );
	}

	/**
	 * Register template parts areas.
	 *
	 * @param array $areas Template parts areas.
	 *
	 * @return array
	 */
	public function register_template_parts_areas( $areas ) {
		$areas[] = array(
			'area'        => 'page_title',
			'label'       => __( 'Page Title', 'neve-fse' ),
			'description' => __( 'The page title area.', 'neve-fse' ),
			'icon'        => 'layout',
		);

		return $areas;
	}
}
