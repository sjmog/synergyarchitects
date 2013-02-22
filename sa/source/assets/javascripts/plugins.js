// Avoid `console` errors in browsers that lack a console.
(function() {
	var method;
	var noop = function () {};
	var methods = [
		'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
		'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
		'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
		'timeStamp', 'trace', 'warn'
	];
	var length = methods.length;
	var console = (window.console = window.console || {});

	while (length--) {
		method = methods[length];

		// Only stub undefined methods.
		if (!console[method]) {
			console[method] = noop;
		}
	}
}());

// Place any jQuery/helper plugins in here.

/*global jQuery */
/*!
* Baseline.js 1.0
*
* Copyright 2012, Daniel Eden http://daneden.me
* Released under the WTFPL license
* http://sam.zoy.org/wtfpl/
*
* Date: Wed June 20 11:39:00 2012 GMT
*/
(function(e){e.fn.baseline=function(t){var n,r,i,s=0;return this.each(function(){var o=e(this);var u=function(e){if(typeof e==="number"){i=e}else if(typeof e==="object"){for(key in e){var t=parseInt(key);if(document.width>t&&t>=s){i=e[key];s=t}}}o.css("maxHeight","none");n=o.height();r=Math.floor(n/i)*i;o.css("maxHeight",r)};u(t);e(window).resize(function(){u(t)})})}})(jQuery)