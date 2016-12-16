@extends('layout.desktop')
@section('header')
  @include('common.desktop.header')
@endsection
@section('content')
  @include('common.desktop.account.header', [
    'title'  => 'Shopping Cart',
    'detail' => 'ตะกร้าสินค้า'
  ])
  <div class="container-cart">
    <div class="center">
      @include('common.desktop.cart.step', ['step' => 2])
      <form action="{{ route('cart_checkout') }}" id="js-checkout" method="POST">
        <div class="cart-shipping-payment">
          <div class="blog-inside">
            <h2>1. ที่อยู่จัดส่ง</h2>
            <label for="receiver-name">ชื่อของผู้รับ<span>*</span></label>
            <input type="text" name="oa_first_name" class="js-first-name" id="receiver-name" required>
            <label for="receiver-lastname">นามสกุลของผู้รับ<span>*</span></label>
            <input type="text" name="oa_last_name" id="receiver-lastname" required>
            <label for="receiver-mobile">มือถือ<span>*</span></label>
            <input type="text" name="oa_tel" id="receiver-mobile" required>
            <label for="receiver-address">ที่อยู่ (เลขที่, อาคาร/หมู่บ้าน, ซอย/ถนน)<span>*</span></label>
            <input type="text" name="oa_address" id="receiver-address" required>
            <label for="receiver-province">จังหวัด<span>*</span></label>
            <select name="oa_province" id="receiver-province" required>
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
            <select name="oa_district" id="receiver-district" required>
              <option value="0">กรุณาเลือกอำเภอ/เขต</option>
              <option value="1">พญาไท</option>
            </select>
            <label for="receiver-subdistrict">ตำบล/แขวง<span>*</span></label>
            <select name="oa_sub_district" id="receiver-subdistrict" required>
              <option value="0">กรุณาเลือกตำบล/แขวง</option>
              <option value="1">ดินแดง</option>
            </select>
            <label for="receiver-postcode">รหัสไปรษณีย์<span>*</span></label>
            <input type="text" name="oa_postcode" id="receiver-postcode" required>
            <h3>ที่อยู่ใบกำกับภาษี</h3>
            <label><input type="checkbox" name="oa_isbilling_address" id="same-address" value="1">ใช้ที่อยู่เดียวกับที่อยู่จัดส่ง</label>
            <div class="js-show-billing">
              <label for="tax-address">ชื่อและที่อยู่ใบกำกับภาษี<span>*</span></label>
              <textarea name="oa_billign_address" id="tax-address"></textarea>
            </div>
            <label for="tax-id">เลขประจำตัวบัตรประชาชน / Tax Id</label>
            <input type="text" name="oa_tax_id" id="tax-id">
          </div>
          <div class="blog-inside">
            <h2>2. การชำระเงิน</h2>
            <ul>
                <li><label for="paymentselect-paypal"><input type="radio" name="paymentselect" id="paymentselect-paypal" type="1" checked="checked"><img src="{{ asset('images/ic-paypal.png') }}"><div class="radio-txt1">ชำระเงินผ่าน PayPal หรือบัตรเครดิต</div></label></li>
                {{-- <li><label for="paymentselect-creditcard"><input type="radio" name="paymentselect" id="paymentselect-creditcard"><img src="{{ asset('images/ic-visa.png') }}"><img src="{{ asset('images/ic-master.png') }}"><div class="radio-txt2">ชำระเงินผ่าน บัตรเครดิต<br>หรือบัตรเดบิต</div></label></li>
                <li><label for="paymentselect-paysbuy"><input type="radio" name="paymentselect" id="paymentselect-paysbuy"><img src="{{ asset('images/ic-paysbuy.png') }}"><div class="radio-txt1">ชำระเงินผ่าน PaysBuy</div></label></li>--}}
                <li><label for="paymentselect-banktransfer"><input type="radio" name="paymentselect" id="paymentselect-banktransfer" type="3"><img src="{{ asset('images/ic-banktransfer.png') }}"><div class="radio-txt2">ชำระเงินโดยการโอนเงินเข้าบัญชีธนาคาร<br>(เอทีเอ็ม / เคาน์เตอร์ธนาคาร)</div></label></li>
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
