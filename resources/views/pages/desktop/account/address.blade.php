@extends('layout.desktop')
@section('header')
  @include('common.desktop.header')
@endsection
@section('content')
  @include('common.desktop.account.header', [
    'title'  => 'My Account',
    'detail' => 'บัญชีของฉัน'
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
                <select name="shipping_province" id="user-province">
                    <option value="0">กรุณาเลือกจังหวัด</option>
                    <option value="1" {{ $member->shipping_province == 1 ? 'selected' : '' }}>กรุงเทพมหานคร</option>
                    <option value="3">กาญจนบุรี</option>
                    <option value="6">ขอนแก่น</option>
                    <option value="7">จันทบุรี</option>
                    <option value="8">ฉะเชิงเทรา</option>
                    <option value="9">ชลบุรี</option>
                    <option value="14">เชียงราย</option>
                    <option value="13">เชียงใหม่</option>
                    <option value="15">ตรัง</option>
                    <option value="17">ตาก</option>
                    <option value="19">นครปฐม</option>
                    <option value="22">นครศรีธรรมราช</option>
                    <option value="24">นนทบุรี</option>
                    <option value="27">บุรีรัมย์</option>
                    <option value="28">ปทุมธานี</option>
                    <option value="30">ปราจีนบุรี</option>
                    <option value="37">พิษณุโลก</option>
                    <option value="41">ภูเก็ต</option>
                    <option value="43">มุกดาหาร</option>
                    <option value="47">ร้อยเอ็ด</option>
                    <option value="49">ระยอง</option>
                    <option value="50">ราชบุรี</option>
                    <option value="52">ลำปาง</option>
                    <option value="56">สกลนคร</option>
                    <option value="57">สงขลา</option>
                    <option value="59">สมุทรปราการ</option>
                    <option value="60">สมุทรสงคราม</option>
                    <option value="61">สมุทรสาคร</option>
                    <option value="63">สระบุรี</option>
                    <option value="66">สุพรรณบุรี</option>
                    <option value="67">สุราษฎร์ธานี</option>
                    <option value="68">สุรินทร์</option>
                    <option value="73">อุดรธานี</option>
                    <option value="76">อุบลราชธานี</option>
                </select>
                <label for="user-district">อำเภอ/เขต<span>*</span></label>
                <select name="shipping_district" id="receiver-district" required>
                  <option value="0">กรุณาเลือกอำเภอ/เขต</option>
                  <option value="1" {{ $member->shipping_district == 1 ? 'selected' : '' }}>พญาไท</option>
                </select>
                <label for="user-subdistrict">ตำบล/แขวง<span>*</span></label>
                <select name="shipping_sub_district" id="receiver-subdistrict" required>
                  <option value="0">กรุณาเลือกตำบล/แขวง</option>
                  <option value="1" {{ $member->shipping_sub_district == 1 ? 'selected' : '' }}>ดินแดง</option>
                </select>
                <label for="user-postcode">รหัสไปรษณีย์<span>*</span></label>
                <input type="text" name="shipping_postcode" maxlength="5" id="user-postcode" value="{{ $member->shipping_postcode }}">
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
<script type="text/javascript">
  @if(!empty($messageShow))
    alert('{{ $messageShow }}');
    window.location = '{{ route('account_address') }}';
  @endif
</script>
