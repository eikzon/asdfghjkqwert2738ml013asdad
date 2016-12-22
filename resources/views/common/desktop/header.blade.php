@php
  $absurl = 'http://www.breaker-shoes.com/';
@endphp
<div class="container">
  <div class="header">
    <a href="{{ url('/') }}" class="logo">
      <img src="{{ asset('images/logo_breaker.png') }}" alt="รองเท้า Breaker"/>
    </a>
    @include('common.desktop.mini_menu')
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
    <li><a href="{{ url('/') }}">HOME</a></li>
    <li><a href="">PRODUCTS</a>
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
