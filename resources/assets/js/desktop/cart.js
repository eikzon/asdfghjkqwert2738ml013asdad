$(document).ready(function () {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  $('.js-cart-product').on('click', function() {
    $quantity  = $(this).closest('.group-quantity').find('.js-quantity');
    $cartId    = $(this).data('cart-id');
    $productId = $(this).data('product-id');

    $.ajax({
      type: 'POST',
      url: $(this).data('url'),
      data: {
        _method: 'PUT',
        id: $cartId,
        fk_product_id: $productId,
        ct_quantity: $quantity
      },
      success: function(result) {
        window.location.reload();
      }
    });
  });

  $('.js-delete-cart').on('click', function() {
    $.ajax({
      type: 'GET',
      url: $(this).data('url'),
      data: {
        _method: 'DELETE'
      },
      success: function(result) {
        window.location.reload();
      }
    });
  });

  $('.js-option-provinces').on('change', function() {
    $provinceName = $('.js-option-provinces').val();

    $.ajax({
      type: 'POST',
      url: $(this).data('url'),
      data: {
        _method: 'POST',
        province: $provinceName
      },
      success: function(result) {
        $('.js-option-amphure').html(result['amphures']);
        $('.js-option-district').html(result['district']);
        $('.js-zipcode').val(result['zipcode']);
      }
    });
  });

  $('.js-option-amphure').on('change', function() {
    $amphureName = $('.js-option-amphure').val();

    $.ajax({
      type: 'POST',
      url: $(this).data('url'),
      data: {
        _method: 'POST',
        amphure: $amphureName
      },
      success: function(result) {
        $('.js-option-district').html(result['district']);
        $('.js-zipcode').val(result['zipcode']);
      }
    });
  });

  $('.js-option-district').on('change', function() {
    $districtName = $('.js-option-district').val();

    $.ajax({
      type: 'POST',
      url: $(this).data('url'),
      data: {
        _method: 'POST',
        districts: $districtName
      },
      success: function(result) {
        $('.js-zipcode').val(result['zipcode']);
      }
    });
  });
});