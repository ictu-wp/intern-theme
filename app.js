import './style.css'
import 'slick-carousel';
import 'jquery-countdown'
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

  $('.products-sale').slick({
    infinite: true,
    slidesPerRow: 4,
    centerMode: true,
    autoplay: true,
    autoplaySpeed: 2000,
  });

  $('#countdown').countdown($('#end_at').val(), function (e) {
    $('.hour').text(e.offset.totalHours);
    $('.minute').text(e.offset.minutes);
    $('.second').text(e.offset.seconds);
  }).on('finish.countdown', function () {
    $(this).hide();
  });
})
