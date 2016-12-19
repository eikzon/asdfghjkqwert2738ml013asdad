@extends('layout.desktop')
@section('header')
  @include('common.desktop.header')
@endsection
@section('title', 'ที่อยู่สมาชิก')
@section('content')
  @include('common.desktop.account.header', [
    'title'  => 'My Account',
    'detail' => 'ที่อยู่สมาชิก'
  ])
  <div class="container-myaccount">
    @include('common.desktop.account.menu', ['page' => 'address'])
    <div class="blog">
        <h2>ข้อมูลสถานที่จัดส่ง</h2>
        <div class="blog-inside inside-left">
            <h3>ที่อยู่ปัจจุบัน</h3>
            <div class="form-style-2">
              <form method="post" action="{{ route('account_update_shipping', [$member->id]) }}" class="form-style">
                <label for="user-address-village">ที่อยู่ (เลขที่, อาคาร/หมู่บ้าน, ซอย/ถนน)</label>
                <input type="text" name="shipping_address" id="user-address-village" maxlength="255" value="{{ $member->shipping_address }}">
                <label for="user-province">จังหวัด<span>*</span></label>
                <select name="shipping_province" id="user-province" class="js-option-provinces" data-url="{{ route('option_province') }}">
                  <option value="0">กรุณาเลือกจังหวัด</option>
                  @foreach(getProvinces() as $province)
                    <option value="{{ $province->name_th }}" {{ $member->shipping_province == $province->name_th ? 'selected' : '' }}>{{ $province->name_th }}</option>
                  @endforeach
                </select>
                <label for="user-district">อำเภอ/เขต<span>*</span></label>

                <select name="shipping_district" class="js-option-amphure" data-url="{{ route('option_amphures') }}" id="receiver-district" required>
                  <option value="0">กรุณาเลือกอำเภอ/เขต</option>
                  @if(!empty($member->shipping_district))
                    @foreach(getAmphures(getProvinceId($member->shipping_province)->id) as $ampture)
                      <option value="{{ $ampture->name_th }}" {{ $member->shipping_district == $ampture->name_th ? 'selected' : '' }}>{{ $ampture->name_th }}</option>
                    @endforeach
                  @endif
                </select>
                <label for="user-subdistrict">ตำบล/แขวง<span>*</span></label>
                <select name="shipping_sub_district" data-url="{{ route('option_districts') }}" class="js-option-district" id="receiver-subdistrict" required>
                  <option value="0">กรุณาเลือกตำบล/แขวง</option>
                  @if(!empty($member->shipping_sub_district))
                    @foreach(@getDistricts(getAmphureId($member->shipping_district)->id) as $district)
                      <option value="{{ $district->name_th }}" {{ $member->shipping_sub_district == $district->name_th ? 'selected' : '' }}>{{ $district->name_th }}</option>
                    @endforeach
                  @endif
                </select>
                <label for="user-postcode">รหัสไปรษณีย์<span>*</span></label>
                <input type="text" name="shipping_postcode" class="js-zipcode" maxlength="5" id="user-postcode" value="{{ $member->shipping_postcode }}">
                {{ csrf_field() }}
                <input type="submit" name="save-pass" id="save-pass" value="บันทึกข้อมูล">
              </form>
            </div>
        </div>
        <div class="blog-inside">
            <h3>ที่อยู่ใบกำกับภาษี</h3>
            <div class="form-style-2">
              <form method="post" action="{{ route('account_update_billing', $member->id) }}" class="form-style">
                <label for="user-address-no">ชื่อและที่อยู่ใบกำกับภาษี<span>*</span></label>
                <textarea name="billign_address" id="tax-address">{{ $member->billign_address }}</textarea>
                <label for="user-address-village">เลขประจำตัวบัตรประชาชน / Tax Id</label>
                <input type="text" name="user_tax_Id" id="user-address-village" maxlength="13" value="{{ $member->user_tax_Id }}">
                {{ csrf_field() }}
                <input type="submit" name="save-pass" id="save-pass" value="บันทึกข้อมูล">
              </form>
            </div>
        </div>
    </div>
  </div>
@endsection
@section('script_footer')
  <script type="text/javascript">
    @if(!empty($messageShow))
      alert('{{ $messageShow }}');
      window.location = '{{ route('account_address') }}';
    @endif
  </script>
@endsection

