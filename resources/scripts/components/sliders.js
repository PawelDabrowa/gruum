
/* eslint-disable */
// core version + navigation, pagination modules:
import "slick-carousel/slick/slick.min";
// eslint-disable-next-line no-unused-vars


//================================= Slick Sliders ================================//
//---------------------- Slider Block -------------------------------//
let block_slider = $('.block-slider');

if(block_slider.length) {
  let block_slider_settings = {
    'dots': true,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear',
    autoplay: true,
    prevArrow: false,
    nextArrow: false,
  }

  block_slider.slick(block_slider_settings);

  $(window).on('resize', function() {
    if ($(window).width() >= 769 && !block_slider.hasClass('slick-initialized')) {
      return block_slider.slick(block_slider_settings);
    }
  })
}
//---------------------- End Slider Block -------------------------------//
//---------------------- Start Slick Block Slider Tabs ---------------------------//

  $('.slider-single').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: false,
    adaptiveHeight: true,
    infinite: true,
    useTransform: true,
    speed: 400,
    cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
  });
  
  $('.slider-nav')
    .slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      dots: false,
      arrows: false,
      focusOnSelect: true,
      infinite: false,
    });
  
  $('.slider-single').on('afterChange', function(event, slick, currentSlide) {
    $('.slider-nav').slick('slickGoTo', currentSlide);
    var currrentNavSlideElem = '.slider-nav .slick-slide[data-slick-index="' + currentSlide + '"]';
    $('.slider-nav .slick-slide.is-active').removeClass('is-active');
    $(currrentNavSlideElem).addClass('is-active');
  });
  
  $('.slider-nav').on('click', '.slick-slide', function(event) {
    event.preventDefault();
    var goToSingleSlide = $(this).data('slick-index');
  
    $('.slider-single').slick('slickGoTo', goToSingleSlide);
  });

//---------------------- End Slick Block Slider Tabs -------------------------------//
//---------------------- Rooms Slider Block -------------------------------//
let room_block_slider = $('.rooms-slider');

if(room_block_slider.length) {
  let room_block_slider_settings = {
    'dots': true,
    infinite: true,
    speed: 500,
    slidesToShow: 4,
    slidesToScroll: 1,
    cssEase: 'linear',
    autoplay: false,
    pauseOnHover: false,
    responsive: [
      {
        breakpoint: 1500,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 820,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ],
  }

  room_block_slider.slick(room_block_slider_settings);

  $(window).on('resize', function() {
    if ($(window).width() >= 769 && !room_block_slider.hasClass('slick-initialized')) {
      return room_block_slider.slick(room_block_slider_settings);
    }
  })
}
//---------------------- end Rooms Slider Block -------------------------------//
//---------------------- Items Slider Block -------------------------------//
let items_slider = $('.items-slider');

if(items_slider.length) {
  let items_slider_settings = {
    'dots': false,
    infinite: true,
    speed: 500,
    // fade: true,
    cssEase: 'linear',
    // autoplay: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 820,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ],
  }

  items_slider.slick(items_slider_settings);

  $(window).on('resize', function() {
    if ($(window).width() >= 769 && !items_slider.hasClass('slick-initialized')) {
      return items_slider.slick(items_slider_settings);
    }
  })
}
//---------------------- end Items Slider Block -------------------------------//
//---------------------- Slider Testimonials Block 1 -------------------------------//
let block_slider_testimonials1 = $('.slider-testimonials1');

if(block_slider_testimonials1.length) {
  let block_slider_testimonials1_settings = {
    'dots': true,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    speed: 500,
    cssEase: 'linear',
    autoplay: true,
    autoplaySpeed: 5000,
    // prevArrow: false,
    // nextArrow: false,
    responsive: [
      {
        breakpoint: 820,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
        },
      },
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ],
  }

  block_slider_testimonials1.slick(block_slider_testimonials1_settings);

  $(window).on('resize', function() {
    if ($(window).width() >= 769 && !block_slider_testimonials1.hasClass('slick-initialized')) {
      return block_slider_testimonials1.slick(block_slider_testimonials1_settings);
    }
  })
}
//---------------------- end Slider Testimonials Block 1 -------------------------------//
//---------------------- Slider Testimonials Block 2 -------------------------------//
let block_slider_testimonials2 = $('.slider-testimonials2');

