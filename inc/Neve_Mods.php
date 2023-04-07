<?php
/**
 * Neve Mods theme class.
 * This is used to inherit the mods from Neve.
 *
 * @author Themeisle
 * @package neve-fse
 * @since 1.0.0
 */

namespace NeveFSE;

/**
 * Class Neve_Mods
 *
 * @package neve-fse
 */
class Neve_Mods {

	/**
	 * Neve_Mods instance.
	 *
	 * @var Neve_Mods
	 */
	public static $instance = null;

	/**
	 * The mods from Neve.
	 *
	 * @var array|false
	 */
	private $neve_mods = false;

	const AVAILABLE_TYPEFACE_CONTROLS = array(
		'',   // body does not have a name.
		'h1', // h1.
		'h2', // h2.
		'h3', // h3.
		'h4', // h4.
		'h5', // h5.
		'h6', // h6.
	);

	/**
	 * Get the static instance of the class.
	 *
	 * @return Neve_Mods
	 */
	public static function get_instance() {
		if ( null === self::$instance ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	/**
	 * Neve_Mods constructor.
	 */
	public function __construct() {
		$this->neve_mods = get_option( 'theme_mods_neve' );
	}

	/**
	 * Get a mod from Neve.
	 *
	 * @param string $name    The mod name.
	 * @param mixed  $default The default value.
	 *
	 * @return mixed
	 */
	private function get_mod_from_neve( $name, $default = false ) {
		$value = $default;

		if ( false === $this->neve_mods ) {
			return $value;
		}

		if ( ! isset( $this->neve_mods[ $name ] ) ) {
			return $value;
		}

		$value = apply_filters( "theme_mod_{$name}", $this->neve_mods[ $name ] );

		return $value;
	}

	/**
	 * Get the button appearance from Neve.
	 *
	 * @return array
	 */
	public function get_neve_button_appearance() {
		$button_appearance = $this->get_mod_from_neve( 'neve_button_appearance', array() );
		if ( empty( $button_appearance ) ) {
			return array();
		}

		$appearance = array(
			'borderRadius' => '9999px',
		);

		if ( isset( $button_appearance['borderRadius'] ) && ! empty( $button_appearance['borderRadius'] ) ) {
			$border_radius_array = $button_appearance['borderRadius'];

			if ( ! isset( $border_radius_array['top'] ) || ! isset( $border_radius_array['right'] ) || ! isset( $border_radius_array['bottom'] ) || ! isset( $border_radius_array['left'] ) ) {
				return $appearance;
			}

			if ( $border_radius_array['top'] === $border_radius_array['right'] && $border_radius_array['top'] === $border_radius_array['bottom'] && $border_radius_array['top'] === $border_radius_array['left'] ) {
				$appearance['borderRadius'] = $border_radius_array['top'] . 'px';
				return $appearance;
			}
			$appearance['borderRadius'] = $border_radius_array['top'] . 'px ' . $border_radius_array['right'] . 'px ' . $border_radius_array['bottom'] . 'px ' . $border_radius_array['left'] . 'px';
		}
		return $appearance;
	}

	/**
	 * Get the colors from Neve.
	 *
	 * @return string
	 */
	public function get_neve_global_colors() {
		$default       = array();
		$global_colors = $this->get_mod_from_neve( 'neve_global_colors', array() );

		if ( empty( $global_colors ) ) {
			return $default;
		}

		if ( ! isset( $global_colors['activePalette'] ) ) {
			return $default;
		}

		$active = $global_colors['activePalette'];

		if ( ! isset( $global_colors['palettes'][ $active ] ) ) {
			return $default;
		}

		$palette = $global_colors['palettes'][ $active ];

		if ( ! isset( $palette['colors'] ) ) {
			return $default;
		}

		return $palette['colors'];
	}

	/**
	 * Get the body font family from Neve.
	 *
	 * @return mixed
	 */
	public function get_neve_body_font_family() {
		return $this->get_mod_from_neve( 'neve_body_font_family', 'default' );
	}

	/**
	 * Get the headings font family from Neve.
	 *
	 * @return mixed
	 */
	public function get_neve_headings_font_family() {
		return $this->get_mod_from_neve( 'neve_headings_font_family', 'default' );
	}

	/**
	 * Get the typeface settings for a specific control.
	 *
	 * @param string $type_setting_name The type setting name.
	 *
	 * @return array
	 */
	public function get_neve_typeface_general( $type_setting_name = '' ) {
		$default = array();
		if ( ! in_array( $type_setting_name, self::AVAILABLE_TYPEFACE_CONTROLS, true ) ) {
			return $default;
		}
		return $this->get_mod_from_neve( 'neve_' . $type_setting_name . 'typeface_general', $default );
	}

	/**
	 * Cloning is forbidden.
	 *
	 * @access public
	 * @since  1.0.0
	 */
	public function __clone() {
		_doing_it_wrong( __FUNCTION__, '', '1.0.0' );
	}

	/**
	 * Un-serializing instances of this class is forbidden.
	 *
	 * @access public
	 * @since  1.0.0
	 */
	public function __wakeup() {
		_doing_it_wrong( __FUNCTION__, '', '1.0.0' );
	}
}
