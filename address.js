import 'jquery-cascading-dropdown';

(function ($) {
  const $address = $('input[name="billing_address_1"]');
  const [ward, district, province] = $address.val().split(', ');

  $.getJSON('https://provinces.open-api.vn/api/?depth=3', function (data) {
    $('#address').cascadingDropdown({
      selectBoxes: [
        {
          selector: '#province',
          source: $.map(data, function (item, index) {
            return {
              label: item.name,
              value: index.toString(),
              selected: item.name == province
            }
          }),
        },
        {
          selector: '#district',
          requires: ['#province'],
          source: function (request, response) {
            response($.map(data[request.province].districts, function (item, index) {
              return {
                label: item.name,
                value: index.toString(),
                selected: item.name == district,
              }
            }))
          }
        },
        {
          selector: '#ward',
          requires: ['#province', '#district'],
          requireAll: true,
          source: function (request, response) {
            const { province, district } = request;
            response($.map(data[province].districts[district].wards, function (item, index) {
              return {
                label: item.name,
                value: index.toString(),
                selected: item.name == ward,
              }
            }))
          },
          onChange: function (_, value) {
            if (null == value) {
              $address.val('');
              return;
            }

            const parts = ['ward', 'district', 'province'];
            const address = [];
            for (const i in parts) {
              address.push($(`#${parts[i]} option:selected`).text());
            }

            $address.val(address.join(', '));
          },
        }
      ],
    });
  });
})(jQuery);
