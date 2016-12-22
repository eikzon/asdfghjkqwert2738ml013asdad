@extends('layout.platform.student')
@section('content')
  @if(!empty($variantOptions))
    @foreach($variantOptions as $index => $variantOption)
      @if(!empty($variantOption))
        <div class="productshoes" {{ ($index == 1) ? 'id="products"' : NULL }}>
          <div class="wraper">
            @php
              $title       = 'pt_g_' . $index . '_title';
              $description = 'pt_g_' . $index . '_description';
            @endphp
            <h2>{!! $platform->$title !!}</h2>
            <a class="showSingle{{ $index }}">
              <ul>
                @if($platform->{'pt_image_' . $index . '_1'})
                  <li>
                    <img src="{{ asset('images/platform/items/' . $platform->{'pt_image_' . $index . '_1'}) }}"/>
                    <br>{{ $platform->{'head_' . $index . '_1'} }}
                  </li>
                @endif
                @if($platform->{'pt_image_' . $index . '_2'})
                  <li>
                    <img src="{{ asset('images/platform/items/' . $platform->{'pt_image_' . $index . '_2'}) }}"/>
                    <br>{{ $platform->{'head_' . $index . '_2'} }}
                  </li>
                @endif
                @if($platform->{'pt_image_' . $index . '_3'})
                  <li>
                    <img src="{{ asset('images/platform/items/' . $platform->{'pt_image_' . $index . '_3'}) }}"/>
                    <br>{{ $platform->{'head_' . $index . '_3'} }}
                  </li>
                @endif
              </ul>
            </a>
            <div class="detailproducts{{ $index }}">
              <h2>{!! $platform->$description !!}</h2>
              <form method="post" action="{{ route('add_to_cart_more_variant') }}">
                <ul>
                  @if(!empty($variantOption['size']))
                    <li>ขนาด :
                      <select class="select-size js-platform-option" data-url="{{ route('platform_compare_variant') }}" data-line="{{ $index }}" name="size">
                        <option value="">กรุณาเลือกขนาด</option>
                        @foreach($variantOption['size'] as $size)
                          <option value="{{ $size['id'] }}">{{ $size['name'] }}</option>
                        @endforeach
                      </select>
                    </li>
                  @endif
                  @if(!empty($variantOption['color']))
                    <li>สี :
                      <select class="select-size js-platform-option" data-url="{{ route('platform_compare_variant') }}" data-line="{{ $index }}" name="color">
                        <option value="">กรุณาเลือกสี</option>
                        @foreach($variantOption['color'] as $color)
                          <option value="{{ $color['id'] }}">{{ $color['name'] }}</option>
                        @endforeach
                      </select>
                    </li>
                  @endif
                  <li>ราคา : <span class="js-price-display-{{ $index }}">0</span> บาท</li>
                  <li>
                    {{ csrf_field() }}
                    <input type="text" name="ct_quantity" data-line="{{ $index }}" id="quantity" value="1" size="1" maxlength="4" class="box-qty">
                    @if(request()->session()->has('memberData'))
                      <input type="hidden" class="input-pid-{{ $index }}" name="fk_product_id">
                      <input type="submit" data-line="{{ $index }}" id="addcart" disabled="disabled" value="สั่งซื้อสินค้า" title="สั่งซื้อสินค้า" class="btn-addcart">
                    @else
                      <input type="button" class="btn-addcart" value="สั่งซื้อสินค้า" title="สั่งซื้อสินค้า" onclick="alert('กรุณาทำการสมัครสมาชิก และเข้าสู่ระบบเพื่อซื้อสินค้า');">
                    @endif
                  </li>
                </ul>
              </form>
            </div>
          </div>
        </div>
      @endif
    @endforeach
  @endif
  {{ csrf_field() }}
  @if(session()->has('errorMsg'))
    {{ session()->forget('errorMsg') }}
    <script>
      alert('สินค้าไม่เพียงพอสำหรับความต้องการ');
    </script>
  @endif
@endsection
