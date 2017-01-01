@extends('layout.desktop')
@section('header')
  @include('common.desktop.header')
@endsection
@section('title', 'สินค้าที่น่าสนใจ')
@section('content')
  @include('common.desktop.account.header', [
    'title'  => 'My Account',
    'detail' => 'สินค้าที่น่าสนใจ'
  ])
  <div class="container-myaccount">
    @include('common.desktop.account.menu', ['page' => 'wishlist'])
    <div class="blog">
      <h2>สินค้าที่น่าสนใจ</h2>
      <div class="table-summary wishlist">
        <table class="tabledata">
          <thead>
            <tr>
              <th width="180">สินค้า</th>
              <th width="300">รายละเอียด</th>
              <th width="120">ราคาต่อหน่วย (บาท)</th>
              <th width="120">จำนวน</th>
              <th width="65">ลบ</th>
            </tr>
          </thead>
          <tbody>
            @if(!empty($wishlists))
              @foreach($wishlists as $wishlist)
                <form method="post" action="{{ route('add_to_cart') }}">
                  <tr>
                    <td data-title="สินค้า :">
                      @if(!$wishlist['images']->isEmpty())
                        <a href="{{ route('product_detail', $wishlist['products']['id']) }}" title="{{ $wishlist['products']['pd_name'] }}">
                          <img src="{{ asset('images/products/' . $wishlist['images'][0]->image) }}"
                               rel="image_src"
                               type="image/jpeg">
                        </a>
                      @endif
                    </td>
                    <td data-title="รายละเอียด :">
                      <a href="{{ route('product_detail', $wishlist['products']['id']) }}" target="_blank">
                        <p>
                          {{ $wishlist['products']['pd_name'] }}<span>Item Code : {{ $wishlist['products']['pd_code'] }}
                            @php
                              $resultVariants = \App\Model\ST_Variant::getVariant([$wishlist['products']['size_vr_id']]);
                              echo !empty($resultVariants) ? '<br>Size : ' . $resultVariants[0]['vr_text'] : NULL;
                            @endphp
                          </span>
                        </p>
                      </a>
                    </td>
                    <td data-title="ราคาต่อหน่วย (บาท) :">
                      {{ number_format($wishlist['products']['pd_price'], 2) }}
                    </td>
                    <td data-title="จำนวน :">
                      <input type="text" name="ct_quantity" id="quantity" value="1" size="1" maxlength="4" class="box-qty"><br>
                      <input type="hidden" name="fk_product_id" id="quantity" value="{{ $wishlist['products']['id'] }}" size="1" class="box-qty">
                      <input type="submit" name="addcart" id="addcart" value="add to cart" title="add to cart" class="btn-update" data-url="{{ route('add_to_cart') }}" data-pid="{{ $wishlist['products']['id'] }}">
                    </td>
                    <td data-title="ลบ :">
                      <a href="{{ route('account_wishlist_delete', [0, $wishlist['id']]) }}" class="btn-remove" title="ลบรายการสินค้านี้">
                        <i class="fa fa-close"></i>
                      </a>
                    </td>
                  </tr>
                  {{ csrf_field() }}
                </form>
              @endforeach
            @endif
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
