@if(!empty(getCart()->all()))
  @foreach(getCart() as $cart)
    @php
      $productPrice    = $cart->products->pd_price;
      $productDiscount = $cart->products->pd_price_discount;

      $pricePerUnit  = !empty($productDiscount) ? $productDiscount : $productPrice;
      $totalPrice    = $pricePerUnit * $cart->ct_quantity;
      @$subTotal    += $totalPrice;
      $shippingPrice = ($subTotal < 1000) ? 50 : 0;
      $grandTotal    = $subTotal + $shippingPrice;
    @endphp
    <li>
      <a href="{{ route('product_detail', $cart['products']->id) }}">
        <div class="product-img">
          <img src="{{ asset("images/products/" . @getImageCart($cart->products->id)->image) }}">
        </div>
        @if(!empty($cart->products))
          <div class="product-desc">
            <div class="product-name">{{ $cart->products->pd_name }}
              {{-- {{ !empty(getVariant($cart->products->id)->vr_text) ? getVariant($cart->products->id)->vr_text : '' }} --}}
              @php
                $resultVariants = \App\Model\ST_Variant::getVariant([$cart->products->size_vr_id]);
                echo !empty($resultVariants) ? '<br>Size : ' . $resultVariants[0]['vr_text'] : NULL;
              @endphp
              <br>จำนวน: {{ $cart->ct_quantity }} รายการ
              <span class="product-price">{{ number_format((float)$totalPrice, 2) }} บาท</span>
            </div>
          </div>
        @endif
      </a>
    </li>
  @endforeach
  <li>
    <div class="shopping-txt">ค่าจัดส่ง<br>ราคารวม</div>
    <div class="shopping-price">{{ !empty($shippingPrice) ? number_format((float)$shippingPrice, 2) : '0.00' }} บาท<br>{{ !empty($grandTotal) ? number_format((float)$grandTotal, 2) : '0.00' }} บาท</div>
  </li>
@else
  <li>
    <p align="center">ยังไม่มีสินค้าในตะกร้าช้อปปิ้งของคุณ</p>
  </li>
@endif
