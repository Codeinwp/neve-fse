/* global designPackNoticeData */
import { useSelect } from '@wordpress/data';
import { Icon, closeSmall } from '@wordpress/icons';
import { useEffect, useState } from '@wordpress/element';

const logo = (
	<svg
		width="45"
		height="45"
		viewBox="0 0 45 45"
		fill="none"
		xmlns="http://www.w3.org/2000/svg"
	>
		<path
			fillRule="evenodd"
			clipRule="evenodd"
			d="M14.2605 34.0991C16.1724 35.2426 18.397 35.8142 20.9347 35.8142C22.4643 35.8142 23.9067 35.5197 25.2623 34.9306C25.799 34.6974 26.3031 34.4343 26.7744 34.1413V35.2946H36.7336V5.07344C41.7793 9.19954 45 15.4737 45 22.5C45 34.9264 34.9264 45 22.5 45C10.0736 45 0 34.9264 0 22.5C0 10.0736 10.0736 0 22.5 0C23.8699 0 25.2113 0.122431 26.5137 0.356948V10.5154C26.1184 10.3146 25.7013 10.1357 25.2623 9.97864C23.9067 9.4588 22.4643 9.19889 20.9347 9.19889C18.397 9.19889 16.1724 9.77069 14.2605 10.9143C12.3834 12.0233 10.9061 13.5828 9.82848 15.5928C8.78562 17.6027 8.26423 19.9076 8.26423 22.5066C8.26423 25.1057 8.78562 27.4106 9.82848 29.4206C10.9061 31.3957 12.3834 32.9552 14.2605 34.0991ZM25.0537 26.3536C24.4282 26.7001 23.6806 26.8732 22.8118 26.8732C22.0124 26.8732 21.2822 26.6826 20.6217 26.3016C19.9613 25.9201 19.4401 25.4002 19.0575 24.7421C18.7099 24.0836 18.536 23.3382 18.536 22.5066C18.536 21.6751 18.7274 20.9297 19.1097 20.2712C19.4919 19.6131 19.9959 19.0931 20.6217 18.7117C21.2822 18.3306 22.0295 18.1401 22.864 18.1401C23.6981 18.1401 24.4282 18.3306 25.0537 18.7117C25.7142 19.0931 26.2183 19.6131 26.5658 20.2712C26.9134 20.8951 27.0874 21.6402 27.0874 22.5066C27.0874 23.3731 26.8963 24.1356 26.5137 24.7941C26.1661 25.4522 25.6796 25.9721 25.0537 26.3536Z"
			fill="#383FEF"
		/>
	</svg>
);

const BLOCK_PATTERN_INSERTED_NOTICE = 'block-pattern-inserted-notice';
export default () => {
	const [ dismissed, setDismissed ] = useState( false );
	const [ noticeTriggered, setNoticeTriggered ] = useState( false );

	const patternInserted = useSelect(
		( select ) =>
			select( 'core/notices' )
				.getNotices()
				.filter( ( n ) => n.id === BLOCK_PATTERN_INSERTED_NOTICE )
				.length > 0
	);

	useEffect( () => {
		if ( noticeTriggered ) {
			return;
		}
		if ( patternInserted ) {
			setNoticeTriggered( true );
		}
	}, [ patternInserted ] );

	const { ajaxUrl, ajaxAction, nonce, strings, buttonLink } =
		designPackNoticeData;
	const { dismiss, recommends, learnMore, noticeHtml } = strings;

	const dismissNotice = () => {
		const data = new window.FormData();

		data.append( 'action', ajaxAction );
		data.append( 'nonce', nonce );

		fetch( ajaxUrl, {
			method: 'POST',
			body: data,
		} ).then( () => {
			setDismissed( true );
		} );
	};

	const classes = [ 'notice-wrap' ];

	if ( dismissed ) {
		classes.push( 'dismissed' );
	}

	if ( ! noticeTriggered ) {
		return null;
	}

	return (
		<div className={ classes.join( ' ' ) }>
			{ logo }

			<div className="content-wrap">
				<span>{ recommends }</span>

				<p dangerouslySetInnerHTML={ { __html: noticeHtml } }></p>
			</div>

			<a
				onClick={ dismissNotice }
				href={ buttonLink }
				target="_blank"
				rel="noopener noreferrer"
			>
				{ learnMore }
			</a>

			<button onClick={ dismissNotice }>
				<Icon icon={ closeSmall }></Icon>
				<span hidden>{ dismiss }</span>
			</button>
		</div>
	);
};
