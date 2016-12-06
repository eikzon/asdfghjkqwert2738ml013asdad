@extends('layout.desktop')
@section('header')
  @include('common.desktop.header')
@endsection
@section('content')
  @include('common.desktop.account.header')
  <div class="container-cart">
    <div class="center">
      @include('common.desktop.cart.step', ['step' => 3])
      <div class="cart-complete-order">
        <h4>เราได้รับรายการสั่งซื้อของคุณแล้ว<br>ขอขอบคุณสำหรับการสั่งซื้อสินค้ากับเรา</h4>
        <div class="clear"></div>
        <div class="header-order">
          <h5>เลขที่ใบสั่งซื้อ : <span>BS-5911109</span></h5>
          <a href="#" class="continue-proceed">พิมพ์ใบสั่งซื้อ</a>
        </div>
        <div class="clear"></div>
        <div class="order-detail">
          <dl>
            <dt>วันที่สั่งซื้อ :</dt>
            <dd>08/11/2016 11:42</dd>
            <dt>การชำระเงิน :</dt>
            <dd>ชำระเงินโดยการโอนเงินเข้าบัญชีธนาคาร</dd>
            <dt>มือถือ :</dt>
            <dd>เบอร์มือถือ</dd>
          </dl>
        </div>
        <div class="order-address">
          <dl>
            <dt>ที่อยู่จัดส่ง</dt>
            <dd class="none">&nbsp;</dd>
            <dt>ชื่อผู้รับสินค้า :</dt>
            <dd>ชื่อ นามสกุล</dd>
            <dt>ที่อยู่ :</dt>
            <dd>99 ซ.อ่อนนุช 11 ถนนอ่อนนุช<br>สวนหลวง กรุงเทพ 10250</dd>
          </dl>
        </div>
        <div class="order-address">
          <dl>
            <dt>ที่อยู่ใบกำกับภาษี</dt>
            <dd class="none">&nbsp;</dd>
            <dt>ชื่อผู้รับสินค้า :</dt>
            <dd>ชื่อ นามสกุล</dd>
            <dt>ที่อยู่ :</dt>
            <dd>99 ซ.อ่อนนุช 11 ถนนอ่อนนุช<br>สวนหลวง กรุงเทพ 10250</dd>
          </dl>
        </div>
        <div class="clear"></div>
        <div class="table-summary">
          <table class="tabledata">
            <thead>
              <tr>
                <th width="180">สินค้า</th>
                <th width="440">รายละเอียด</th>
                <th width="160">ราคาต่อหน่วย (บาท)</th>
                <th width="160">จำนวน</th>
                <th width="160">ราคา (บาท)</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td data-title="สินค้า"><img src="products/images/BC-006_GN_4.jpg"></td>
                <td data-title="รายละเอียด"><p>Breaker King Knit<span>Item Code : BC006-GN<br>Size : 39<br>Color : Multicolor</span></p></td>
                <td data-title="ราคาต่อหน่วย (บาท)">1,550.00</td>
                <td data-title="จำนวน">1</td>
                <td data-title="ราคา (บาท)">1,550.00</td>
              </tr>
              <tr>
                <td data-title="สินค้า"><img src="products/images/BC-006_GN_4.jpg"></td>
                <td data-title="รายละเอียด"><p>Breaker King Knit<span>Item Code : BC006-GN<br>Size : 39<br>Color : Multicolor</span></p></td>
                <td data-title="ราคาต่อหน่วย (บาท)">1,550.00</td>
                <td data-title="จำนวน">1</td>
                <td data-title="ราคา (บาท)">1,550.00</td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <td colspan="2" rowspan="3" class="comment"><p>หมายเหตุ</p></td>
                <td>ราคาสินค้า</td>
                <td colspan="2">1,890 บาท</td>
              </tr>
              <tr>
                <td>ค่าจัดส่ง</td>
                <td colspan="2">ฟรี</td>
              </tr>
              <tr>
                <td>ราคารวม</td>
                <td colspan="2">1,890.00 บาท</td>
              </tr>
            </tfoot>
          </table>
        </div>
        <div class="clear"></div>
        <div class="order-process">
          <h5>รายละเอียดการดำเนินการ</h5>
          <div class="table-summary">
            <table class="tabledata">
              <thead>
                <tr>
                  <th width="220">วันที่ / เวลา</th>
                  <th width="220">สถานะ</th>
                  <th width="670">รายละเอียด</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td data-title="วันที่ / เวลา :">08/11/2016 11:42</td>
                  <td data-title="สถานะ :">ได้รับคำสั่งซื้อ</td>
                  <td data-title="รายละเอียด :">-</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
