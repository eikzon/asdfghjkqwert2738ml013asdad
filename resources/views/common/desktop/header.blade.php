@php
  $absurl = 'http://shoerod.app/';
@endphp
<div class="container">
  <div class="header">
    <a href="{{ url('/') }}" class="logo">
      <img src="{{ asset('images/logo_breaker.png') }}" alt="รองเท้า Breaker"/>
    </a>
    <ul class="topnav">
        @if(!request()->session()->has('memberData'))
          <li class="login"><a href="{{ route('account_login') }}">เข้าสู่ระบบ</a></li>
          <li class="register"><a href="{{ route('account_create') }}">ลงทะเบียน</a></li>
        @else
          <li class="dropdown member"><a href="#">บัญชีของฉัน</a>
            <ul class="drop-nav">
              <li><a href="{{ route('account_profile') }}">ข้อมูลส่วนตัว</a></li>
              <li><a href="{{ route('account_address') }}">ข้อมูลสถานที่จัดส่ง</a></li>
              <li><a href="{{ route('account_history') }}">ประวัติการสั่งซื้อ</a></li>
              <li><a href="{{ route('account_wishlist') }}">สินค้าที่น่าสนใจ</a></li>
              <li><a href="{{ route('client_logout') }}">ออกจากระบบ</a></li>
            </ul>
          </li>
        @endif
        <li class="cart">
        <div id="dd" class="shopping-dropdown">
          <span>{{ getCart()->count() }}</span>
          <ul class="dropdown shopping-list">
            @if(!empty(getCart()->all()))
              @foreach(getCart() as $cart)
                @php
                  $productPrice    = $cart->products->pd_price;
                  $productDiscount = $cart->products->pd_price_discount;

                  $pricePerUnit  = !empty($productDiscount) ? $productDiscount : $productPrice;
                  $totalPrice    = $pricePerUnit * $cart->ct_quantity;
                  @$subTotal    += $totalPrice;
                  $shippingPrice = ($subTotal < 499) ? 50 : 0;
                  $grandTotal    = $subTotal + $shippingPrice;
                @endphp
                <li>
                  <a href="{{ route('product_detail', $cart['products']->id) }}">
                    <div class="product-img">
                      <img src="{{ asset("images/products/" . getImageCart($cart->products->id)->image) }}">
                    </div>
                    @if(!empty($cart->products))
                      <div class="product-desc">
                        <div class="product-name">{{ $cart->products->pd_name }}
                          <br>{{ !empty(getVariant($cart->products->id)->vr_text) ? getVariant($cart->products->id)->vr_text : '' }}<br>จำนวน: {{ $cart->ct_quantity }}
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
            <li>
            <a href="{{ route('cart') }}" class="btn-process">ดูตะกร้าสินค้า</a>
            </li>
          </ul>
        </div></li>
      </ul>
    <div class="social">
      <a href="https://www.facebook.com/Breakerfutsal" target="_blank"><img src="{{ asset('images/icon_facebook.png') }}" alt="facebook"/></a>
      <a href="https://www.youtube.com/channel/UCBKL_3XcOGj0TmJYL2Iy98A/videos" target="_blank">
        <img src="{{ asset('images/icon_youtube.png') }}" alt="youtube"/>
      </a>
      <a href="mailto:saleonlinescs@gamil.com">
        <img src="{{ asset('images/icon_email.png') }}" alt="email"/>
      </a>
    </div>
    <div class="mobilemenu"></div>
  </div>
  <ul class="menum">
    <li><a href="{{ url('/') }}">HOME</a></li>
    <li><a>PRODUCTS</a>
      @if(!empty($categoriesList))
        <ul class="submenu">
          @foreach($categoriesList as $category)
            <li>
              <a href="{{ route('product_list', $category['id']) }}">
                <img src="{{ asset('images/' . $category['ct_image']) }}" alt="{{ $category['ct_name'] }}"/>
              </a>
            </li>
          @endforeach
        </ul><!-- .submenu -->
      @endif
    </li>
    <li><a href="{{ $absurl }}csr/">CSR</a></li>
    <li><a href="{{ $absurl }}news/">EVENT</a></li>
    <li><a href="{{ $absurl }}video.php">VIDEO</a></li>
    <li><a href="{{ $absurl }}about-us.php">ABOUT US</a></li>
    <li><a href="{{ $absurl }}contact-us.php">CONTACT US</a></li>
  </ul><!-- .menu -->
</div><!-- .container -->
<ul class="menu">
    <div class="container">
    <li><a href="{{ $absurl }}">HOME</a></li>
    <li><a>PRODUCTS</a>
      @if(!empty($categoriesList))
        <div class="submenu">
          <div class="container">
            @foreach($categoriesList as $category)
              <ul>
                <li>
                  <a href="{{ route('product_list', $category['id']) }}">
                    <img src="{{ asset('images/' . $category['ct_image']) }}"
                         width="200" height="150"
                         alt="{{ $category['ct_name'] }}"/>
                  </a>
                </li>
              </ul>
            @endforeach
          </div><!-- .container -->
        </div><!-- .submenu -->
      @endif
    </li>
    <li><a href="{{ $absurl }}csr/">CSR</a></li>
    <li><a href="{{ $absurl }}news/">EVENT</a></li>
    <li><a href="{{ $absurl }}video.php">VIDEO</a></li>
    <li><a href="{{ $absurl }}about-us.php">ABOUT US</a></li>
    <li><a href="{{ $absurl }}contact-us.php">CONTACT US</a></li>
    </div><!-- .container -->
</ul><!-- .menu -->
