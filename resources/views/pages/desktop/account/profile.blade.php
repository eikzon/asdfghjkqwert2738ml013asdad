@extends('layout.desktop')
@section('header')
  @include('common.desktop.header')
@endsection
@section('content')
  @include('common.desktop.account.header')
  <div class="container-myaccount">
    @include('common.desktop.account.menu')
    <div class="blog">
      <h2>ข้อมูลส่วนตัว</h2>
      <form method="post" action="" class="form-style">
        <div class="blog-inside inside-left">
            <h3>แก้ไขข้อมูลส่วนตัว</h3>
            <div class="form-style-2">
                <label for="user-email">อีเมล์<span>*</span></label>
                <input type="email" name="user-email" id="user-email" disabled="disabled">
                <label for="user-name">ชื่อ<span>*</span></label>
                <input type="text" name="user-name" id="user-name">
                <label for="user-lastname">นามสกุล<span>*</span></label>
                <input type="text" name="user-lastname" id="user-lastname">
                <label for="user-birthday">วันเกิด<span>*</span></label>
                <input type="date" name="user-birthday" id="user-birthday">
                <label for="user-gender">เพศ<span>*</span></label>
                <select name="user-gender" id="user-gender">
                    <option value="0">กรุณาเลือกเพศ</option>
                    <option>ชาย</option>
                    <option>หญิง</option>
                </select>
                <label for="user-mobile">มือถือ<span>*</span></label>
                <input type="tel" name="user-mobile" id="user-mobile">
                <label><input type="checkbox" name="accept-regis" id="accept-regist">รับข่าวสารและโปรโมชั่นต่างๆ</label>
                <input type="submit" name="save-pass" id="save-pass" value="บันทึกข้อมูลส่วนตัว">
            </div>
        </div>
        <div class="blog-inside">
            <h3>เปลี่ยนรหัสผ่าน</h3>
            <div class="form-style-2">
                <label for="user-password">รหัสผ่านเดิม<span>*</span></label>
                <input type="password" name="user-password" id="user-password">
                <label for="user-newpassword">รหัสผ่านใหม่<span>*</span></label>
                <input type="password" name="user-newpassword" id="user-newpassword">
                <label for="user-newpassword-2">ยืนยันรหัสผ่าน<span>*</span></label>
                <input type="password" name="user-newpassword-2" id="user-newpassword-2">
                <input type="submit" name="save-pass" id="save-pass" value="บันทึกรหัสผ่าน">
            </div>
        </div>
      </form>
    </div>
  </div>
@endsection
