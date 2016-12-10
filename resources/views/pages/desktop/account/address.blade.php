@extends('layout.desktop')
@section('header')
  @include('common.desktop.header')
@endsection
@section('content')
  @include('common.desktop.account.header')
    <div class="container-myaccount">
      @include('common.desktop.account.menu')
      <div class="blog">
          <h2>ข้อมูลสถานที่จัดส่ง</h2>
          <form method="post" action="" class="form-style">
          <div class="blog-inside inside-left">
              <h3>ที่อยู่ปัจจุบัน</h3>
              <div class="form-style-2">
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
                  <input type="submit" name="save-pass" id="save-pass" value="บันทึกข้อมูล">
              </div>
          </div>
          <div class="blog-inside">
              <h3>ที่อยู่จัดส่งสินค้า</h3>
              <div class="form-style-2">
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
                  <input type="submit" name="save-pass" id="save-pass" value="บันทึกข้อมูล">
              </div>
          </div>
          </form>
      </div>
  </div>
@endsection
