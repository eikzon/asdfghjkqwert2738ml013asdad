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
});