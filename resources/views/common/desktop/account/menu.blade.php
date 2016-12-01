<div class="myaccount-submenu">
  <h2>My Account</h2>
  <ul>
      <li><a href="{{ route('account_profile') }}" class="current">ข้อมูลส่วนตัว</a></li>
      <li><a href="{{ route('account_address') }}">ข้อมูลสถานที่จัดส่ง</a></li>
      <li><a href="{{ route('account_history') }}">ประวัติการสั่งซื้อ</a></li>
      <li><a href="{{ route('account_wishlist') }}">สินค้าที่น่าสนใจ</a></li>
      <li><a href="{{ route('account_logout') }}">ออกจากระบบ</a></li>
  </ul>
</div>
