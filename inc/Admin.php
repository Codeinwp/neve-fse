<?php
/**
 * Admin class.
 *
 * @author Themeisle
 * @package neve-fse
 * @since 1.0.0
 */

namespace NeveFSE;

/**
 * Admin class.
 */
class Admin {

	/**
	 * Property to suspend the survey.
	 * Change it to true to enable it.
	 *
	 * @var bool
	 */
	private $suspend_survey = true;

	/**
	 * Admin constructor.
	 */
	public function __construct() {
		$this->setup_admin_hooks();
		$this->add_install_time();
	}

	/**
	 * Add the installation time.
	 * This is needed here while the SDK is not available.
	 * Once the SDK is available, this can safely be removed.
	 *
	 * @return void
	 */
	private function add_install_time() {
		$install = get_option( Constants::PRODUCT_KEY . '_install', 0 );
		if ( 0 === $install ) {
			update_option( Constants::PRODUCT_KEY . '_install', time() );
		}
	}


	/**
	 * Setup admin hooks.
	 *
	 * @return void
	 */
	public function setup_admin_hooks() {
		add_action( 'admin_notices', array( $this, 'render_welcome_notice' ), 0 );
		add_action( 'admin_notices', array( $this, 'render_survey_notice' ) );
		add_action( 'wp_ajax_neve_fse_dismiss_welcome_notice', array( $this, 'remove_welcome_notice' ) );
		add_action( 'wp_ajax_neve_fse_dismiss_survey_notice', array( $this, 'remove_survey_notice' ) );
		add_action( 'admin_print_scripts', array( $this, 'add_nps_form' ) );

		add_action( 'enqueue_block_editor_assets', array( $this, 'add_fse_design_pack_notice' ) );
		add_action( 'wp_ajax_neve_fse_dismiss_design_pack_notice', array( $this, 'remove_design_pack_notice' ) );
	}

	/**
	 * Render design pack notice.
	 *
	 * @return void
	 */
	public function add_fse_design_pack_notice() {
		if ( ! $this->should_render_design_pack_notice() ) {
			return;
		}

		Assets_Manager::enqueue_style( Assets_Manager::ASSETS_SLUGS['design-pack-notice'], 'design-pack-notice' );
		Assets_Manager::enqueue_script(
			Assets_Manager::ASSETS_SLUGS['design-pack-notice'],
			'design-pack-notice',
			true,
			array(),
			array(
				'nonce'      => wp_create_nonce( 'neve-fse-dismiss-design-pack-notice' ),
				'ajaxUrl'    => esc_url( admin_url( 'admin-ajax.php' ) ),
				'ajaxAction' => 'neve_fse_dismiss_design_pack_notice',
				'buttonLink' => tsdk_utmify( 'https://themeisle.com/plugins/fse-design-pack', 'editor', 'neve-fse' ),
				'strings'    => array(
					'dismiss'    => __( 'Dismiss', 'neve-fse' ),
					'recommends' => __( 'Neve FSE recommends', 'neve-fse' ),
					'learnMore'  => __( 'Learn More', 'neve-fse' ),
					'noticeHtml' => sprintf(
					/* translators: %s: FSE Design Pack: */
						__( '%s Access a collection of 40+ layout patterns ready to import to your website', 'neve-fse' ),
						'<strong>FSE Design Pack:</strong>'
					),
				),
			),
			'designPackNoticeData'
		);

		echo '<div id="neve-fse-design-pack-notice"></div>';
	}

	/**
	 * Should we show the design pack notice?
	 *
	 * @return bool
	 */
	private function should_render_design_pack_notice() {
		// Already using.
		if ( is_plugin_active( 'fse-design-pack/fse-design-pack.php' ) ) {
			return false;
		}

		// Notice was dismissed.
		if ( get_option( Constants::CACHE_KEYS['dismissed-fse-design-pack-notice'], 'no' ) === 'yes' ) {
			return false;
		}

		return true;
	}

	/**
	 * Dismiss the design pack notice.
	 *
	 * @return void
	 */
	public function remove_design_pack_notice() {
		if ( ! isset( $_POST['nonce'] ) ) {
			return;
		}
		if ( ! wp_verify_nonce( sanitize_text_field( $_POST['nonce'] ), 'neve-fse-dismiss-design-pack-notice' ) ) {
			return;
		}
		update_option( Constants::CACHE_KEYS['dismissed-fse-design-pack-notice'], 'yes' );
		wp_die();
	}

