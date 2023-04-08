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
	 * The Pattern Parts array.
	 *
	 * These use the file names without termination inside the `inc/patterns/parts` directory.
	 *
	 * @var array
	 */
	private $pattern_parts = array();

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
		$this->register_pattern_parts();
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
			'boxed-pricing-plans',
			'call-to-action-inverted',
			'columns-with-icons',
			'columns-with-icons-and-buttons',
			'content-boxes-with-buttons',
			'gallery-with-title',
			'hero-cover-with-title-and-button',
			'hero-with-feature-boxes',
			'posts-section',
			'service-cards-with-buttons',
			'testimonials',
			'front-page-hero',
			'content-with-image-and-button',
		);

		$pattern_parts = array(
			'cover-title' => array( false, true ),
		);

		$this->categories    = apply_filters( 'neve_fse_block_patterns_categories', $categories );
		$this->patterns      = apply_filters( 'neve_fse_block_patterns', $patterns );
		$this->pattern_parts = apply_filters( 'neve_fse_block_pattern_parts', $pattern_parts );
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

	/**
	 * Register Pattern Parts.
	 *
	 * @return void
	 */
	private function register_pattern_parts() {
		foreach ( $this->pattern_parts as $pattern_part => $args ) {
			$file = NEVE_FSE_DIR . 'inc/patterns/parts/' . $pattern_part . '.php';

			if ( ! is_file( $file ) ) {
				continue;
			}

			require $file;
			// convert string file name of format `cover-title` to class name of format `Cover_Title`.
			$pattern_part_class_name = 'NeveFSE\\Patterns\\Parts\\' . implode( '_', array_map( 'ucfirst', explode( '-', $pattern_part ) ) );
			foreach ( $args as $key => $value ) {
				$pattern_part_instance = new $pattern_part_class_name( $value );
				register_block_pattern( 'neve-fse/parts/' . $pattern_part_instance->get_slug(), $pattern_part_instance->get_pattern() );
			}
		}
	}
}
