/* global surveyFSENoticeData, jQuery */

/**
 * Handle the general notice.
 *
 * @param {jQuery} $
 */
function handleGeneralNotice( $ ) {
	const { ajaxUrl, nonce, surveyClass, surveyAction } = surveyFSENoticeData;
	if ( ! $( `.${ surveyClass }` ).length ) {
		return;
	}
	const dismissSurveyBtn = $( `.${ surveyClass } .notice-dismiss` );

	if ( ! dismissSurveyBtn.length ) {
		return;
	}

	$( dismissSurveyBtn ).on( 'click', () => {
		$.post( ajaxUrl, {
			nonce,
			action: surveyAction,
			success: hideAndRemoveGeneralNotice( $( '.' + surveyClass ) ),
		} );
	} );

	const laterDismiss = $( `.${ surveyClass } .later-dismiss` );

	if ( ! laterDismiss.length ) {
		return;
	}

	$( laterDismiss ).on( 'click', () => {
		hideAndRemoveGeneralNotice( $( '.' + surveyClass ) );
	} );

	/**
	 * Hide and remove the notice.
	 *
	 * @param {Element} notice
	 */
	const hideAndRemoveGeneralNotice = ( notice ) => {
		if ( ! notice ) {
			return;
		}
		notice.fadeTo( 100, 0, () => {
			notice.slideUp( 100, () => {
				notice.remove();
			} );
		} );
	};
}

/**
 * Initiate the notice.
 */
document.addEventListener( 'DOMContentLoaded', () => {
	jQuery( document ).ready( function () {
		handleGeneralNotice( jQuery );
	} );
} );
