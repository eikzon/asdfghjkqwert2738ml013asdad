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
      @include('common.desktop.cart.step', ['step' => 1])
      @if(count($carts) == 0)
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
                @foreach($carts as $cart)
                  @php
                    $productPrice    = $cart['products']->pd_price;
                    $productDiscount = $cart['products']->pd_price_discount;

                    $pricePerUnit = !empty($productDiscount) ? $productDiscount : $productPrice;
                    $totalPrice   = $pricePerUnit * $cart->ct_quantity;
                    @$subTotal   += $totalPrice;

                    $shippingPrice = ($subTotal < 499) ? 50 : 0;

                    $grandTotal = $subTotal + $shippingPrice;

                    $image = '';
                    if(!empty($imageProduct))
                    {
                      $collectImage = collect($imageProduct)->where('fk_pd_id', $cart->fk_product_id)->first();
                      $image        = $collectImage->image;
                    }

                    $variant = '';
                    if(!empty($productVariant))
                    {
                      $collectVariant = collect($productVariant)->where('fk_pd_id', $cart->fk_product_id)->first();
                    }
                  @endphp
                  <tr>
                    <td data-title="สินค้า"><a href="{{ route('product_detail', $cart['products']->id) }}"><img src="{{ asset('images/products/' . $image) }}"></a></td>
                    <td data-title="รายละเอียด">
                      <a href="{{ route('product_detail', $cart['products']->id) }}">
                        <p>{{ $cart['products']->pd_name }}
                          <span>
                            Item Code : {{ $cart['products']->pd_code }}<br>
                            {{ getVariant($cart->products->id)->vr_text }}
                          </span>
                        </p>
                      </a>
                    </td>
                    <td data-title="ราคาต่อหน่วย (บาท)">{{ number_format((float)$pricePerUnit, 2) }}</td>
                    <form action="{{ route('update_cart') }}" method="POST">
                      <td data-title="จำนวน" class="group-quantity">
                        <input type="number" name="quantity" id="quantity" value="{{ $cart->ct_quantity }}" size="1" maxlength="4" class="box-qty js-quantity"><br>
                        <input type="hidden" name="id" value="{{ $cart->id }}">
                        <input type="hidden" name="fk_product_id" value="{{ $cart['products']->id }}">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="submit" name="update" id="update" value="Update" title="Update" class="btn-update" data-url="{{ route('update_cart') }}" data-cart-id="{{ $cart->id }}" data-product-id="{{ $cart['products']->id }}">
                      </td>
                    </form>
                    <td data-title="ราคา (บาท)">{{ number_format((float)$totalPrice, 2) }}</td>
                    <td data-title="ลบ"><a href="#" class="btn-remove js-delete-cart" title="ลบรายการสินค้านี้" data-url="{{ route('delete_cart', ['id' => $cart->id]) }}"><i class="fa fa-close"></i></a></td>
                  </tr>
                @endforeach
              </tbody>
              <tfoot>
                <tr>
                  <td colspan="3" rowspan="3" class="comment"><p>รายการสินค้าในตะกร้าของคุณ : {{ count($carts) }} รายการ</td>
                  <td>ราคาสินค้า (บาท)</td>
                  <td colspan="2">{{ !empty($subTotal) ? number_format((float)$subTotal, 2) : '0.00' }}</td>
                </tr>
                <tr>
                  <td>ค่าจัดส่ง</td>
                  <td colspan="2">{{ !empty($shippingPrice) ? number_format((float)$shippingPrice, 2) : '0.00' }}</td>
                </tr>
                <tr>
                  <td>ราคารวม (บาท)</td>
                  <td colspan="2">{{ !empty($grandTotal) ? number_format((float)$grandTotal, 2) : '0.00' }}</td>
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
