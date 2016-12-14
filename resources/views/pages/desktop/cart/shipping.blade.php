@extends('layout.desktop')
@section('header')
  @include('common.desktop.header')
@endsection
@section('content')
  @include('common.desktop.account.header')
  <div class="container-cart">
    <div class="center">
      @include('common.desktop.cart.step', ['step' => 2])
      <div class="cart-shipping-payment">
        <form action="{{ route('cart_payment') }}" method="post">
          <div class="blog-inside">
              <h2>1. ที่อยู่จัดส่ง</h2>
              <label for="receiver-name">ชื่อของผู้รับ<span>*</span></label>
              <input type="text" name="receiver-name" id="receiver-name">
              <label for="receiver-lastname">นามสกุลของผู้รับ<span>*</span></label>
              <input type="text" name="receiver-lastname" id="receiver-lastname">
              <label for="receiver-mobile">มือถือ<span>*</span></label>
              <input type="text" name="receiver-mobile" id="receiver-mobile">
              <label for="receiver-address">ที่อยู่ (เลขที่, อาคาร/หมู่บ้าน, ซอย/ถนน)<span>*</span></label>
              <input type="text" name="receiver-address" id="receiver-address">
              <label for="receiver-province">จังหวัด<span>*</span></label>
              <select name="receiver-province" id="receiver-province">
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
              <label for="receiver-district">อำเภอ/เขต<span>*</span></label>
              <select name="receiver-district" id="receiver-district">
                  <option value="0">กรุณาเลือกอำเภอ/เขต</option>
              </select>
              <label for="receiver-subdistrict">ตำบล/แขวง<span>*</span></label>
              <select name="receiver-subdistrict" id="receiver-subdistrict">
                  <option value="0">กรุณาเลือกตำบล/แขวง</option>
              </select>
              <label for="receiver-postcode">รหัสไปรษณีย์<span>*</span></label>
              <input type="text" name="receiver-postcode" id="receiver-postcode">
              <h3>ที่อยู่ใบกำกับภาษี</h3>
              <label><input type="checkbox" name="same-address" id="same-address">ใช้ที่อยู่เดียวกับที่อยู่จัดส่ง</label>
              <label for="tax-address">ชื่อและที่อยู่ใบกำกับภาษี<span>*</span></label>
              <textarea name="tax-address" id="tax-address"></textarea>
              <textarea name="tax-address-more" id="tax-address-more"></textarea>
              <label for="tax-id">เลขประจำตัวบัตรประชาชน / Tax Id</label>
              <input type="text" name="tax-id" id="tax-id">
          </div>
          <div class="blog-inside">
              <h2>2. การชำระเงิน</h2>
              <ul>
                  <li><label for="paymentselect-paypal"><input type="radio" name="paymentselect" id="paymentselect-paypal" checked="checked"><img src="{{ asset('images/ic-paypal.png') }}"><div class="radio-txt1">ชำระเงินผ่าน PayPal</div></label></li>
                  {{-- <li><label for="paymentselect-creditcard"><input type="radio" name="paymentselect" id="paymentselect-creditcard"><img src="{{ asset('images/ic-visa.png') }}"><img src="{{ asset('images/ic-master.png') }}"><div class="radio-txt2">ชำระเงินผ่าน บัตรเครดิต<br>หรือบัตรเดบิต</div></label></li> --}}
                  {{-- <li><label for="paymentselect-paysbuy"><input type="radio" name="paymentselect" id="paymentselect-paysbuy"><img src="{{ asset('images/ic-paysbuy.png') }}"><div class="radio-txt1">ชำระเงินผ่าน PaysBuy</div></label></li>
                  <li><label for="paymentselect-banktransfer"><input type="radio" name="paymentselect" id="paymentselect-banktransfer"><img src="{{ asset('images/ic-banktransfer.png') }}"><div class="radio-txt2">ชำระเงินโดยการโอนเงินเข้าบัญชีธนาคาร<br>(เอทีเอ็ม / เคาน์เตอร์ธนาคาร)</div></label></li> --}}
              </ul>
          </div>
          <div class="blog-inside">
              <h2>3. สรุปการสั่งซื้อ</h2>
              <ul class="summary-list">
                 <li><a href="#"><div class="product-img"><img src="products/images/BC-006_GN_4.jpg"></div>
                    <div class="product-desc">
                      <div class="product-name">Breaker King Knit<br>BC006-GN / 39 / Multicolor<br>จำนวน: 1<span class="product-price">1,550 บาท</span></div>
                    </div>
                 </a></li>
                 <li><a href="#"><div class="product-img"><img src="products/images/BC-006_GN_4.jpg"></div>
                    <div class="product-desc">
                      <div class="product-name">Breaker King Knit<br>BC006-GN / 39 / Multicolor<br>จำนวน: 1<span class="product-price">1,550 บาท</span></div>
                    </div>
                 </a></li>
                 <li>
                  <div class="shopping-txt">ค่าจัดส่ง<br>ราคารวม</div>
                  <div class="shopping-price">0.00 บาท<br>1,879 บาท</div>
                 </li>
                 <li>
                  <label for="order-remark">หมายเหตุ</label>
                  <textarea name="order-remark" id="order-remark"></textarea>
                 </li>
               </ul>
               <button type="submit" class="btn continue-proceed">ดำเนินการชำระเงิน</button>
          </div>
          {{ csrf_field() }}
        </form>
      </div>
    </div>
  </div>
@endsection
