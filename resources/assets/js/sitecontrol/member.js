$(document).ready(function () {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  $('.js-member-change-status').on('click', function() {
    $status = $(this).data('status');
    $.ajax({
      type: 'POST',
      url: $(this).data('url'),
      data: {
        _method: 'PUT',
        status: $status
      },
      success: function(result) {
        window.location.reload();
      }
    });
  });

  $('.js-member-delete').on('click', function() {
    if(confirm('You won\'t be able to revert this!') == true)
    {
      $.ajax({
        type: 'POST',
        url: $(this).data('url'),
        data: {
          _method: 'DELETE'
        },
        success: function(result) {
          window.location.reload();
        }
      });
    }
  });
});