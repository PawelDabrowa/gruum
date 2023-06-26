import Filterizr from 'filterizr';

//---------------------- Filterizr -------------------------------//

  //This will extend the $.fn prototype with Filterizr
  Filterizr.installAsJQueryPlugin($);
  
  $('.filtr').on('click', function() {
    $(this).addClass('active');
    $(this).siblings('.active').removeClass('active');
  });
  var filterContainer = document.getElementsByClassName('filter-container');
  if (filterContainer.length > 0) {
    var options = {
      layout: 'sameSize',
      gutterPixels: 10,
    }

    jQuery(document).ready(function() {
      // eslint-disable-next-line no-unused-vars
      const filterizr = new Filterizr('.filter-container', options);
    });
  }
