@extends('layout.platform.student')
@section('content')
  @if(!empty($variantOptions[1]))
    <div class="productshoes">
      <div class="wraper">
        <h2>{!! $platform->pt_g_1_title !!}</h2>
        <a class="showSingle2">
          <ul>
            <li><img src="{{ asset('images/platform/shoes_sb1.png') }}"/><br>รุ่น SB1</li>
            <li><img src="{{ asset('images/platform/shoes_sw1.png') }}"/><br>รุ่น SW1</li>
          </ul>
        </a>
        <div class="detailproducts3">
          <h2>{!! $platform->pt_g_1_description !!}</h2>
          <form method="post" action="{{ route('add_to_cart_more_variant') }}">
            <ul>
              @if(!empty($variantOptions[1]['size']))
                <li>ขนาด :
                  <select class="select-size js-platform-option" data-url="{{ route('platform_compare_variant') }}" data-line="1" name="size">
                    <option value="">กรุณาเลือกขนาด</option>
                    @foreach($variantOptions[1]['size'] as $size)
                      {{-- <option disabled="disabled">37 [Out of Stock]</option> --}}
                      <option value="{{ $size['id'] }}">{{ $size['name'] }}</option>
                    @endforeach
                  </select>
                </li>
              @endif
              @if(!empty($variantOptions[1]['color']))
                <li>สี :
                  <select class="select-size js-platform-option" data-url="{{ route('platform_compare_variant') }}" data-line="1" name="color">
                    <option value="">กรุณาเลือกสี</option>
                    @foreach($variantOptions[1]['color'] as $color)
                      <option value="{{ $color['id'] }}">{{ $color['name'] }}</option>
                    @endforeach
                  </select>
                </li>
              @endif
              <li>ราคา : <span class="js-price-display-1">0</span> บาท</li>

              <li>
                {{ csrf_field() }}
                <input type="text" name="quantity" id="quantity" value="1" size="1" maxlength="4" class="box-qty">
                @if(request()->session()->has('memberData'))
                  <input type="submit" id="addcart" value="สั่งซื้อสินค้า" title="สั่งซื้อสินค้า" class="btn-addcart">
                @else
                  <input type="button" class="btn-addcart" value="สั่งซื้อสินค้า" title="สั่งซื้อสินค้า" onclick="alert('กรุณาทำการสมัครสมาชิก และเข้าสู่ระบบเพื่อซื้อสินค้า');">
                @endif
                {{-- <a href="#" class="btn-wishlist">สินค้าที่น่าสนใจ</a> --}}
              </li>
            </ul>
            <input type="hidden" name="moreVariant" value="1">
          </form>
        </div><!-- .detailproducts -->
      </div><!-- .wraper -->
    </div><!-- .productshoes -->
  @endif
  @if(!empty($variantOptions[2]))
    <div class="productshoes">
      <div class="wraper">
        <h2>{!! $platform->pt_g_2_title !!}</h2>
        <a class="showSingle">
          <ul>
            <li><img src="{{ asset('images/platform/shoes_4x4_01.png') }}"/><br>รุ่น 4X4MBK</li>
            <li><img src="{{ asset('images/platform/shoes_4x4_02.png') }}"/><br>รุ่น 4X4MBR</li>
            <li><img src="{{ asset('images/platform/shoes_4x4_03.png') }}"/><br>รุ่น 4X4SHW</li>
          </ul>
        </a>
        <div class="detailproducts">
          <h2>{!! $platform->pt_g_2_description !!}</h2>
          <ul>
            @if(!empty($variantOptions[2]['size']))
              <li>ขนาด :
                <select class="select-size js-platform-option" data-url="{{ route('platform_compare_variant') }}" data-line="2" name="size">
                  <option value="">กรุณาเลือกสี</option>
                  @foreach($variantOptions[2]['size'] as $size)
                    <option value="{{ $size['id'] }}">{{ $size['name'] }}</option>
                  @endforeach
                </select>
              </li>
            @endif
            @if(!empty($variantOptions[2]['color']))
              <li>สี :
                <select class="select-size js-platform-option" data-url="{{ route('platform_compare_variant') }}" data-line="2" name="color">
                  <option value="">กรุณาเลือกสี</option>
                  @foreach($variantOptions[2]['color'] as $color)
                    <option value="{{ $color['id'] }}">{{ $color['name'] }}</option>
                  @endforeach
                </select>
              </li>
            @endif
            <li>ราคา : <span class="js-price-display-2">0</span> บาท</li>
            <li>
              <input type="text" name="quantity" id="quantity" value="1" size="1" maxlength="4" class="box-qty">
              <input type="submit" name="addcart" id="addcart" value="สั่งซื้อสินค้า" title="สั่งซื้อสินค้า" class="btn-addcart">
              {{-- <a href="#" class="btn-wishlist">สินค้าที่น่าสนใจ</a> --}}
            </li>
          </ul>
        </div><!-- .detailproducts -->
      </div><!-- .wraper -->
    </div><!-- .productshoes -->
  @endif
  @if(!empty($variantOptions[3]))
    <div class="productshoes">
      <div class="wraper">
        <h2>{!! $platform->pt_g_3_title !!}</h2>
        <a class="showSingle1">
          <ul>
            <li><img src="{{ asset('images/platform/shoes_bk4_01.png') }}"/><br>รุ่น BK4MBK</li>
            <li><img src="{{ asset('images/platform/shoes_bk4_02.png') }}"/><br>รุ่น BK4MBR</li>
            <li><img src="{{ asset('images/platform/shoes_bk4_03.png') }}"/><br>รุ่น BK4SHW</li>
          </ul>
        </a>
        <div class="detailproducts2">
          <h2>{!! $platform->pt_g_3_description !!}</h2>
          <ul>
            @if(!empty($variantOptions[3]['size']))
              <li>ขนาด :
                <select class="select-size js-platform-option" data-url="{{ route('platform_compare_variant') }}" data-line="3" name="size">
                  <option value="">กรุณาเลือกสี</option>
                  @foreach($variantOptions[3]['size'] as $size)
                    <option value="{{ $size['id'] }}">{{ $size['name'] }}</option>
                  @endforeach
                </select>
              </li>
            @endif
            @if(!empty($variantOptions[3]['color']))
              <li>สี :
                <select class="select-size js-platform-option" data-url="{{ route('platform_compare_variant') }}" data-line="3" name="color">
                  <option value="">กรุณาเลือกสี</option>
                  @foreach($variantOptions[3]['color'] as $color)
                    <option value="{{ $color['id'] }}">{{ $color['name'] }}</option>
                  @endforeach
                </select>
              </li>
            @endif
            <li>ราคา : <span class="js-price-display-3">0</span> บาท</li>
            <li>
              <input type="text" name="quantity" id="quantity" value="1" size="1" maxlength="4" class="box-qty">
              <input type="submit" name="addcart" id="addcart" value="สั่งซื้อสินค้า" title="สั่งซื้อสินค้า" class="btn-addcart">
              {{-- <a href="#" class="btn-wishlist">สินค้าที่น่าสนใจ</a> --}}
            </li>
          </ul>
        </div>
      </div>
    </div>
  @endif
@endsection
