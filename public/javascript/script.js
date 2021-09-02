// image pop up 
$(document).ready(function(){
  $('.aboutusImage').magnificPopup({
    type: 'image',
      delegate: 'a'
    })
  });

// navbar changed on scrolled
$(window).scroll(function(){
  $('nav').toggleClass('scrolled',$(this).scrollTop()>50);
})

// Initialize Swiper 
var swiper = new Swiper('.swiper-container', {
  effect: 'coverflow',
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: 'auto',
  coverflowEffect: {
    rotate: 30,
    stretch: 0,
    depth: 500,
    modifier: 1,
    slideShadows: true,
  },
  pagination: {
    el: '.swiper-pagination',
  },
});

// aos         
AOS.init();
