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
      @include('common.desktop.cart.step', ['step' => 3])
      <div class="cart-complete-order">
        <h4>รายการสั่งซื้อนี้ไม่สมบูรณ์ กรุณาสั่งซื้ออีกครั้ง หรือติดต่อเจ้าหน้าที่<br>ขอขอบคุณสำหรับการสั่งซื้อสินค้ากับเรา</h4>
      </div>
    </div>
  </div>
@endsection
