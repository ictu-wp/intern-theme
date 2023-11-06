import 'slick-carousel';
import 'jquery-countdown';
import 'slick-carousel/slick/slick.css';
import 'slick-carousel/slick/slick-theme.css';
import 'jquery-form';
import 'jquery-modal';
import 'jquery-modal/jquery.modal.css'
import './style.css'

window.$ = window.jQuery = require('jquery')

jQuery(function () {
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

  $(document).on('submit', '#login, #register', function (event) {
    const $form = $(this);
    event.preventDefault();

    $form.ajaxSubmit({
      success: function (response) {
        if (response.success) {
          window.location.reload();
          return;
        }

        $form.replaceWith(response.data);
      },
    });
  });

  // Maybe simplify it?
  $(document).on('click', '.auth-toggle', function () {
    $('#login-area').toggle();
    $('#register-area').toggle();
  });

  $(document).on('click', '.remove-item', function (e) {
    e.preventDefault();
    $.get($(this).attr('href'), function () {
      $.post(admin_ajax, {
        action: 'minicart'
      }, function (response) {
        $('#cart').replaceWith(response.data.html);
        $('#cart-count').text(response.data.count);
      });
    });
  });
});
