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
        @include('common.desktop.cart.list')
        <li>
          <a href="{{ route('cart') }}" class="btn-process">ดูตะกร้าสินค้า</a>
        </li>
      </ul>
    </div>
  </li>
</ul>
