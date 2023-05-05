<?php
/**
 * Patterns Handler.
 *
 * @author Themeisle
 * @package neve-fse
 * @since 1.0.0
 */

namespace NeveFSE;

use WP_Block_Pattern_Categories_Registry;

/**
 * Class Block_Patterns
 *
 * @package neve-fse
 */
class Block_Patterns {

	/**
	 * Patterns categories.
	 *
	 * @var array
	 */
	private $categories = array();
	/**
	 * The patterns array.
	 *
	 * These use the file names without termination inside the `inc/patterns` directory.
	 *
	 * @var array
	 */
	private $patterns = array();

	/**
	 * Block_Patterns constructor.
	 */
	public function __construct() {
		$this->setup_properties();

		add_action( 'init', array( $this, 'run' ) );
	}

	/**
	 * Run the class functionality.
	 *
	 * @return void
	 */
	public function run() {
		$this->register_categories();
		$this->register_patterns();
	}

	/**
	 * Setup class properties.
	 *
	 * @return void
	 */
	private function setup_properties() {
		$categories = array(
			'neve-fse'         => array(
				'label'       => __( 'Neve FSE Patterns', 'neve-fse' ),
				'description' => __( 'Patterns for several sections and components', 'neve-fse' ),
			),
			'neve-fse-layouts' => array(
				'label'       => __( 'Neve FSE Layouts', 'neve-fse' ),
				'description' => __( 'Full-page layouts that can be used as templates', 'neve-fse' ),
			),
		);

		$patterns = array(
			// layout templates patterns.
			'templates/single-post-cover-boxed',
			'templates/single-post-cover',
			'templates/archive-cover',
			'templates/archive-list',

			// layout patterns.
			'layout/cta-dark',
			'layout/full-width-columns-content-image',
			'layout/full-width-quote',
			'layout/page-cover-bg-image',
			'layout/page-cover-with-buttons',
			'layout/content-with-images',
			'layout/team-members-columns',
			'layout/columns-with-services',
			'layout/pricing-columns',
			'layout/columns-with-icons',
			'layout/boxed-features-1',
			'layout/boxed-features-2',
			'layout/columns-with-cards',
			'layout/columns-content-images',
			'layout/columns-testimonials',
			'layout/columns-text-image',
			'layout/columns-image-and-text',
			'layout/portfolio-columns',
			'layout/columns-image-and-text-inv',

			// Post patterns.
			'loops/post-loop-1',
			'loops/post-loop-2',
			'loops/post-loop-3',
			'loops/post-loop-4',
			'loops/post-loop-5',
			'loops/post-loop-6',
			'loops/post-loop-7',
			'loops/post-loop-8',
			'loops/post-loop-9',

			// Page title patterns.
			'page_titles/page-title-1',
			'page_titles/page-title-2',
			'page_titles/page-title-3',
			'page_titles/page-title-4',
			'page_titles/page-title-5',
		);

		$this->categories = apply_filters( 'neve_fse_block_patterns_categories', $categories );
		$this->patterns   = apply_filters( 'neve_fse_block_patterns', $patterns );
	}

	/**
	 * Register block patterns categories.
	 *
	 * @return void
	 */
	private function register_categories() {
		foreach ( $this->categories as $slug => $args ) {
			if ( WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $slug ) ) {
				continue;
			}

			register_block_pattern_category( $slug, $args );
		}
	}

	/**
	 * Register Patterns.
	 *
	 * @return void
	 */
	private function register_patterns() {
		foreach ( $this->patterns as $pattern ) {
			$file = NEVE_FSE_DIR . 'inc/patterns/' . $pattern . '.php';

			if ( ! is_file( $file ) ) {
				continue;
			}

			register_block_pattern( 'neve-fse/' . $pattern, require $file );
		}
	}
}
