<?php
/**
 * Main theme class.
 *
 * @author Themeisle
 * @package neve-fse
 * @since 1.0.0
 */

namespace NeveFSE;

/**
 * Class Core
 *
 * @package neve-fse
 */
class Core {
	/**
	 * Core instance.
	 *
	 * @var Core
	 */
	public static $instance = null;

	/**
	 * Get the static instance of the class.
	 *
	 * @return Core
	 */
	public static function get_instance() {
		if ( null === self::$instance ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	/**
	 * Core constructor.
	 */
	public function __construct() {
		$this->run_hooks();

		new Admin();
		new Block_Patterns();
		new Block_Styles();
	}

	/**
	 * Initialize hooks.
	 *
	 * @return void
	 */
	private function run_hooks() {
		add_action( 'after_setup_theme', array( $this, 'setup' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue' ) );
		add_action( 'enqueue_block_editor_assets', array( $this, 'add_editor_styles' ) );
	}

	/**
	 * Setup theme.
	 *
	 * @return void
	 */
	public function setup() {
		load_theme_textdomain( 'neve-fse', NEVE_FSE_DIR . '/languages' );

		$starter_content = new Starter_Content();

		add_theme_support( 'starter-content', $starter_content->get() );
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'editor-styles' );
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		add_theme_support(
			'otter-onboarding',
			array(
				'logo'           => NEVE_FSE_URL . 'assets/img/neve-fse-logo.svg',
				'templates'      => array(
					'archive'    => array(
						'archive-list'  => array(
							'file'  => NEVE_FSE_DIR . 'library/archive/archive-list.php',
							'title' => __( 'Archive List', 'neve-fse' ),
						),
						'archive-cover' => array(
							'file'  => NEVE_FSE_DIR . 'library/archive/archive-cover.php',
							'title' => __( 'Archive Cover', 'neve-fse' ),
						),
					),
					'single'     => array(
						'single-post-cover-boxed' => array(
							'file'  => NEVE_FSE_DIR . 'library/single/single-post-cover-boxed.php',
							'title' => __( 'Single Post Cover Boxed', 'neve-fse' ),
						),
						'single-post-cover'       => array(
							'file'  => NEVE_FSE_DIR . 'library/single/single-post-cover.php',
							'title' => __( 'Single Post Cover', 'neve-fse' ),
						),
					),
					'front-page' => array(
						'front-page-alt'   => array(
							'file'  => NEVE_FSE_DIR . 'library/front-page/front-page-2.php',
							'title' => __( 'Homepage 2', 'neve-fse' ),
						),
						'front-page-alt-2' => array(
							'file'  => NEVE_FSE_DIR . 'library/front-page/front-page-3.php',
							'title' => __( 'Homepage 4', 'neve-fse' ),
						),
					),
				),
				'page_templates' => array(
					'about-page'     => array(
						'file'     => NEVE_FSE_DIR . 'library/templates/about-page.php',
						'title'    => __( 'About Page', 'neve-fse' ),
						'template' => 'template-plain',
					),
					'contact-page'   => array(
						'file'     => NEVE_FSE_DIR . 'library/templates/contact-page.php',
						'title'    => __( 'Contact Page', 'neve-fse' ),
						'template' => 'template-plain',
					),
					'portfolio-page' => array(
						'file'     => NEVE_FSE_DIR . 'library/templates/portfolio-page.php',
						'title'    => __( 'Portfolio Page', 'neve-fse' ),
						'template' => 'template-plain',
					),
					'services-page'  => array(
						'file'     => NEVE_FSE_DIR . 'library/templates/services-page.php',
						'title'    => __( 'Services Page', 'neve-fse' ),
						'template' => 'template-plain',
					),
				),
			)
		);

		register_nav_menus( array( 'primary' => esc_html__( 'Primary Menu', 'neve-fse' ) ) );
	}

	/**
	 * Enqueue scripts and styles.
	 *
	 * @return void
	 */
	public function enqueue() {
		Assets_Manager::enqueue_style( Assets_Manager::ASSETS_SLUGS['frontend-css'], 'style' );
	}

	/**
	 * Add editor styles.
	 *
	 * @return void
	 */
	public function add_editor_styles() {
		Assets_Manager::enqueue_style( Assets_Manager::ASSETS_SLUGS['editor-css'], 'editor' );
	}
}