	/**
	 * Determine if the survey notice should be shown.
	 *
	 * @return bool
	 */
	public function should_show_survey_notice() {

		if ( $this->suspend_survey ) {
			return false;
		}

		// Notice was dismissed.
		if ( get_option( Constants::CACHE_KEYS['dismissed-survey-notice'], 'no' ) === 'yes' ) {
			return false;
		}

		$screen = get_current_screen();

		// Only show in dashboard/themes.
		if ( ! in_array( $screen->id, array( 'dashboard', 'themes' ) ) ) {
			return false;
		}

		// AJAX actions.
		if ( defined( 'DOING_AJAX' ) && DOING_AJAX ) {
			return false;
		}

		// Don't show in network admin.
		if ( is_network_admin() ) {
			return false;
		}

		// User can't dismiss. We don't show it.
		if ( ! current_user_can( 'manage_options' ) ) {
			return false;
		}

		// Block editor context.
		if ( $screen->is_block_editor() ) {
			return false;
		}

		// If has been activated for less than 3 days, don't show it.
		$activated_time = get_option( 'neve_fse_install' );
		if ( ! empty( $activated_time ) && time() - intval( $activated_time ) < 3 * DAY_IN_SECONDS ) {
			return false;
		}

		return true;
	}

	/**
	 * Display the survey notice.
	 *
	 * @return void
	 */
	public function render_survey_notice() {
		if ( ! $this->should_show_survey_notice() ) {
			return;
		}

		Assets_Manager::enqueue_style( Assets_Manager::ASSETS_SLUGS['welcome-notice'], 'welcome-notice' );
		Assets_Manager::enqueue_script(
			Assets_Manager::ASSETS_SLUGS['general-notice'],
			'general-notice',
			true,
			array(),
			array(
				'nonce'        => wp_create_nonce( 'neve-fse-dismiss-survey-notice' ),
				'ajaxUrl'      => esc_url( admin_url( 'admin-ajax.php' ) ),
				'surveyClass'  => 'neve-fse-survey-notice',
				'surveyAction' => 'neve_fse_dismiss_survey_notice',
			),
			'surveyFSENoticeData'
		);

		$survey_notice  = '<div class="notice notice-info is-dismissible neve-fse-survey-notice">';
		$survey_notice .= '<div class="notice-content">';
		$survey_notice .= '<img class="neve-fse-logo" src="' . esc_url( Assets_Manager::get_image_url( 'neve-fse-logo.svg' ) ) . '" alt="' . esc_attr__( 'Neve FSE Logo', 'neve-fse' ) . '"/>';
		$survey_notice .= '<div class="notice-copy">';
		$survey_notice .= '<h1 class="notice-title">' . __( 'We value your feedback', 'neve-fse' ) . '</h1>';
		$survey_notice .= '<p class="description">';
		$survey_notice .= __( 'Thank you for trying Neve FSE. We would love to hear your thoughts on how we can enhance and improve the theme even further. Would you mind taking a moment to share your insights through a quick survey?', 'neve-fse' );
		$survey_notice .= '</p>';
		$survey_notice .= '<div class="actions">';
		/* translators: %s: Otter Blocks */
		$survey_notice .= '<a id="neve-fse-take-survey" target="_blank" rel="noopener noreferrer" href="' . esc_url( 'https://hi507076.typeform.com/neve-fse' ) . '" class="button button-primary button-hero">';
		$survey_notice .= '<span class="text">' . __( 'Take the survey', 'neve-fse' ) . '</span>';
		$survey_notice .= '<span class="dashicons dashicons-external"></span>';
		$survey_notice .= '</a>';
		$survey_notice .= '<button class="button button-secondary button-hero later-dismiss">';
		$survey_notice .= '<span>' . __( 'Maybe later', 'neve-fse' ) . '</span>';
		$survey_notice .= '</button>';
		$survey_notice .= '</div>'; // actions.
		$survey_notice .= '</div>'; // notice-copy.
		$survey_notice .= '</div>'; // notice-content.
		$survey_notice .= '</div>'; // notice.

		echo wp_kses_post( $survey_notice );
	}

