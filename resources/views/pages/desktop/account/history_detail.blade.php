@extends('layout.desktop')
@section('header')
  @include('common.desktop.header')
@endsection
@section('title', 'รายละเอียดการสั่งซื้อ')
@section('content')
  @include('common.desktop.account.header', [
    'title'  => 'My Account',
    'detail' => 'รายละเอียดการสั่งซื้อ'
  ])
  <div class="container-cart">
    @include('common.desktop.account.history_detail',[
      'order' => $order
    ])
  </div>
@endsection
