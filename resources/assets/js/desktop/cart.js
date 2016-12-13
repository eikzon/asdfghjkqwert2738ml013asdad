$(document).ready(function () {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  $('.js-add-to-cart').on('click', function() {
    $quantity = $('input[name="quantity"]').val();
    $pid      = $(this).data('pid');
    $.ajax({
      type: 'POST',
      url: $(this).data('url'),
      data: {
        _method: 'PUT',
        fk_product_id: $pid,
        ct_quantity: $quantity
      },
      success: function(result) {
        window.location.reload();
      }
    });
  });
}