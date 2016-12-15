<div class="myaccount-submenu">
  <h2>My Account</h2>
  <ul>
      <li><a href="{{ route('account_profile') }}" @if($page == 'profile') class="current" @endif>ข้อมูลส่วนตัว</a></li>
      <li><a href="{{ route('account_address') }}" @if($page == 'address') class="current" @endif>ข้อมูลสถานที่จัดส่ง</a></li>
      <li><a href="{{ route('account_history') }}" @if($page == 'history') class="current" @endif>ประวัติการสั่งซื้อ</a></li>
      <li><a href="{{ route('account_wishlist') }}" @if($page == 'wishlist') class="current" @endif>สินค้าที่น่าสนใจ</a></li>
      <li><a href="{{ route('account_logout') }}">ออกจากระบบ</a></li>
  </ul>
</div>
