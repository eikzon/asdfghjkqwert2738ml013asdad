@extends('layout.desktop')
@section('header')
  @include('common.desktop.header')
@endsection
@section('title', @$product['pd_name'])
@section('content')
  @include('common.desktop.account.header', [
    'title'  => $product['category']['ct_name'],
    'detail' => $product['category']['ct_description']
  ])
  <div class="detailproducts">
    <div class="topdesc">
      <div class="pic">
        <div id="galleria">
          @if(!empty($product['images']))
            @foreach($product['images'] as $image)
              <a href="{{ asset('images/products/' . $image['image']) }}" title="{{ $product['pd_name'] }}">
                <img src="{{ asset('images/products/' . $image['image']) }}"
                     rel="image_src"
                     type="image/jpeg">
              </a>
            @endforeach
          @endif
        </div>
      </div>
      <div class="desc">
        <div class="wrap">
        <form method="post" action="{{ route('add_to_cart') }}">
          <div class="name">{{ $product['pd_name'] }}</div>
          <div class="price">
            @if(!empty($product['pd_price_discount']))
              <span class="pricedead">{{ number_format($product['pd_price']) }} Baht</span>
              {{ number_format($product['pd_price_discount']) }} Baht
            @else
              {{ number_format($product['pd_price']) }} Baht
            @endif
          </div>
          @if(!empty($product['pd_code']))
            <div class="shortdesc">
              Item Code : {{ $product['pd_code'] }}
            </div>
          @endif
          @php
            $groupVariants = \App\Model\ST_Product::groupVariant($product['fk_group_id'], $product['fk_category_id']);
          @endphp
          @if(!empty($groupVariants))
            <div class="shortdesc">
              @if(count($groupVariants) > 1)
                Size :
                <select class="select-size js-variant-change-option" data-url="{{ url('/') }}">
                  @foreach($groupVariants as $variant)
                    @if(!empty($variant['variant']))
                      <option @if($variant['status'] == 2 || empty($variant['stock']))
                                disabled="disabled"
                              @endif
                              @if($variant['id'] == $product['id'])
                                selected
                              @endif
                              data-pid="{{ $variant['id'] }}"
                              value="{{ $variant['id'] }}">
                        {{ $variant['variant'][0]['vr_text'] }}
                        @if($variant['status'] == 2 || empty($variant['stock']))
                          [Out of Stock]
                        @endif
                      </option>
                    @endif
                  @endforeach
                </select>
              @else
                @php
                  $resultVariants = \App\Model\ST_Variant::getVariant([$product['size_vr_id']]);
                @endphp
                @if(!empty($resultVariants))
                  @foreach($resultVariants as $value)
                    @if($value['vr_type'] == 1)
                      {{-- @php $displayVariants[] = 'Color : ' . $value['vr_text']; @endphp
                    @else --}}
                      @php $displayVariants[] = 'Size : ' . $value['vr_text']; @endphp
                    @endif
                  @endforeach
                  {{ implode(' | ', $displayVariants) }}
                @endif
              @endif
            </div>
          @endif
          <div class="stock">
            {{-- @if(!empty($product['sku']['pg_name'])) {{ $product['sku']['pg_name'] }} | @endif --}}
            Men's {{ title_case($product['category']['ct_name']) }} Boots | <span>
            @if(!empty($product['pd_stock']) && $product['pd_status'] == 1)
              In Stock
            @else
              Out of Stock
            @endif
          </div>
          @if(!empty($errorMsg))
            {{ d($errorMsg) }}
          @endif
          @if(!empty($product['pd_short_desc']))
            <div class="shortdesc">
              {!! $product['pd_short_desc'] !!}
            </div>
          @endif
          @if(request()->session()->has('memberData') || (!empty($product['pd_stock']) && $product['pd_status'] == 1))
            <div class="shortdesc">
              @if(!empty($product['pd_stock']) && $product['pd_status'] == 1)
                <input type="text" name="ct_quantity" id="quantity" value="1" size="1" class="box-qty">
                <input type="hidden" name="fk_product_id" id="quantity" value="{{ $product['id'] }}" size="1" class="box-qty">
                {{ csrf_field() }}
                @if(request()->session()->has('memberData'))
                  <input type="submit" name="addcart" id="addcart" value="สั่งซื้อสินค้า" title="สั่งซื้อสินค้า" class="btn-addcart" data-url="{{ route('add_to_cart') }}" data-pid="{{ $product['id'] }}">
                  <a
                    @if(!empty($product['wishlist']))
                      href="{{ route('account_wishlist_delete', [$product['id'], $product['wishlist']->id]) }}"
                    @else
                      href="{{ route('account_wishlist_add', $product['id']) }}"
                    @endif
                    class="btn-wishlist @if(!empty($product['wishlist'])) active @endif">
                    สินค้าที่น่าสนใจ
                  </a>
                @else
                  <input type="button" class="btn-addcart" value="สั่งซื้อสินค้า" title="สั่งซื้อสินค้า" onclick="alert('กรุณาทำการสมัครสมาชิก และเข้าสู่ระบบเพื่อซื้อสินค้า');">
                @endif
              @endif
            </div>
          @endif
          <div class="social">
            <span class='st_facebook_vcount' displayText='Facebook'></span>
            <span class='st_twitter_vcount' displayText='Tweet'></span>
            <span class='st_googleplus_vcount' displayText='Google +'></span>
          </div>
        </form></div><!-- .wrap -->
      </div><!-- .desc -->
    </div><!-- .topdesc -->
    @if(!empty($product['pd_long_desc']))
      <div class="infomation">
        {!! $product['pd_long_desc'] !!}
      </div><!-- .infomation -->
    @endif
  </div><!-- .detailproducts -->

  <div class="related">
    @if(!$relatedItems->isEmpty())
      @php $count = $relatedItems->count(); @endphp
      <div class="header-related">Related Products</div>
      <div class="swiper-container">
        <ul class="related-products swiper-wrapper">
          @foreach($relatedItems as $item)
            @include('common.desktop.product.list', [
              'product'      => $item,
              'slide'        => ($count > 4) ? true : false,
              'categoryName' => title_case($product['category']['ct_name'])
            ])
          @endforeach
        </ul>
        @if($count > 4)
          <div class="swiper-button-next swiper-button-black"></div>
          <div class="swiper-button-prev swiper-button-black"></div>
        @endif
      </div>
      <div class="clear"></div>
    @endif
    <a href="javascript:history.back();" class="btprevious">ย้อนกลับ</a>
    <div class="clear"></div>
  </div>

@endsection
@section('script_footer')
<script>
  @if(session()->has('errorMsg'))
    {{ session()->forget('errorMsg') }}
    alert('สินค้าไม่เพียงพอสำหรับความต้องการ');
  @endif
  Galleria.loadTheme('{{ asset('js/galleria.classic.min.js') }}');
  Galleria.run('#galleria');
</script>
<script>
  new Swiper('.swiper-container', { });
</script>
@endsection
