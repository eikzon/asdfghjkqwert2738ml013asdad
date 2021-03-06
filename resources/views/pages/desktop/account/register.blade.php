@extends('layout.desktop')
@section('header')
  @include('common.desktop.header')
@endsection
@section('content')
  @include('common.desktop.account.header', [
    'title'  => 'My Account',
    'detail' => 'บัญชีของฉัน'
  ])
  <div class="container-regis">
    <div class="blog center">
        <div class="blog-inside">
            <h2>New Member</h2>
            <p>กรุณาใช้อีเมล์ที่มีอยู่จริงในการสมัครสมาชิก<br>email และ password นี้จะนำไปใช้ในการเข้าสู่ระบบของเว็บไซต์<br><br><span>*กรอกข้อมูล</p>
            <form method="post" action="login.php" class="form-style regis">
                <div class="form-left">
                    <label for="user-email">อีเมล์<span>*</span></label>
                    <input type="email" name="user-email" id="user-email" autofocus>
                    <label for="user-password">รหัสผ่าน<span>*</span></label>
                    <input type="password" name="user-password" id="user-password">
                    <label for="user-password-2">ยืนยันรหัสผ่าน<span>*</span></label>
                    <input type="password" name="user-password-2" id="user-password-2">
                    <label for="user-name">ชื่อ<span>*</span></label>
                    <input type="text" name="user-name" id="user-name">
                    <label for="user-lastname">นามสกุล<span>*</span></label>
                    <input type="text" name="user-lastname" id="user-lastname">
                    <label for="user-birthday">วันเกิด<span>*</span></label>
                    <input type="date" name="user-birthday" id="user-birthday">
                    <label for="user-gender">เพศ<span>*</span></label>
                    <select name="user-gender" id="user-gender">
                        <option value="0">กรุณาเลือกเพศ</option>
                        <option>ชาย</option>
                        <option>หญิง</option>
                    </select>
                    <label for="user-mobile">มือถือ<span>*</span></label>
                    <input type="tel" name="user-mobile" id="user-mobile">
                </div>
                <div class="form-right">
                    <label for="user-address-no">ที่อยู่ เลขที่<span>*</span></label>
                    <input type="text" name="user-address-no" id="user-address-no">
                    <label for="user-address-village">อาคาร / หมู่บ้าน</label>
                    <input type="text" name="user-address-village" id="user-address-village">
                    <label for="user-address-road">ซอย / ถนน</label>
                    <input type="text" name="user-address-road" id="user-address-road">
                    <label for="user-province">จังหวัด<span>*</span></label>
                    <select name="user-province" id="user-province" class="js-option-provinces" data-url="{{ route('option_province') }}" required>
                      <option value="0">กรุณาเลือกจังหวัด</option>
                      @foreach(getProvinces() as $province)
                        <option value="{{ $province->name_th }}">{{ $province->name_th }}</option>
                      @endforeach
                    </select>
                    <label for="user-district">อำเภอ/เขต<span>*</span></label>
                    <select name="user-district" class="js-option-amphure" id="user-district" data-url="{{ route('option_amphures') }}" id="receiver-district" required>
                      <option value="0">กรุณาเลือกอำเภอ/เขต</option>
                    </select>
                    <label for="user-subdistrict">ตำบล/แขวง<span>*</span></label>
                    <select name="user-subdistrict" data-url="{{ route('option_districts') }}" class="js-option-district" id="user-subdistrict" required>
                      <option value="0">กรุณาเลือกตำบล/แขวง</option>
                    </select>
                    <label for="user-postcode">รหัสไปรษณีย์<span>*</span></label>
                    <input type="text" name="user-postcode" class="js-zipcode" maxlength="5" id="user-postcode" value="">
                </div>
                <div class="clear"></div>
                <div class="center accept-area">
                    <label><input type="checkbox" name="accept-regis" id="accept-regist">ต้องการรับข่าวสารและโปรโมชั่นต่างๆ จาก Breaker-shoes.com</label>
                    <p>กด ลงทะเบียน เพื่อเป็นการสร้างบัญชีผู้ใช้งาน และยอมรับเงื่อนไขการใช้งาน และนโยบายข้อมูลความเป็นส่วนตัว</p>
                    <input type="submit" name="btn-regis" id="btn-regis" value="ลงทะเบียน">
                </div>
            </form>
        </div>
    </div>
  </div>
@endsection
