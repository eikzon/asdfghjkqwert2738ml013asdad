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
        actionUpdate();
        setTimeout(function(){ window.location.reload(); }, 3000);
      }
    });
  });

  $('.js-member-delete').on('click', function() {
    $.ajax({
      type: 'POST',
      url: $(this).data('url'),
      data: {
        _method: 'DELETE'
      },
      success: function(result) {
        actionDelete();
        setTimeout(function(){ window.location.reload(); }, 3000);
      }
    });
  });
});