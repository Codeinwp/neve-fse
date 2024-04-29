import { createRoot } from '@wordpress/element';

import DesignPackNotice from './components/DesignPackNotice';

const container = document.getElementById( 'neve-fse-design-pack-notice' );

if ( container ) {
	createRoot( container ).render( <DesignPackNotice /> );
}
