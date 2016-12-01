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
          <a href="products/images/BC-006_GN_4.jpg"><img src="products/images/BC-006_GN_4.jpg" rel="image_src" type="image/jpeg"></a>
          <a href="products/images/BC-006_GN_1.JPG"><img src="products/images/BC-006_GN_1_186x78.JPG" rel="image_src" type="image/jpeg"></a>
          <a href="products/images/BC-006_GN_2.JPG"><img src="products/images/BC-006_GN_2_186x78.JPG" rel="image_src" type="image/jpeg"></a>
          <a href="products/images/BC-006_GN_3.JPG"><img src="products/images/BC-006_GN_3_186x78.JPG" rel="image_src" type="image/jpeg"></a>
          <a href="products/images/BC-006_GN_6.JPG"><img src="products/images/BC-006_GN_6_186x78.JPG" rel="image_src" type="image/jpeg"></a>
          <a href="products/images/BC-006_GN_4.JPG"><img src="products/images/BC-006_GN_4_186x78.JPG" rel="image_src" type="image/jpeg"></a>
          <a href="products/images/BC-006_GN_5.JPG"><img src="products/images/BC-006_GN_5_186x78.JPG" rel="image_src" type="image/jpeg"></a>
        </div><!-- #galleria -->
      </div><!-- .pic -->
      <div class="desc">
        <div class="wrap"><form method="post" action="cart.php">
          <div class="name">Breaker King Knit</div><!-- .name -->
          <div class="price"><!--<span class="pricedead">1,550 Baht</span>--> 1,550 Baht</div><!-- .price -->
          <div class="shortdesc">Item Code : BC006-GN</div><!-- .shortdesc -->
          <div class="shortdesc">EUR Size :
          <select class="select-size">
            <option value="0">กรุณาเลือกขนาด (39-44)</option>
            <option>39</option>
            <option>40</option>
            <option disabled="disabled">41 [Out of Stock]</option>
            <option>42</option>
            <option>43</option>
            <option>44</option>
          </select>
          <!--39 - 44--></div><!-- .shortdesc -->
          <div class="stock">Men's Futsal Boots | In Stock</div><!-- .stock -->
          <div class="shortdesc"> รองเท้าสายพันธุ์ใหม่ Breaker King Knit</div><!-- .shortdesc -->
          <div class="shortdesc">
            <input type="text" name="quantity" id="quantity" value="1" size="1" maxlength="4" class="box-qty">
            <input type="submit" name="addcart" id="addcart" value="สั่งซื้อสินค้า" title="สั่งซื้อสินค้า" class="btn-addcart">
            <a href="#" class="btn-wishlist">สินค้าที่น่าสนใจ</a>
          </div><!-- .shortdesc -->
          <div class="social">
            <span class='st_facebook_vcount' displayText='Facebook'></span>
            <span class='st_twitter_vcount' displayText='Tweet'></span>
            <span class='st_googleplus_vcount' displayText='Google +'></span>
          </div><!-- .social -->
        </form></div><!-- .wrap -->
      </div><!-- .desc -->
    </div><!-- .topdesc -->
    <div class="infomation">
      <div class="name">Breaker King Knit</div><!-- .name -->
      <div class="longdesc">รองเท้าสายพันธุ์ใหม่ Breaker King Knit ใช้นวัตกรรมการถักทอผ้าขึ้นเป็น Upper ด้วยเส้นใยที่มีความยืดยุ่น กระชับเข้ารูป และระบายอากาศได้ดี</div>
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
  <script>
  Galleria.loadTheme('js/galleria.classic.min.js?v=1001');
  Galleria.run('#galleria');
  </script>
  <script src="js/swiper.js"></script>
  <script>
  var swiper = new Swiper('.swiper-container', { });
  </script>
@endsection
