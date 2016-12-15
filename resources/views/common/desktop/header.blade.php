@php
  $absurl = 'http://shoerod.app/';
@endphp
<div class="container">
  <div class="header">
    <a href="{{ url('/') }}" class="logo"><img src="{{ asset('images/logo_breaker.png') }}" alt="รองเท้า Breaker"/></a>
    <ul class="topnav">
        @if(empty(auth()->user()->id))
          <li class="login"><a href="{{ route('account_login') }}">เข้าสู่ระบบ</a></li>
          <li class="register"><a href="{{ route('account_create') }}">ลงทะเบียน</a></li>
        @else
          <li class="dropdown member"><a href="#">บัญชีของฉัน</a>
            <ul class="drop-nav">
              <li><a href="{{ route('account_profile') }}">ข้อมูลส่วนตัว</a></li>
              <li><a href="{{ route('account_address') }}">ข้อมูลสถานที่จัดส่ง</a></li>
              <li><a href="{{ route('account_history') }}">ประวัติการสั่งซื้อ</a></li>
              <li><a href="{{ route('account_wishlist') }}">สินค้าที่น่าสนใจ</a></li>
              <li><a href="{{ route('account_logout') }}">ออกจากระบบ</a></li>
            </ul>
          </li>
        @endif
        <li class="cart"><div id="dd" class="shopping-dropdown">
           <span>2</span>
           <ul class="dropdown shopping-list">
             <li><a href="detail.php"><div class="product-img"><img src="products/images/BC-006_GN_4.jpg"></div>
                <div class="product-desc">
                  <div class="product-name">Breaker King Knit<br>BC006-GN / 39 / Multicolor<br>จำนวน: 1<span class="product-price">1,550 บาท</span></div>
                </div>
             </a></li>
             <li><a href="detail.php"><div class="product-img"><img src="products/images/BC-006_GN_4.jpg"></div>
                <div class="product-desc">
                  <div class="product-name">Breaker King Knit<br>BC006-GN / 39 / Multicolor<br>จำนวน: 1<span class="product-price">1,550 บาท</span></div>
                </div>
             </a></li>
             <li>
              <div class="shopping-txt">ค่าจัดส่ง<br>ราคารวม</div>
              <div class="shopping-price">0.00 บาท<br>1,879 บาท</div>
             </li>
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
    <li><a href="">PRODUCTS</a>
      <ul class="submenu">
        <li><a href="{{ route('product_list', 1) }}">
          <img src="{{ asset('images/menu_futsal.png') }}" alt="FUTSAL"/>
          </a>
        </li>
        <li><a href="{{ route('product_list', 2) }}"><img src="{{ asset('images/menu_football.png') }}" alt="Football"/></a></li>
        <li><a href="{{ route('product_list', 3) }}"><img src="{{ asset('images/menu_running.png') }}" alt="RUNNING"/></a></li>
        <li><a href="{{ route('product_list', 4) }}"><img src="{{ asset('images/menu_badminton.png') }}" alt="Badminton"/></a></li>
        <li><a href="{{ route('product_list', 5) }}"><img src="{{ asset('images/menu_student.png') }}" alt="STUDENT"/></a></li>
      </ul><!-- .submenu -->
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
    <li><a href="">PRODUCTS</a>
      <div class="submenu">
        <div class="container">
          <ul>
            <li><a href="{{ route('product_list', 1) }}"><img src="{{ asset('images/menu_futsal.png') }}" alt="FUTSAL"/></a></li>
          </ul>
          <ul>
            <li><a href="{{ route('product_list', 2) }}"><img src="{{ asset('images/menu_football.png') }}" alt="Football"/></a></li>
          </ul>
          <ul>
            <li><a href="{{ route('product_list', 3) }}"><img src="{{ asset('images/menu_running.png') }}" alt="RUNNING"/></a></li>
          </ul>
          <ul>
            <li><a href="{{ route('product_list', 4) }}"><img src="{{ asset('images/menu_badminton.png') }}" alt="Badminton"/></a></li>
          </ul>
          <ul>
            <li><a href="{{ route('product_list', 5) }}"><img src="{{ asset('images/menu_student.png') }}" alt="STUDENT"/></a></li>
          </ul>
        </div><!-- .container -->
      </div><!-- .submenu -->
    </li>
    <li><a href="{{ $absurl }}csr/">CSR</a></li>
    <li><a href="{{ $absurl }}news/">EVENT</a></li>
    <li><a href="{{ $absurl }}video.php">VIDEO</a></li>
    <li><a href="{{ $absurl }}about-us.php">ABOUT US</a></li>
    <li><a href="{{ $absurl }}contact-us.php">CONTACT US</a></li>
    </div><!-- .container -->
</ul><!-- .menu -->
