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
          @if(!empty($images))
            @foreach($images as $image)
              <a href="{{ asset('products/images/BC-006_GN_4.jpg') }}">
                <img src="products/images/BC-006_GN_4.jpg" rel="image_src" type="image/jpeg">
              </a>
            @endforeach
          @endif
        </div>
      </div>
      <div class="desc">
        <div class="wrap"><form method="post" action="cart.php">
          <div class="name">{{ $product['pd_name'] }}</div>
          <div class="price"><!--<span class="pricedead">1,550 Baht</span>-->
            {{ number_format($product['pd_price'], 2) }} Baht
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
            @if(!empty($product['pg_name'])) {{ $product['pg_name'] }} | @endif
            @if(!empty($product['pd_stock']))
              In Stock
            @else
              Out of Stock
            @endif
          </div>
          <div class="shortdesc"> {{ $product['pd_short_desc'] }} </div><!-- .shortdesc -->
          <div class="shortdesc">
            @if(!empty($product['pd_stock']))
              <input type="text" name="quantity" id="quantity" value="1" size="1" maxlength="4" class="box-qty">
            @endif
            <input type="submit" name="addcart" id="addcart" value="สั่งซื้อสินค้า" title="สั่งซื้อสินค้า" class="btn-addcart">
            <a href="#" class="btn-wishlist">สินค้าที่น่าสนใจ</a>
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
        {{ $product['pd_long_desc'] }}
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
            <div class="frame"><a href="BC-006_GN_4.php"><img src="products/images/BC-006_GN_4.jpg"/></a></div>
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
