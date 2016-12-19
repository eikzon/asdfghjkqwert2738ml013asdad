@extends('layout.desktop')
@section('header')
  @include('common.desktop.header')
@endsection
@section('title', 'การสั่งซื้อสมบูรณ์')
@section('content')
  @include('common.desktop.account.header', [
    'title'  => 'Shopping Cart',
    'detail' => 'ตะกร้าสินค้า'
  ])
  <div class="container-cart">
    <div class="center">
      @include('common.desktop.cart.step', ['step' => 3])
      <div class="cart-complete-order">
        <h4>เราได้รับรายการสั่งซื้อของคุณแล้ว<br>ขอขอบคุณสำหรับการสั่งซื้อสินค้ากับเรา</h4>
        <p>
          <strong>บริษัท  เอส.ซี.เอส. ฟุตแวร์  จำกัด</strong><br>
          ธนาคารกรุงเทพ สาขาหัวหมาก กระแสรายวัน 180-3-06035-7<br>
          หมายเลขโทรศํพท์สำหรับเเจ้งโอนเงินผ่านธนาคาร : 0846342615
        </p>
      </div>
    </div>
    @include('common.desktop.account.history_detail',[
      'order' => $order
    ])
  </div>
@endsection
