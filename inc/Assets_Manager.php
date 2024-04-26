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
		'frontend-css'       => 'neve-fse-style',
		'editor-css'         => 'neve-fse-editor',
		'welcome-notice'     => 'neve-fse-welcome-notice',
		'general-notice'     => 'neve-fse-general-notice',
		'design-pack-notice' => 'neve-fse-design-pack-notice',
	);

	const AVAILABLE_THEME_FONTS = array(
		'Inter',
		'Albert Sans',
		'Fraunces',
		'Hanken Grotesk',
		'Outfit',
		'Spline Sans',
		'Playfair Display',
		'Source Sans Pro',
		'Montserrat',
		'Open Sans',
		'Figtree',
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

		$color_vars  = self::get_css_color_vars();
		$font_vars   = self::get_css_font_vars();
		$button_vars = self::get_css_button_vars();
		$css_vars    = $color_vars . $font_vars . $button_vars;
		if ( ! empty( $css_vars ) ) {
			$css .= ':root{' . $css_vars . '}';
		}

		return $css;
	}

	/**
	 * Get the CSS variables for the button from Neve.
	 *
	 * @return string
	 */
	private static function get_css_button_vars() {
		$neve_mods        = Neve_Mods::get_instance();
		$button_apperance = $neve_mods->get_neve_button_appearance();
		$css              = '';
		if ( empty( $button_apperance ) ) {
			return $css;
		}
		if ( isset( $button_apperance['borderRadius'] ) ) {
			$css .= '--neve-button-border-radius:' . $button_apperance['borderRadius'];
		}

		return $css;
	}

	/**
	 * Get the CSS variables for the colors from Neve.
	 *
	 * @return string
	 */
	private static function get_css_color_vars() {
		$neve_mods = Neve_Mods::get_instance();
		$palette   = $neve_mods->get_neve_global_colors();
		$css       = '';
		if ( empty( $palette ) ) {
			return $css;
		}
		foreach ( $palette as $slug => $color ) {
			$css .= '--' . $slug . ':' . $color . ';';
		}

		return $css;
	}

	/**
	 * Get the CSS variables for the fonts from Neve.
	 *
	 * @return string
	 */
	private static function get_css_font_vars() {
		$neve_mods          = Neve_Mods::get_instance();
		$neve_body_font     = $neve_mods->get_neve_body_font_family();
		$neve_headings_font = $neve_mods->get_neve_headings_font_family();
		$css                = '';

		if ( 'default' !== $neve_body_font && in_array( $neve_body_font, self::AVAILABLE_THEME_FONTS, true ) ) {
			$css               .= '--neve-font-family-body:' . $neve_body_font . ';';
			$neve_headings_font = $neve_body_font; // If the body font is set, the headings font should be the same until we check if the headings font is set.
		}

		if ( 'default' !== $neve_headings_font && in_array( $neve_headings_font, self::AVAILABLE_THEME_FONTS, true ) ) {
			$css .= '--neve-font-family-heading:' . $neve_headings_font . ';';
		}

		$typeface_sections   = Neve_Mods::AVAILABLE_TYPEFACE_CONTROLS;
		$default_font_size   = '16px'; // default font size on most browsers.
		$default_line_height = '1.5'; // default line height on most browsers.
		foreach ( $typeface_sections as $typeface_section ) {
			$type_setting_name = empty( $typeface_section ) ? '' : $typeface_section . '_';
			$typeface          = $neve_mods->get_neve_typeface_general( $type_setting_name );
			$css_typeface_name = empty( $typeface_section ) ? 'body' : $typeface_section;
			if ( ! empty( $typeface ) && isset( $typeface['fontWeight'] ) ) {
				// we default the global heading weight to the h1 weight.
				if ( 'h1' === $typeface_section ) {
					$css .= '--neve-font-weight-heading:' . $typeface['fontWeight'] . ';';
				}
				$css .= '--neve-font-weight-' . $css_typeface_name . ':' . $typeface['fontWeight'] . ';';
			}

			if ( ! empty( $typeface ) && isset( $typeface['fontSize'] ) ) {
				$font_size = $default_font_size;
				if ( isset( $typeface['fontSize']['desktop'] ) && isset( $typeface['fontSize']['suffix']['desktop'] ) ) {
					$font_size = $typeface['fontSize']['desktop'] . 'px';
					if ( 'px' !== $typeface['fontSize']['suffix']['desktop'] ) {
						$font_size = self::convert_em_to_px( $typeface['fontSize']['desktop'] ) . 'px';
					}
				}

				if ( '' === $typeface_section ) {
					$default_font_size = $font_size; // set the inherited size as a default font size for further calculations.
				}

				// we default the global heading weight to the h1 weight.
				if ( 'h1' === $typeface_section ) {
					$css .= '--neve-font-size-heading:' . $font_size . ';';
				}
				$css .= '--neve-font-size-' . $css_typeface_name . ':' . $font_size . ';';
			}

			if ( ! empty( $typeface ) && isset( $typeface['lineHeight'] ) ) {
				$line_height = $default_line_height;
				if ( isset( $typeface['lineHeight']['desktop'] ) && isset( $typeface['lineHeight']['suffix']['desktop'] ) ) {
					$line_height = $typeface['lineHeight']['desktop'];
					if ( 'em' !== $typeface['lineHeight']['suffix']['desktop'] ) {
						$line_height = self::convert_px_to_em( $typeface['fontSize']['desktop'], $default_font_size );
					}
				}

				if ( '' === $typeface_section ) {
					$default_line_height = $line_height; // set the inherited size as a default font size for further calculations.
				}

				// we default the global heading weight to the h1 weight.
				if ( 'h1' === $typeface_section ) {
					$css .= '--neve-font-line-height-heading:' . $font_size . ';';
				}
				$css .= '--neve-font-line-height-' . $css_typeface_name . ':' . $line_height . ';';
			}
		}

		return $css;
	}

	/**
	 * Convert px to em.
	 *
	 * @param int $px         The px value.
	 * @param int $default_px The default px value.
	 *
	 * @return float
	 */
	private static function convert_px_to_em( $px, $default_px = 16 ) {
		$em = $px / $default_px;
		return $em;
	}

	/**
	 * Convert em to px.
	 *
	 * @param int $em         The em value.
	 * @param int $default_px The default px value.
	 *
	 * @return float
	 */
	private static function convert_em_to_px( $em, $default_px = 16 ) {
		$px = $em * $default_px;
		return $px;
	}

}
