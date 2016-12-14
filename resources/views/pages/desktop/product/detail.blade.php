@extends('layout.desktop')
@section('header')
  @include('common.desktop.header')
@endsection
@section('content')
  @include('common.desktop.account.header')
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
        <div class="wrap"><form method="post" action="cart.php">
          <div class="name">{{ $product['pd_name'] }}</div>
          <div class="price">
            @if(!empty($product['pd_price_discount']))
              <span class="pricedead">{{ number_format($product['pd_price']) }} Baht</span>
              {{ number_format($product['pd_price_discount']) }} Baht
            @else
              {{ number_format($product['pd_price']) }} Baht
            @endif
          </div>
          <div class="shortdesc">
            Item Code : {{ $product['pd_code'] }}
          </div>
          @if(!empty($variants[0]['products']))
            <div class="shortdesc">{{ $variants[0]['pg_name'] }} :
              <select class="select-size">
                @foreach($variants[0]['products'] as $variant)
                  <option @if($variant['pd_status'] == 2) disabled="disabled" @endif
                          value="{{ $variant['id'] }}">
                    {{ $variant['vr_name'] }}
                    @if($variant['pd_status'] == 2) [Out of Stock] @endif
                  </option>
                @endforeach
              </select>
            </div>
          @endif
          <div class="stock">
            @if(!empty($product['sku']['pg_name'])) {{ $product['sku']['pg_name'] }} | @endif
            @if(!empty($product['pd_stock']) && $product['pd_status'] == 1)
              In Stock
            @else
              Out of Stock
            @endif
          </div>
          <div class="shortdesc">{!! $product['pd_short_desc'] !!}</div><!-- .shortdesc -->
          <div class="shortdesc">
            @if(!empty($product['pd_stock']))
              <input type="text" name="quantity" id="quantity" value="1" size="1" class="box-qty">
              <input type="submit" name="addcart" id="addcart" value="สั่งซื้อสินค้า" title="สั่งซื้อสินค้า" class="btn-addcart">
            @endif
            <a
              @if(!empty($product['wishlist']))
                href="{{ route('account_wishlist_delete', [$product['id'], $product['wishlist']->id]) }}"
              @else
                href="{{ route('account_wishlist_add', $product['id']) }}"
              @endif
              class="btn-wishlist @if(!empty($product['wishlist'])) active @endif">
              สินค้าที่น่าสนใจ
            </a>
          </div>
          <div class="social">
            <span class='st_facebook_vcount' displayText='Facebook'></span>
            <span class='st_twitter_vcount' displayText='Tweet'></span>
            <span class='st_googleplus_vcount' displayText='Google +'></span>
          </div>
        </form></div><!-- .wrap -->
      </div><!-- .desc -->
    </div><!-- .topdesc -->
    <div class="infomation">
      <div class="name">{{ $product['pd_name'] }}</div><!-- .name -->
      <div class="longdesc">
        {!! $product['pd_long_desc'] !!}
      </div>
    </div><!-- .infomation -->
  </div><!-- .detailproducts -->
  @if(!empty($relatedItems))
    @php $count = $relatedItems->count(); @endphp
    <div class="related">
      <div class="header-related">Related Products</div>
      <div class="swiper-container">
        <ul class="related-products swiper-wrapper">
          @foreach($relatedItems as $item)
            @include('common.desktop.product.list', [
              'product' => $item,
              'slide'   => ($count > 4) ? true : false
            ])
          @endforeach
        </ul>
        @if($count > 4)
          <div class="swiper-button-next swiper-button-black"></div>
          <div class="swiper-button-prev swiper-button-black"></div>
        @endif
      </div>
      <div class="clear"></div>
      <a href="javascript:history.back();" class="btprevious">ย้อนกลับ</a>
      <div class="clear"></div>
    </div>
  @endif
@endsection
@section('script_footer')
<script>
  Galleria.loadTheme('/js/galleria.classic.min.js');
  Galleria.run('#galleria');
</script>
<script>
  new Swiper('.swiper-container', { });
</script>
@endsection
