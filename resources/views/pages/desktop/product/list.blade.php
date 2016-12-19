@extends('layout.desktop')
@section('header')
  @include('common.desktop.header')
@endsection
@section('title', @$category->ct_name)
@section('content')
  @include('common.desktop.account.header', [
    'title'  => @$category->ct_name,
    'detail' => @$category->ct_description
  ])

  <ul class="container-products">
    @if(!$productLists->isEmpty())
      @foreach($productLists as $product)
        @include('common.desktop.product.list', ['product' => $product])
      @endforeach
    @else
      <li style="width: 100%; font-family: "SukhumvitSet", Helvetica, Arial, sans-serif; text-align: center; padding-top: 100px; font-size: 20px; font-weight: bold;">
        ไม่มีรายการสินค้านี้
      </li>
    @endif
  </ul>
@endsection
