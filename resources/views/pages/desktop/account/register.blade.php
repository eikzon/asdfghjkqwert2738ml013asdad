@extends('layout.desktop')
@section('header')
  @include('common.desktop.header')
@endsection
@section('title', 'สมัครสมาชิก')
@section('content')
  @include('common.desktop.account.header', [
    'title'  => 'My Account',
    'detail' => 'สมัครสมาชิก'
  ])
  <div class="container-regis">
    <div class="blog center">
      <div class="blog-inside">
        <h2>New Member</h2>
        <p>กรุณาใช้อีเมล์ที่มีอยู่จริงในการสมัครสมาชิก<br>email และ password นี้จะนำไปใช้ในการเข้าสู่ระบบของเว็บไซต์<br><br><span>*กรอกข้อมูล</span></p>
        @if(request()->getQueryString() == 'fail')
          <p><span>* ไม่สามารถบันทึกข้อมูลได้ กรุณากรอกใหม่อีกครั้ง</span></p>
        @elseif(request()->getQueryString() == 'passwordWrong')
          <p><span>* กรุณาตรวจสอบรหัสผ่านคุณ และต้องมากกว่า 5 ตัวอักษร</span></p>
        @elseif(request()->getQueryString() == 'wrong-email')
          <p><span>* ไม่สามารถใช้ Email นี้ในการสมัครซ้ำได้ค่ะ</span></p>
        @endif
        <form method="post" action="{{ route('account_store') }}" class="form-style regis">
          <div class="form-left">
              <label for="user-email">อีเมล์<span>*</span></label>
              <input type="email" name="email" id="user-email" required autofocus>
              <label for="user-password">รหัสผ่าน<span>*</span></label>
              <input type="password" name="password" minlength="6" maxlength="20" id="user-password">
              <label for="user-password-2">ยืนยันรหัสผ่าน<span>*</span></label>
              <input type="password" name="repassword" minlength="6" maxlength="20" id="user-password-2">
              <label for="user-name">ชื่อ<span>*</span></label>
              <input type="text" name="firstname" required id="user-name">
              <label for="user-lastname">นามสกุล<span>*</span></label>
              <input type="text" name="lastname" required id="user-lastname">
              <label for="user-birthday">วันเกิด<span>*</span></label>
              <input type="text" id="datepicker" readonly name="birthday" required id="user-birthday">
              <label for="user-gender">เพศ<span>*</span></label>
              <select name="gender" required id="user-gender">
                  <option value="">กรุณาเลือกเพศ</option>
                  <option value="0">ชาย</option>
                  <option value="1">หญิง</option>
              </select>
              <label for="user-mobile">มือถือ<span>*</span></label>
              <input type="tel" name="mobile" maxlength="10" required id="user-mobile">
          </div>
          <div class="form-right">
              <label for="user-address-no">ที่อยู่ (เลขที่, อาคาร/หมู่บ้าน, ซอย/ถนน)</label>
              <input type="text" name="address" id="user-address-no">
              <label for="user-province">จังหวัด</label>
              <select name="user-province" id="user-province" class="js-option-provinces" data-url="{{ route('option_province') }}" required>
                <option value="0">กรุณาเลือกจังหวัด</option>
                @foreach(getProvinces() as $province)
                  <option value="{{ $province->name_th }}">{{ $province->name_th }}</option>
                @endforeach
              </select>
              <label for="user-district">อำเภอ/เขต</label>
              <select name="user-district" class="js-option-amphure" id="user-district" data-url="{{ route('option_amphures') }}" id="receiver-district" required>
                <option value="0">กรุณาเลือกอำเภอ/เขต</option>
              </select>
              <label for="user-subdistrict">ตำบล/แขวง</label>
              <select name="user-subdistrict" data-url="{{ route('option_districts') }}" class="js-option-district" id="user-subdistrict" required>
                <option value="0">กรุณาเลือกตำบล/แขวง</option>
              </select>
              <label for="user-postcode">รหัสไปรษณีย์</label>
              <input type="text" name="user-postcode" maxlength="5" id="user-postcode" value="">
          </div>
          <div class="clear"></div>
          <div class="center accept-area">
            <label><input type="checkbox" name="subscribe" value="1" id="accept-regist">ต้องการรับข่าวสารและโปรโมชั่นต่างๆ จาก Breaker-shoes.com</label>
            <p>กด ลงทะเบียน เพื่อเป็นการสร้างบัญชีผู้ใช้งาน และยอมรับเงื่อนไขการใช้งาน และนโยบายข้อมูลความเป็นส่วนตัว</p>
            <input type="submit" name="btn-regis" id="btn-regis" value="ลงทะเบียน">
          </div>
          {{ csrf_field() }}
        </form>
      </div>
    </div>
  </div>
@endsection
@section('script_footer')
  <script type="text/javascript">
    $(function() {
      $( "#datepicker" ).datepicker({
        dateFormat: "yy-mm-dd",
        yearRange: "{{ date('Y', strtotime(date('Y') . ' -70 year')) . ' : ' . date('Y', strtotime(date('Y') . ' -3 year')) }}",
        changeMonth: true,
        changeYear: true,
        maxDate: '0',
        defaultDate: '{{ date('Y', strtotime(date('Y') . ' -3 year')) }}-01-01'
      });
    });
  </script>
@endsection
