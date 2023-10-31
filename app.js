import './style.css'
import 'slick-carousel';
import 'slick-carousel/slick/slick.css'
import 'slick-carousel/slick/slick-theme.css'

window.$ = window.jQuery = require('jquery')

jQuery(function() {
  $('.multiple-items').each(function () {
    $(this).slick({
      infinite: false,
      slidesPerRow: 4,
      centerMode: true,
    });
  });

  $('.customer-showcase').slick({
    slidesPerRow: 2,
    nextArrow: $('.next-customer'),
    prevArrow: $('.prev-customer'),
    arrows: true,
  })
})
