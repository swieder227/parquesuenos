/**
 * navigation.js
 *
 * Handles toggling the navigation menu for small screens and enables tab
 * support for dropdown menus.
 */
( function() {
	var container, button, menu, links, subMenus;

	container = document.getElementById( 'site-navigation' );
	if ( ! container ) {
		return;
	}

	button = container.getElementsByTagName( 'button' )[0];
	if ( 'undefined' === typeof button ) {
		return;
	}

	menu = container.getElementsByTagName( 'ul' )[0];

	// Hide menu toggle button if menu is empty and return early.
	if ( 'undefined' === typeof menu ) {
		button.style.display = 'none';
		return;
	}

	menu.setAttribute( 'aria-expanded', 'false' );
	if ( -1 === menu.className.indexOf( 'nav-menu' ) ) {
		menu.className += ' nav-menu';
	}

	button.onclick = function() {
		if ( -1 !== container.className.indexOf( 'toggled' ) ) {
			container.className = container.className.replace( ' toggled', '' );
			button.setAttribute( 'aria-expanded', 'false' );
			menu.setAttribute( 'aria-expanded', 'false' );
		} else {
			container.className += ' toggled';
			button.setAttribute( 'aria-expanded', 'true' );
			menu.setAttribute( 'aria-expanded', 'true' );
		}
	};

	// Get all the link elements within the menu.
	links    = menu.getElementsByTagName( 'a' );
	subMenus = menu.getElementsByTagName( 'ul' );

	// Set menu items with submenus to aria-haspopup="true".
	for ( var i = 0, len = subMenus.length; i < len; i++ ) {
		subMenus[i].parentNode.setAttribute( 'aria-haspopup', 'true' );
	}

	// Each time a menu link is focused or blurred, toggle focus.
	for ( i = 0, len = links.length; i < len; i++ ) {
		links[i].addEventListener( 'focus', toggleFocus, true );
		links[i].addEventListener( 'blur', toggleFocus, true );
	}

	/**
	 * Sets or removes .focus class on an element.
	 */
	function toggleFocus() {
		var self = this;

		// Move up through the ancestors of the current link until we hit .nav-menu.
		while ( -1 === self.className.indexOf( 'nav-menu' ) ) {

			// On li elements toggle the class .focus.
			if ( 'li' === self.tagName.toLowerCase() ) {
				if ( -1 !== self.className.indexOf( 'focus' ) ) {
					self.className = self.className.replace( ' focus', '' );
				} else {
					self.className += ' focus';
				}
			}

			self = self.parentElement;
		}
	}
} )();


/*
* Handles the #stickynav logic
* * On scroll, if scrollY > offset then show
*/
(function(window){

	/*
	* Constructor
	*/
	var Stickynav = function(elem){

		// DOM Element
		this.elem = elem;
		this.bodyelem = document.getElementsByTagName("body")[0];

		// child btn DOM element
		this.btn = elem.querySelectorAll(".menu-toggle-sticky")[0];
		this.nav = elem.querySelectorAll(".main-navigation-sticky")[0];

		// Initial State
		this.visible = false;

		// height to compare if we should show/hide
		this.scrollOffset = document.querySelector("#masthead").offsetHeight + 100;

		// Self Init
		this.init();
	}

	/*
	* Prototype Methods
	*/
	Stickynav.prototype = {

		constructor: Stickynav,

		init: function() {
			// add throttled scroll listener
			window.addEventListener("scroll", _throttle(this.update.bind(this), 250));
			// btn to toggle open/close
			this.btn.addEventListener("click", this.toggle.bind(this));
			// close when we tap menu
			this.nav.addEventListener("click", this.close.bind(this));
		},

		update: function() {
			if(_getScrollY() < this.scrollOffset)
				this.unstick()
			else
				this.stick();
		},

		stick: function() {
			if(!this.visible)
				this.bodyelem.className += " show-sticky";
			this.visible = true;
		},

		unstick: function() {
			if(this.visible)
				this.bodyelem.className = this.bodyelem.className.replace(new RegExp('(^|\\s)*' + "show-sticky|toggled" + '(\\s|$)*', 'g'), '');
			this.visible = false;
		},

		toggle: function() {
			if(this.bodyelem.className.indexOf("toggled") >= 0)
				this.bodyelem.className = this.bodyelem.className.replace(new RegExp('(^|\\s)*' + "toggled" + '(\\s|$)*', 'g'), '');
			else
				this.bodyelem.className += " toggled";
		},

		close: function() {
			this.bodyelem.className = this.bodyelem.className.replace(new RegExp('(^|\\s)*' + "toggled" + '(\\s|$)*', 'g'), '');
		}

	}

	/*
	* Helper functions
	*/

	// Get current Y position
	var _getScrollY = function() {
	    return (window.pageYOffset !== undefined) ?
	            window.pageYOffset : (document.documentElement || document.body.parentNode || document.body).scrollTop;
	};

	// throttle, or reduce rapid consecutive calls. used to increase performance
	// Borrowed from Underscore.js
	var _throttle = function(func, wait) {
	    var _now =  Date.now || function() { return new Date().getTime(); };
	    var context, args, result;
	    var timeout = null;
	    var previous = 0;
	    var later = function() {
	      previous = _now();
	      timeout = null;
	      result = func.apply(context, args);
	      context = args = null;
	    };
	    return function() {
	        var now = _now();
	        var remaining = wait - (now - previous);
	        context = this;
	        args = arguments;
	        if (remaining <= 0) {
	            clearTimeout(timeout);
	            timeout = null;
	            previous = now;
	            result = func.apply(context, args);
	            context = args = null;
	        } else if (!timeout) {
	            timeout = setTimeout(later, remaining);
	        }
	        return result;
	    };
	};

	var stickynav = new Stickynav(document.getElementById("stickyhead"));

})(window);

