// hamburger button
$('.hamburger').click(function() {
  // alert(event.target.id+' and '+$(event.target).attr('class'));
  jQuery('.nav').toggleClass('isOpen');
  jQuery('.menu-btn').toggleClass('is-active');
  jQuery('body').toggleClass('noscroll');
});

// Check submenu is open before allow default
$('#side-slide ul#menu-primary-navigation li.menu-item-has-children').click(function (e) {
  $(this).siblings().removeClass('open');
  if ($('.menu-item-has-children').hasClass('open')) {
    // do nothing
  } else {
    e.preventDefault();
  }
  $(this).toggleClass('open');
});

// Add nav bg
$(window).scroll(function () {
  if ($(this).scrollTop() > 50) {
    $('#side-slide').addClass('addbg');
  } else {
    $('#side-slide').removeClass('addbg');
  }
});
