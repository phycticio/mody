import { unregisterBlockType } from '@wordpress/blocks';
import domReady from '@wordpress/dom-ready';

domReady( function () {
  unregisterBlockType( 'core/paragraph' );
} );