if(block_slider_testimonials2.length) {
  let block_slider_testimonials2_settings = {
    'dots': false,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    speed: 500,
    cssEase: 'linear',
    autoplay: true,
    // prevArrow: false,
    // nextArrow: false,
  }

  block_slider_testimonials2.slick(block_slider_testimonials2_settings);

  $(window).on('resize', function() {
    if ($(window).width() >= 769 && !block_slider_testimonials2.hasClass('slick-initialized')) {
      return block_slider_testimonials2.slick(block_slider_testimonials2_settings);
    }
  })
}
//---------------------- end Slider Testimonials Block 2 -------------------------------//
//---------------------- Offers Slider Block -------------------------------//
let offer_block_slider = $('.offer-block-slider');

if(offer_block_slider.length) {
  let offer_block_slider_settings = {
    'dots': false,
    infinite: true,
    speed: 500,
    slidesToShow: 4,
    slidesToScroll: 1,
    cssEase: 'linear',
    autoplay: false,
    pauseOnHover: false,
    responsive: [
      {
        breakpoint: 1500,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 820,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ],
  }

  offer_block_slider.slick(offer_block_slider_settings);

  $(window).on('resize', function() {
    if ($(window).width() >= 769 && !offer_block_slider.hasClass('slick-initialized')) {
      return offer_block_slider.slick(offer_block_slider_settings);
    }
  })
}
//---------------------- end Offers Slider Block -------------------------------//

/***
**** filter item button active
****/
$('.menu-cont button').on('click', function(){
  $('.menu-cont').find('.active').removeClass('active');
  $(this).addClass('active');
});
//** end filter item button active */

/***
**** filter item
****/
$('.block-slider-filter-items-wrap .menu-cont button').on('click', function(){
  let filter = $(this).data('filter');
  $('.coffee-slider').slick('slickUnfilter');
  
  if(filter == 'light'){
    $('.coffee-slider').slick('slickFilter','.light');
  }
  else if(filter == 'moderate'){
    $('.coffee-slider').slick('slickFilter','.moderate');
  }
  else if(filter == 'heavy'){
    $('.coffee-slider').slick('slickFilter','.heavy');
  }
  else if(filter == 'decaf'){
    $('.coffee-slider').slick('slickFilter','.decaf');
  }
  else if(filter == 'all'){
    $('.coffee-slider').slick('slickUnfilter');
  }
})
/****** end filter item ******/

/***
**** filter item tab active & read more
****/
let ourItemArticle = document.querySelectorAll('.ouritem');
let readMoreButtons = document.querySelectorAll('.read-more-btn');
let readMoreBlock = document.querySelectorAll('.read-more-block');

if(ourItemArticle) {
  for (let i = 0; i < readMoreButtons.length; i++) {            
    readMoreButtons[i].addEventListener('click', () => tabClick(i));
  }
}
function tabClick(currentTab) {

  ourItemArticle[currentTab].classList.toggle('active');
  readMoreBlock[currentTab].classList.toggle('active');

    if (readMoreBlock[currentTab].classList.contains('active')) {
      readMoreButtons[currentTab].innerHTML = 'Read Less';
    } else {
      readMoreButtons[currentTab].innerHTML = 'Read More';
    }
}
/****** end filter item read more ******/
//=============================== End Slick Sliders ================================//


let woo_block_slider = $('.woo-slider');

if(woo_block_slider.length) {
  let woo_block_slider_settings = {
    'dots': true,
    infinite: true,
    speed: 500,
    slidesToShow: 4,
    slidesToScroll: 1,
    cssEase: 'linear',
    autoplay: false,
    pauseOnHover: false,
    responsive: [
      {
        breakpoint: 1500,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 820,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ],
  }

  woo_block_slider.slick(woo_block_slider_settings);

  $(window).on('resize', function() {
    if ($(window).width() >= 769 && !woo_block_slider.hasClass('slick-initialized')) {
      return woo_block_slider.slick(woo_block_slider_settings);
    }
  })
}
//---------------------- end Rooms Slider Block -------------------------------//