import domReady from '@roots/sage/client/dom-ready';
import {registerBlockStyle, unregisterBlockStyle, unregisterBlockType} from '@wordpress/blocks';

/**
 * Editor entrypoint
 */
domReady(() => {
  unregisterBlockType('core/paragraph');
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
import.meta.webpackHot?.accept(console.error);
