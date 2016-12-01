@extends('layout.desktop')
@section('header')
  @include('common.desktop.header')
@endsection
@section('content')
  @include('common.desktop.account.header')
  <div class="container-login">
    <div class="blog center">
      <div class="blog-inside login">
        <h2>Login</h2>
        <p>กรุณากรอกข้อมูลในกล่องด้านล่างเพื่อเข้าสู่ระบบ<br>(สำหรับผู้ที่ลงทะเบียนแล้ว)</p>
        <form method="post" action="{{ route('account.store') }}" class="form-style login">
            <label for="user-email">อีเมล์<span>*</span></label>
            <input type="text" name="user-email" id="user-email" autofocus>
            <label for="user-password">รหัสผ่าน<span>*</span></label>
            <input type="password" name="user-password" id="user-password">
            <a href="{{ route('account_forgot_password') }}">ลืมรหัสผ่าน?</a>
            <input type="submit" name="btn-submit" id="btn-submit" value="เข้าสู่ระบบ">
        </form>
      </div>
      <div class="blog-inside register">
        <h2>Register</h2>
        <p>สร้างบัญชี<br>ถ้าคุณไม่ได้เป็นสมาชิกกรุณาลงทะเบียน</p>
        <a href="{{ route('account_create') }}" class="btn-register">ลงทะเบียน</a>
      </div>
    </div>
  </div>
@endsection
