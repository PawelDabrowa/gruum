
/* eslint-disable */
import {domReady} from '@roots/sage/client';

//External Dependencies

import './components/sliders';
import './components/nav-side-slide';
import './components/navDrop';
import './components/filters';
import './components/post-modal';
import './components/image-modal';

// Import Bootstrap
import 'bootstrap';

import 'alpinejs'
// import smoothScroll from './smooth-scroll';
/**
 * app.main
 */
const main = async (err) => {
  if (err) {
    // handle hmr errors
    console.error(err);
  }

  //Passive listeners to improve scrolling performance (Lighthouse Report)

  jQuery.event.special.touchstart = {
    setup: function( _, ns, handle ) {
        this.addEventListener("touchstart", handle, { passive: !ns.includes("noPreventDefault") });
    }
  };

  jQuery.event.special.touchmove = {
      setup: function( _, ns, handle ) {
          this.addEventListener("touchmove", handle, { passive: !ns.includes("noPreventDefault") });
      }
  };

  jQuery.event.special.wheel = {
      setup: function( _, ns, handle ){
          this.addEventListener("wheel", handle, { passive: true });
      }
  };
  
  jQuery.event.special.mousewheel = {
      setup: function( _, ns, handle ){
          this.addEventListener("mousewheel", handle, { passive: true });
      }
  };

  // application code

  window.Alpine = Alpine
  Alpine.start();

  smoothScroll();

/**
 * Initialize
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
domReady(main);
import.meta.webpackHot?.accept(main);
};