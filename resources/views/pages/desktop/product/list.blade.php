@extends('layout.desktop')
@section('header')
  @include('common.desktop.header')
@endsection
@section('content')
  @include('common.desktop.account.header')
  @if(!empty($productLists))
    <ul class="container-products">
      @foreach($productLists as $product)
        <li>
          <div class="{{ config('website.product.badges')[$product['pd_badge']] }}"></div>
          <div class="frame">
            @if(!empty($product['images'][0]['image']))
              <a href="{{ route('product_detail', $product['id']) }}" title="{{ $product['pd_name'] }}">
                <img src="{{ asset('images/products/' . $product['images'][0]['image']) }}"/>
              </a>
            @endif
          </div>
          <div class="line"></div>
          <a href="{{ route('product_detail', $product['id']) }}"
             class="name"
             title="{{ $product['pd_name'] }}">
            {{ $product['pd_name'] }}
          </a><br>
          <span class="price">
            {{ number_format($product['pd_price'], 2) }} Baht
          </span><br>
          <span class="desc">
            @if(!empty($product['sku']['pg_name']))
              {{ $product['sku']['pg_name'] }} |
            @endif
            @if(!empty($product['pd_stock']) && $product['pd_status'] == 1)
              In Stock
            @else
              Out of Stock
            @endif
          </span>
        </li>
      @endforeach
    </ul>
  @endif
@endsection