	/**
	 * Render the welcome notice.
	 *
	 * @return void
	 */
	public function render_welcome_notice() {
		if ( ! $this->should_show_welcome_notice() ) {
			return;
		}

		$otter_status = $this->get_otter_status();

		Assets_Manager::enqueue_style( Assets_Manager::ASSETS_SLUGS['welcome-notice'], 'welcome-notice' );
		Assets_Manager::enqueue_script(
			Assets_Manager::ASSETS_SLUGS['welcome-notice'],
			'welcome-notice',
			true,
			array(),
			array(
				'nonce'         => wp_create_nonce( 'neve-fse-dismiss-welcome-notice' ),
				'ajaxUrl'       => esc_url( admin_url( 'admin-ajax.php' ) ),
				'otterStatus'   => $otter_status,
				'activationUrl' => esc_url(
					add_query_arg(
						array(
							'plugin_status' => 'all',
							'paged'         => '1',
							'action'        => 'activate',
							'plugin'        => rawurlencode( 'otter-blocks/otter-blocks.php' ),
							'_wpnonce'      => wp_create_nonce( 'activate-plugin_otter-blocks/otter-blocks.php' ),
						),
						admin_url( 'plugins.php' )
					)
				),
				'activating'    => __( 'Activating', 'neve-fse' ) . '&hellip;',
				'installing'    => __( 'Installing', 'neve-fse' ) . '&hellip;',
				'done'          => __( 'Done', 'neve-fse' ),
			)
		);

		$notice_html  = '<div class="notice notice-info neve-fse-welcome-notice">';
		$notice_html .= '<button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button>';
		$notice_html .= '<div class="notice-content">';

		$notice_html .= '<img class="otter-preview" src="' . esc_url( Assets_Manager::get_image_url( 'welcome-notice.png' ) ) . '" alt="' . esc_attr__( 'Otter Blocks preview', 'neve-fse' ) . '"/>';

		$notice_html .= '<div class="notice-copy">';

		$notice_html .= '<h1 class="notice-title">';
		/* translators: %s: Otter Blocks */
		$notice_html .= sprintf( __( 'Power up your website building experience with %s!', 'neve-fse' ), '<span>Otter Blocks</span>' );

		$notice_html .= '</h1>';

		$notice_html .= '<p class="description">' . __( 'Otter is a Gutenberg Blocks page builder plugin that adds extra functionality to the WordPress Block Editor (also known as Gutenberg) for a better page building experience without the need for traditional page builders.', 'neve-fse' ) . '</p>';

		$notice_html .= '<div class="actions">';

		/* translators: %s: Otter Blocks */
		$notice_html .= '<button id="neve-fse-install-otter" class="button button-primary button-hero">';
		$notice_html .= '<span class="dashicons dashicons-update hidden"></span>';
		$notice_html .= '<span class="text">';
		$notice_html .= 'installed' === $otter_status ?
			/* translators: %s: Otter Blocks */
			sprintf( __( 'Activate %s', 'neve-fse' ), 'Otter Blocks' ) :
			/* translators: %s: Otter Blocks */
			sprintf( __( 'Install & Activate %s', 'neve-fse' ), 'Otter Blocks' );
		$notice_html .= '</span>';
		$notice_html .= '</button>';

		$notice_html .= '<a href="https://wordpress.org/plugins/otter-blocks/" target="_blank" class="button button-secondary button-hero">';
		$notice_html .= '<span>' . __( 'Learn More', 'neve-fse' ) . '</span>';
		$notice_html .= '<span class="dashicons dashicons-external"></span>';
		$notice_html .= '</a>';

		$notice_html .= '</div>';

		$notice_html .= '</div>';
		$notice_html .= '</div>';
		$notice_html .= '</div>';

		echo wp_kses_post( $notice_html );

	}

	/**
	 * Dismiss the welcome notice.
	 *
	 * @return void
	 */
	public function remove_welcome_notice() {
		if ( ! isset( $_POST['nonce'] ) ) {
			return;
		}
		if ( ! wp_verify_nonce( sanitize_text_field( $_POST['nonce'] ), 'neve-fse-dismiss-welcome-notice' ) ) {
			return;
		}
		update_option( Constants::CACHE_KEYS['dismissed-welcome-notice'], 'yes' );
		wp_die();
	}

