@extends('layout.desktop')
@section('header')
  @include('common.desktop.header')
@endsection
@section('content')
  @include('common.desktop.account.header', [
    'title'  => 'BREAKER',
    'detail' => 'รายการสินค้า'
  ])
  @if(!empty($productLists))
    <ul class="container-products">
      @foreach($productLists as $product)
        @include('common.desktop.product.list', ['product' => $product])
      @endforeach
    </ul>
  @endif
@endsection
