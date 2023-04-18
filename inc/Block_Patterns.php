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
			'neve-fse' => array( 'label' => __( 'Neve FSE Patterns', 'neve-fse' ) ),
		);

		$patterns = array(
//			'boxed-pricing-plans',
//			'call-to-action-inverted',
//			'columns-with-icons',
//			'columns-with-icons-and-buttons',
//			'content-boxes-with-buttons',
//			'gallery-with-title',
//			'hero-cover-with-title-and-button',
//			'hero-with-feature-boxes',
//			'posts-section',
//			'service-cards-with-buttons',
//			'testimonials',
//			'front-page-hero',
//			'content-with-image-and-button',

			'layout/cta-dark',
			'layout/full-width-columns-content-image',
			'layout/full-width-quote',
			'layout/page-cover-bg-image',
			'layout/page-cover-with-buttons',
			'layout/content-with-images',
			'layout/team-members-columns',
			'layout/columns-with-services',
			'layout/pricing-columns',
			'layout/content-columns-images',
			'layout/columns-with-icons',
			'layout/boxed-features-1',
			'layout/boxed-features-2',
			'layout/columns-with-cards',
			'layout/columns-content-images',

			'loops/post-loop-1',
			'loops/post-loop-2',
			'loops/post-loop-3',
			'loops/post-loop-4',
			'loops/post-loop-5',
			'loops/post-loop-6',
			'loops/post-loop-7',
			'loops/post-loop-8',
			'loops/post-loop-9',

			'core/page-cover-hero',
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
