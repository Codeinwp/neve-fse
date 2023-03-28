<?php
/**
 * Assets manager class.
 *
 * @author Themeisle
 * @package neve-fse
 * @since 1.0.0
 */

namespace NeveFSE;

/**
 * Class Assets_Manager
 *
 * @package neve-fse
 */
class Assets_Manager {
	const ASSETS_SLUGS = array(
		'frontend-css'   => 'neve-fse-style',
		'editor-css'     => 'neve-fse-editor',
		'welcome-notice' => 'neve-fse-welcome-notice',
	);

	/**
	 * Enqueue style.
	 *
	 * @param string   $handle Name of the style.
	 * @param string   $file Path to the style file.
	 * @param string[] $dependencies Array of style handles this style depends on.
	 *
	 * @return void
	 */
	public static function enqueue_style( string $handle, string $file, array $dependencies = array() ) {
		$uri = NEVE_FSE_URL . 'assets/css/build/' . $file . '.css';

		wp_register_style( $handle, esc_url( $uri ), $dependencies, NEVE_FSE_VERSION );
		wp_style_add_data( $handle, 'rtl', 'replace' );
		wp_enqueue_style( $handle );

		// Add the inherited values from Neve.
		$inherited_style_values = self::get_inherited_style_values();
		if ( ! empty( $inherited_style_values ) ) {
			wp_add_inline_style( $handle, $inherited_style_values );
		}
	}

	/**
	 * Enqueue script.
	 *
	 * @param string   $handle Name of the style.
	 * @param string   $file Path to the style file.
	 * @param bool     $in_footer Whether to enqueue the script in the footer.
	 * @param string[] $dependencies Array of other script handles this script depends on.
	 * @param array    $localization Array of data to pass to the script.
	 * @param string   $localization_object_name Name of the object to create in the global scope.
	 *
	 * @return void
	 */
	public static function enqueue_script( string $handle, string $file, bool $in_footer = true, array $dependencies = array(), array $localization = array(), $localization_object_name = 'neveFSEData' ) {
		$uri = NEVE_FSE_URL . 'assets/js/build/' . $file . '.js';
		$php = NEVE_FSE_DIR . 'assets/js/build/' . $file . '.asset.php';

		$deps = is_file( $php ) ? include $php : array(
			'dependencies' => array(),
			'version'      => NEVE_FSE_VERSION,
		);


		if ( ! empty( $dependencies ) ) {
			$deps['dependencies'] = array_merge( $deps['dependencies'], $dependencies );
		}

		wp_register_script( $handle, esc_url( $uri ), $deps['dependencies'], $deps['version'], $in_footer );

		if ( ! empty( $localization ) ) {
			wp_localize_script( $handle, $localization_object_name, $localization );
		}

		wp_enqueue_script( $handle );
		wp_set_script_translations( $handle, 'neve-fse' );
	}

	/**
	 * Get image URL from assets folder.
	 *
	 * @param string $file Filename with extension.
	 *
	 * @return string
	 */
	public static function get_image_url( string $file ): string {
		return NEVE_FSE_URL . 'assets/img/' . $file;
	}


	/**
	 * Get the CSS variables from Neve and add them to the style.
	 *
	 * @return string
	 */
	public static function get_inherited_style_values() {
		$css = '';

		$color_vars = self::get_css_color_vars();
		if ( ! empty( $color_vars ) ) {
			$css .= ':root{' . $color_vars . '}';
		}
		return $css;
	}

	/**
	 * Get the value of a mod from Neve.
	 *
	 * @param string $name Mod name.
	 * @param mixed  $default Default value.
	 *
	 * @return mixed
	 */
	private static function get_mod_from_neve( $name, $default = false ) {
		$value     = $default;
		$neve_mods = get_option( 'theme_mods_neve' );

		if ( false === $neve_mods ) {
			return $value;
		}

		if ( ! isset( $neve_mods[ $name ] ) ) {
			return $value;
		}

		$value = apply_filters( "theme_mod_{$name}", $neve_mods[ $name ] );

		return $value;
	}

	/**
	 * Get the CSS variables for the colors from Neve.
	 *
	 * @return string
	 */
	private static function get_css_color_vars() {
		$global_colors = self::get_mod_from_neve( 'neve_global_colors', array() );

		if ( empty( $global_colors ) ) {
			return '';
		}

		if ( ! isset( $global_colors['activePalette'] ) ) {
			return '';
		}

		$active = $global_colors['activePalette'];

		if ( ! isset( $global_colors['palettes'][ $active ] ) ) {
			return '';
		}

		$palette = $global_colors['palettes'][ $active ];

		if ( ! isset( $palette['colors'] ) ) {
			return '';
		}

		$css = '';

		foreach ( $palette['colors'] as $slug => $color ) {
			$css .= '--' . $slug . ':' . $color . ';';
		}


		return $css;
	}

	/**
	 * Get the font family from the font object.
	 *
	 * @param array $font Font object.
	 *
	 * @return string
	 */
	private static function get_font_family( $font ) {
		$font_family = $font['fontFamily'];
		if ( 'System Stack' === $font_family ) {
			$font_family = $font['systemStack'];
		}
		return $font_family;
	}
}
