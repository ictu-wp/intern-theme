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
  $(window).on('scroll', function () {
    const $header = $('#header');

    if ($(this).scrollTop() < 320) {
      $header.removeClass('sticky');

      return;
    }

    $header.addClass('sticky');
  });

  $('.multiple-items').each(function () {
    $(this).slick({
      infinite: false,
      slidesPerRow: 4,
      centerMode: true,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesPerRow: 2,
          }
        }
      ]
    });
  });

  $('.customer-showcase').slick({
    slidesPerRow: 2,
    nextArrow: $('.next-customer'),
    prevArrow: $('.prev-customer'),
    arrows: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesPerRow: 1,
        }
      }
    ]
  })

  $('ul.products').slick({
    slidesPerRow: 3,
    nextArrow: $('.next-product'),
    prevArrow: $('.prev-product'),
    arrows: true,
  })

  $('.products-sale').slick({
    infinite: true,
    slidesPerRow: 4,
    centerMode: true,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [
      {
        breakpoint: 640,
        settings: {
          slidesPerRow: 1,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesPerRow: 2,
        }
      }
    ]
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
        if (response.data.count == 0) {
          window.location.reload();

          return;
        }

        $('.product-items').replaceWith(response.data.items);
        $('.total-amount').replaceWith(response.data.amount);
        $('#cart-count').text(response.data.count);
      });
    });
  });

  $('#buynow').on('click', function () {
    $.post(admin_ajax, {
      'action': 'buynow',
      'id': $(this).attr('data-id'),
    }, function (response) {
      window.location.href = response.data;
    });
  });

  $(document).on('click', '.minus, .plus', function () {
    const q = $(this).closest('.quantity').find('.qty');

    if ($(this).is('.minus')) {
      if (q.val() < 2) {
        return;
      }

      q.val(q.val() - 1);

      return;
    }

    q.val(Number(q.val()) + 1);
  });

  // https://rudrastyh.com/woocommerce/remove-update-cart-button.html
  $('.woocommerce').on('change', 'input.qty', function () {
    $("[name='update_cart']").trigger('click');
  });
});
