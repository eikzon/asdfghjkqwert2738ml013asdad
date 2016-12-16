@extends('layout.desktop')
@section('header')
@include('common.desktop.header')
@endsection
@section('content')
  @include('common.desktop.account.header', [
    'title'  => 'Forgot Password?',
    'detail' => 'ลืมรหัสผ่าน?'
  ])
  <div class="container-login">
    <div class="blog center">
      <div class="blog-inside forgot">
        <h2>Forgot Password?</h2>
        <p>กรุณากรอก Email ของคุณ ระบบจะทำการส่งรหัสผ่านไปยัง Email ที่คุณได้ลงทะเบียนไว้</p>
        @if(request()->getQueryString() == 'success')
          <p>
            <span>* ได้ส่งรหัสผ่านใหม่แจ้งไปยังอีเมล์ของคุณเเล้ว กรุณาตรวจสอบ</span>
          </p>
        @else
          <p>
            <span>ไม่สามารถส่งรหัสผ่านใหม่ได้ กรุณากรอกข้อมูลอีกครั้งหรือติดต่อเจ้าหน้าที่</span>
          </p>
        @endif
        <form method="post" action="{{ route('account_forgot_password_send') }}" class="form-style login">
          <label for="user-email">อีเมล์<span>*</span></label>
          <input type="email" name="email" id="email" require="" autofocus>
          {{ csrf_field() }}
          <input type="submit" name="btn-submit" id="btn-submit" value="ยืนยัน">
        </form>
      </div>
    </div>
  </div>
@endsection
