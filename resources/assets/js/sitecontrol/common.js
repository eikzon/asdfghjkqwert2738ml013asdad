$(document).ready(function () {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  $('.js-change-status').on('click', function() {
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

  $('.js-delete').on('click', function() {
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

  $('.js-change-flow-status').on('change', function() {

    $orderFlowStatus = $('select[name="od_flow_status"]').val();

    $.ajax({
      type: 'POST',
      url: $(this).data('url'),
      data: {
        _method: 'PUT',
        od_flow_status: $orderFlowStatus
      },
      success: function(result) {
        actionUpdate();
        setTimeout(function(){ window.location.reload(); }, 3000);
      }
    });
  });
});