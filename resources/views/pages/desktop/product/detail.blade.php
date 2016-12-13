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
        <div class="wrap"><form method="post" action="{{ route('add_to_cart') }}">
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
          @if(!empty($variants))
            <div class="shortdesc">EUR Size :
              <select class="select-size">
                @foreach($variants as $variant)
                  <option value="0">กรุณาเลือกขนาด (39-44)</option>
                  <option>39</option>
                  <option>40</option>
                  <option disabled="disabled">41 [Out of Stock]</option>
                  <option>42</option>
                  <option>43</option>
                  <option>44</option>
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
          @if(!empty($errorMsg))
            {{ d($errorMsg) }}
          @endif
          <div class="shortdesc">{!! $product['pd_short_desc'] !!}</div><!-- .shortdesc -->
          <div class="shortdesc">
            @if(!empty($product['pd_stock']))
              <input type="text" name="ct_quantity" id="quantity" value="1" size="1" class="box-qty">
              <input type="hidden" name="fk_product_id" id="quantity" value="{{ $product['id'] }}" size="1" class="box-qty">
              {{ csrf_field() }}
              <input type="submit" name="addcart" id="addcart" value="สั่งซื้อสินค้า" title="สั่งซื้อสินค้า" class="btn-addcart" data-url={{ route('add_to_cart') }} data-pid="{{ $product['id'] }}">
            @endif
            <a href="{{ route('account_wishlist_add', $product['id']) }}" class="btn-wishlist">
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
  <div class="related">
    <div class="header-related">Related Products</div>
    <div class="swiper-container">
      <ul class="related-products swiper-wrapper">
        <li class="swiper-slide">
            <div class="new"></div>
            <div class="frame"><a href="BC-006_GN_4.php"><img src="products/images/BC-006_GN_4.jpg"/></a></div>
            <div class="line"></div>
            <a href="BC-006_GN_4.php" class="name">Breaker King Knit</a>
            <br>
            <span class="price">1,550 Baht</span>
            <br>
            <span class="desc">Men's Futsal Boots | In Stock</span>
        </li>
        <li class="swiper-slide">
            <div class="new"></div>
            <div class="frame"><a href="BC-006_GN_4.php"><img src="products/images/BC-006_GN_4.jpg"/></a></div>
            <div class="line"></div>
            <a href="BC-006_GN_4.php" class="name">Breaker King Knit</a>
            <br>
            <span class="price">1,550 Baht</span>
            <br>
            <span class="desc">Men's Futsal Boots | In Stock</span>
        </li>
        <li class="swiper-slide">
            <div class="new"></div>
            <div class="frame"><a href="BC-006_GN_4.php"><img src="products/images/BC-006_GN_4.jpg"/></a></div>
            <div class="line"></div>
            <a href="BC-006_GN_4.php" class="name">Breaker King Knit</a>
            <br>
            <span class="price">1,550 Baht</span>
            <br>
            <span class="desc">Men's Futsal Boots | In Stock</span>
        </li>
        <li class="swiper-slide">
            <div class="new"></div>
            <div class="frame"><a href="BC-006_GN_4.php"><img src="products/images/BC-006_GN_4.jpg"/></a></div>
            <div class="line"></div>
            <a href="BC-006_GN_4.php" class="name">Breaker King Knit</a>
            <br>
            <span class="price">1,550 Baht</span>
            <br>
            <span class="desc">Men's Futsal Boots | In Stock</span>
        </li>
        <li class="swiper-slide">
            <div class="new"></div>
            <div class="frame">
              <a href="BC-006_GN_4.php">
                <img src="products/images/BC-006_GN_4.jpg"/>
              </a>
            </div>
            <div class="line"></div>
            <a href="BC-006_GN_4.php" class="name">Breaker King Knit</a>
            <br>
            <span class="price">1,550 Baht</span>
            <br>
            <span class="desc">Men's Futsal Boots | In Stock</span>
        </li>
      </ul>
      <div class="swiper-button-next swiper-button-black"></div>
      <div class="swiper-button-prev swiper-button-black"></div>
    </div>
    <div class="clear"></div>
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
  Galleria.loadTheme('/js/galleria.classic.min.js');
  Galleria.run('#galleria');
</script>
<script>
  new Swiper('.swiper-container', { });
</script>
@endsection
