@extends('layout.desktop')
@section('header')
  @include('common.desktop.header')
@endsection
@section('content')
  @include('common.desktop.account.header')
  <div class="container-cart">
    <div class="center">
      @include('common.desktop.cart.step', ['step' => 1])
      @if(empty($product))
        <div class="cart-empty">
            <p>ยังไม่มีสินค้าในตะกร้าช้อปปิ้งของคุณ</p>
            <a href="#" class="continue-shopping">เลือกซื้อสินค้าต่อ</a>
        </div>
      @else
        <div class="cart-summary">
          @include('common.desktop.cart.button')
          <div class="table-summary">
            <table class="tabledata">
              <thead>
                <tr>
                  <th width="180">สินค้า</th>
                  <th width="370">รายละเอียด</th>
                  <th width="160">ราคาต่อหน่วย (บาท)</th>
                  <th width="160">จำนวน</th>
                  <th width="160">ราคา (บาท)</th>
                  <th width="80">ลบ</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td data-title="สินค้า"><a href="#"><img src="products/images/BC-006_GN_4.jpg"></a></td>
                  <td data-title="รายละเอียด"><a href="#"><p>Breaker King Knit<span>Item Code : BC006-GN<br>Size : 39<br>Color : Multicolor</span></p></a></td>
                  <td data-title="ราคาต่อหน่วย (บาท)">1,550.00</td>
                  <td data-title="จำนวน"><input type="text" name="quantity" id="quantity" value="1" size="1" maxlength="4" class="box-qty"><br><input type="submit" name="update" id="update" value="Update" title="Update" class="btn-update"></td>
                  <td data-title="ราคา (บาท)">1,550.00</td>
                  <td data-title="ลบ"><a href="#" class="btn-remove" title="ลบรายการสินค้านี้"><i class="fa fa-close"></i></a></td>
                </tr>
                <tr>
                  <td data-title="สินค้า"><a href="#"><img src="products/images/BC-006_GN_4.jpg"></a></td>
                  <td data-title="รายละเอียด"><a href="#"><p>Breaker King Knit<span>Item Code : BC006-GN<br>Size : 39<br>Color : Multicolor</span></p></a></td>
                  <td data-title="ราคาต่อหน่วย (บาท)">1,550.00</td>
                  <td data-title="จำนวน"><input type="text" name="quantity" id="quantity" value="1" size="1" maxlength="4" class="box-qty"><br><input type="submit" name="update" id="update" value="Update" title="Update" class="btn-update"></td>
                  <td data-title="ราคา (บาท)">1,550.00</td>
                  <td data-title="ลบ"><a href="#" class="btn-remove" title="ลบรายการสินค้านี้"><i class="fa fa-close"></i></a></td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <td colspan="3" rowspan="3" class="comment"><p>รายการสินค้าในตะกร้าของคุณ : 2 รายการ</td>
                  <td>ราคาสินค้า (บาท)</td>
                  <td colspan="2">1,890</td>
                </tr>
                <tr>
                  <td>ค่าจัดส่ง</td>
                  <td colspan="2">0.00</td>
                </tr>
                <tr>
                  <td>ราคารวม (บาท)</td>
                  <td colspan="2">1,890.00</td>
                </tr>
              </tfoot>
            </table>
          </div>
          @include('common.desktop.cart.button')
        </div>
      @endif
    </div>
  </div>
@endsection
