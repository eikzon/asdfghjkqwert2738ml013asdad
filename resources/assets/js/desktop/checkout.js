$(document).ready(function () {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  $('.js-order-create').on('click', function() {
    $first_name        = $('input[name="oa_first_name"]').val();
    $last_name         = $('input[name="oa_last_name"]').val();
    $tel               = $('input[name="oa_tel"]').val();
    $address           = $('input[name="oa_address"]').val();
    $province          = $('select[name="oa_province"]').val();
    $district          = $('select[name="oa_district"]').val();
    $sub_district      = $('select[name="oa_sub_district"]').val();
    $postcode          = $('input[name="oa_postcode"]').val();
    $isbilling_address = $('input[name="oa_isbilling_address"]:checked').val();
    $billign_address   = $('textarea[name="oa_billign_address"]').val();

    if($first_name == '') {
      $('input[name="oa_first_name"]').focus();
    }
    else if($last_name == '') {
      $('input[name="oa_last_name"]').focus();
    }
    else if($tel == '') {
      $('input[name="oa_tel"]').focus();
    }
    else if($address == '') {
      $('input[name="oa_address"]').focus();
    }
    else if($province == 0) {
      $('select[name="oa_province"]').focus();
    }
    else if($district == 0) {
      $('select[name="oa_district"]').focus();
    }
    else if($sub_district == 0) {
      $('select[name="oa_sub_district"]').focus();
    }
    else if($postcode == '' || $postcode.length < 5) {
      $('input[name="oa_postcode"]').focus();
    }
    // else if($('input[name="oa_isbilling_address"]').is(':checked')) {
    //   $('#js-checkout').submit();
    // }
    // else if($billign_address == '') {
    //   $('textarea[name="oa_billign_address"]').focus();
    // }
    else
    {
      $('#js-checkout').submit();
    }
  });
});
