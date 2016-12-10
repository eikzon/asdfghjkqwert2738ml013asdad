@extends('layout.desktop')
@section('header')
  @include('common.desktop.header')
@endsection
@section('content')
  @include('common.desktop.account.header')
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
                    <select name="user-province" id="user-province">
                        <option value="0">กรุณาเลือกจังหวัด</option>
                        <option value="1">กรุงเทพมหานคร</option>
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
                    <select name="user-district" id="user-district">
                        <option value="0">กรุณาเลือกอำเภอ/เขต</option>
                    </select>
                    <label for="user-subdistrict">ตำบล/แขวง<span>*</span></label>
                    <select name="user-subdistrict" id="user-subdistrict">
                        <option value="0">กรุณาเลือกตำบล/แขวง</option>
                    </select>
                    <label for="user-postcode">รหัสไปรษณีย์<span>*</span></label>
                    <input type="text" name="user-postcode" id="user-postcode">
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
