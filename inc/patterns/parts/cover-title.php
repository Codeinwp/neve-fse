<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package neve-fse
 * @since 1.0.0
 *
 * slug: cover-title{-boxed}
 * title: Cover title (Boxed)
 * categories: NeveFSE
 * keywords: title, cover
 */

namespace NeveFSE\Patterns\Parts;

use NeveFSE\Assets_Manager;

/**
 * Class Cover_Title_Pattern_Part
 */
class Cover_Title {

	/**
	 * Is boxed.
	 *
	 * @var bool
	 */
	private $is_boxed = false;

	/**
	 * Cover_Title_Pattern_Part constructor.
	 *
	 * @param bool $is_boxed Is boxed.
	 */
	public function __construct( $is_boxed = false ) {
		$this->is_boxed = $is_boxed;
	}

	/**
	 * Get title.
	 *
	 * @return string
	 */
	private function get_title() {
		return '
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"32px","right":"32px","bottom":"32px","left":"32px"},"blockGap":"8px"}},' . ( $this->is_boxed ? '"backgroundColor":"ti-bg-inv","textColor":"ti-bg-alt",' : '' ) . '"layout":{"type":"constrained"}} -->
        <div class="wp-block-group ' . ( $this->is_boxed ? 'has-ti-bg-alt-color has-ti-bg-inv-background-color has-text-color has-background' : '' ) . '" ' . ( $this->is_boxed ? 'style="padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"' : '' ) . '>
        	<!-- wp:post-title {"textAlign":"center","level":1} /-->
        </div>
        <!-- /wp:group -->
';
	}

	/**
	 * Get slug.
	 *
	 * @return string
	 */
	public function get_slug() {
		return $this->is_boxed ? 'cover-title-boxed' : 'cover-title';
	}

	/**
	 * Get pattern.
	 *
	 * @return array
	 */
	public function get_pattern() {
		$image = Assets_Manager::get_image_url( 'img-neve-fse-cover-01.jpg' );

		$title = $this->get_title();

		return array(
			'title'      => $this->is_boxed ? __( 'Title Cover Boxed', 'neve-fse' ) : __( 'Title Cover', 'neve-fse' ),
			'categories' => array( 'neve-fse' ),
			'content'    => '
<!-- wp:cover {"url":"' . esc_url( $image ) . '","dimRatio":70,"minHeight":200,"contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"top":"64px","right":"32px","bottom":"64px","left":"32px"},"margin":{"top":"0","bottom":"0"}}}} -->
    <div class="wp-block-cover alignfull" style="margin-top:0;margin-bottom:0;padding-top:64px;padding-right:32px;padding-bottom:64px;padding-left:32px;min-height:200px">
        <span aria-hidden="true" class="wp-block-cover__background has-background-dim-70 has-background-dim"></span>
        <img class="wp-block-cover__image-background" alt="" src="' . esc_url( $image ) . '" data-object-fit="cover"/>
        <div class="wp-block-cover__inner-container">
            <!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
            <div class="wp-block-group alignwide">
                ' . $title . '
            </div>
        <!-- /wp:group -->
        </div>
    </div>
    <!-- /wp:cover -->
',
		);
	}

}


