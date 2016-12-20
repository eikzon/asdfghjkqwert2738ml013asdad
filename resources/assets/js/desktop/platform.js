$(function(){
  $('.js-platform-option').on('change', function() {
    line = $(this).data('line');
    $('input[type="submit"][data-line="' + line + '"]').attr('disabled', true);

    if($('select[name="size"][data-line="' + line + '"]').val() && $('select[name="color"][data-line="' + line + '"]').val())
    {
      $.ajax({
        type: 'POST',
        url: $(this).data('url'),
        datatype: 'json',
        data: {
          _method: 'POST',
          _token: $('input[name="_token"]').val(),
          size: $('select[name="size"][data-line="' + line + '"]').val(),
          color: $('select[name="color"][data-line="' + line + '"]').val()
        },
        success: function(result) {
          result = $.parseJSON(result);
          if(result.status)
          {
            $('.js-price-display-' + line).html(result.price);
            $('.input-pid-' + line).val(result.id);
            $('input[type="submit"][data-line="' + line + '"]').attr('disabled', false);
          }
          else
          {
            $('.js-price-display-' + line).html('-');
            $('input[type="submit"][data-line="' + line + '"]').attr('disabled', true);
          }
        }
      });
    }
  });
});
