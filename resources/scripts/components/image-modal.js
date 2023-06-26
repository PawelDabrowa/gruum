/************* Image Modal ****************/

  $('.pop').on('click', function() {
    $('.imagepreview').attr('src', $(this).attr('data-src'));
    $('.gallery-modal-wrapper').addClass('show');
    $('body').addClass('fix');
  });	
  $('#imagemodal .close').on('click', function() {
    $('.gallery-modal-wrapper').removeClass('show');  
    $('body').removeClass('fix');
  });

/************* end Image Modal ****************/