	/**
	 * Dismiss the survey notice.
	 *
	 * @return void
	 */
	public function remove_survey_notice() {
		if ( ! isset( $_POST['nonce'] ) ) {
			return;
		}
		if ( ! wp_verify_nonce( sanitize_text_field( $_POST['nonce'] ), 'neve-fse-dismiss-survey-notice' ) ) {
			return;
		}
		update_option( Constants::CACHE_KEYS['dismissed-survey-notice'], 'yes' );
		wp_die();
	}

	/**
	 * Should we show the welcome notice?
	 *
	 * @return bool
	 */
	private function should_show_welcome_notice(): bool {
		// Already using Otter.
		if ( is_plugin_active( 'otter-blocks/otter-blocks.php' ) ) {
			return false;
		}

		// Notice was dismissed.
		if ( get_option( Constants::CACHE_KEYS['dismissed-welcome-notice'], 'no' ) === 'yes' ) {
			return false;
		}

		$screen = get_current_screen();

		// Only show in dashboard/themes.
		if ( ! in_array( $screen->id, array( 'dashboard', 'themes' ) ) ) {
			return false;
		}

		// AJAX actions.
		if ( defined( 'DOING_AJAX' ) && DOING_AJAX ) {
			return false;
		}

		// Don't show in network admin.
		if ( is_network_admin() ) {
			return false;
		}

		// User can't dismiss. We don't show it.
		if ( ! current_user_can( 'manage_options' ) ) {
			return false;
		}

		// User can't install plugins. We don't show it.
		if ( ! current_user_can( 'install_plugins' ) ) {
			return false;
		}

		// Block editor context.
		if ( $screen->is_block_editor() ) {
			return false;
		}

		// Dismiss after one week from activation.
		$activated_time = get_option( 'neve_fse_install' );

		if ( ! empty( $activated_time ) && time() - intval( $activated_time ) > WEEK_IN_SECONDS ) {
			update_option( Constants::CACHE_KEYS['dismissed-welcome-notice'], 'yes' );

			return false;
		}

		return true;
	}

	/**
	 * Get the Otter Blocks plugin status.
	 *
	 * @return string
	 */
	private function get_otter_status(): string {
		$status = 'not-installed';

		if ( file_exists( ABSPATH . 'wp-content/plugins/otter-blocks/otter-blocks.php' ) ) {
			return 'installed';
		}

		return $status;
	}

	/**
	 * Add NPS form.
	 *
	 * @return void
	 */
	public function add_nps_form() {
		$screen = get_current_screen();

		if ( current_user_can( 'manage_options' ) && ( 'dashboard' === $screen->id || 'themes' === $screen->id ) ) {
			$website_url = preg_replace( '/[^a-zA-Z0-9]+/', '', get_site_url() );

			$config = array(
				'environmentId' => 'clr7hcws7et2g8up0tpz8u8es',
				'apiHost'       => 'https://app.formbricks.com',
				'userId'        => 'neve_fse_' . $website_url,
				'attributes'    => array(
					'days_since_install' => self::convert_to_category( round( ( time() - get_option( 'neve_fse_install', time() ) ) / DAY_IN_SECONDS ) ),
				),
			);

			echo '<script type="text/javascript">!function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src="https://unpkg.com/@formbricks/js@^1.6.5/dist/index.umd.js";var e=document.getElementsByTagName("script")[0];e.parentNode.insertBefore(t,e),setTimeout(function(){window.formbricks.init(' . wp_json_encode( $config ) . ')},500)}();</script>';
		}
	}

	/**
	 * Convert a number to a category.
	 *
	 * @param int $number Number to convert.
	 * @param int $scale  Scale.
	 *
	 * @return int
	 */
	public static function convert_to_category( $number, $scale = 1 ) {
		$normalized_number = intval( round( $number / $scale ) );

		if ( 0 === $normalized_number || 1 === $normalized_number ) {
			return 0;
		} elseif ( $normalized_number > 1 && $normalized_number < 8 ) {
			return 7;
		} elseif ( $normalized_number >= 8 && $normalized_number < 31 ) {
			return 30;
		} elseif ( $normalized_number > 30 && $normalized_number < 90 ) {
			return 90;
		} elseif ( $normalized_number > 90 ) {
			return 91;
		}
	}
}
