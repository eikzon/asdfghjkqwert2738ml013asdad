$(function(){
  $('.js-platform-option').on('change', function() {
    line = $(this).data('line');

    if($('select[name="size"][data-line="' + line + '"]').val() && $('select[name="color"][data-line="' + line + '"]').val())
    {
      $.ajax({
        type: 'POST',
        url: $(this).data('url'),
        datatype: 'json',
        data: {
          _method: 'GET',
          size: $('select[name="size"][data-line="' + line + '"]').val(),
          color: $('select[name="color"][data-line="' + line + '"]').val()
        },
        success: function(result) {

          result = $.parseJSON(result);
          $('.js-price-display-' + line).html(result.price);
          $('input[name="pid_' + line + '"]').val(result.id);
        }
      });
    }
  });
});
