@extends('layout.desktop')
@section('header')
  @include('common.desktop.header')
@endsection
@section('content')
  @include('common.desktop.account.header', [
    'title'  => 'My Account',
    'detail' => 'บัญชีของฉัน'
  ])
  <div class="container-cart">
    @include('common.desktop.account.history_detail',[
      'order' => $order
    ])
  </div>
@endsection
