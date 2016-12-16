@extends('layout.desktop')
@section('header')
  @include('common.desktop.header')
@endsection
@section('content')
  @include('common.desktop.account.header')
  <div class="container-myaccount">
    @include('common.desktop.account.menu', ['page' => 'profile'])
    <div class="blog">
      <h2>ข้อมูลส่วนตัว</h2>
        <div class="blog-inside inside-left">
            <h3>แก้ไขข้อมูลส่วนตัว</h3>
            <form method="post" action="{{ route('account_update', ['id' => $member->id]) }}" class="form-style">
              <div class="form-style-2">
                <label for="user-email">อีเมล์<span>*</span></label>
                <input type="email" name="user-email" id="user-email" disabled="disabled" value="{{ $member->email }}">
                <label for="user-name">ชื่อ<span>*</span></label>
                <input type="text" name="user-name" id="user-name" value="{{ $member->first_name }}">
                <label for="user-lastname">นามสกุล<span>*</span></label>
                <input type="text" name="user-lastname" id="user-lastname" value="{{ $member->last_name }}">
                <label for="user-birthday">วันเกิด<span>*</span></label>
                <input type="text" name="user-birthday" id="user-birthday" value="{{ date('m/d/Y', strtotime($member->birthday)) }}">
                <label for="user-gender">เพศ<span>*</span></label>
                <select name="user-gender" id="user-gender">
                    <option value="">กรุณาเลือกเพศ</option>
                    <option value="0" {{ ($member->gender == 0) ? 'selected' : '' }}>ชาย</option>
                    <option value="1" {{ ($member->gender == 1) ? 'selected' : '' }}>หญิง</option>
                </select>
                <label for="user-mobile">มือถือ<span>*</span></label>
                <input type="tel" name="user-mobile" id="user-mobile" value="{{ $member->tel }}">
                <label><input type="checkbox" name="notification" id="accept-regist" value="1" {{ ($member->notification ? 'checked' : '') }}>รับข่าวสารและโปรโมชั่นต่างๆ</label>
                {{ csrf_field() }}
                <input type="submit" name="save-pass" id="save-pass" value="บันทึกข้อมูลส่วนตัว">
              </div>
            </form>
        </div>
        <div class="blog-inside">
          <h3>เปลี่ยนรหัสผ่าน</h3>
          <div class="form-style-2">
            <form action="{{ route('account_change_password', ['id' => $member->id]) }}" method="post" class="form-style">
              <label for="user-password">รหัสผ่านเดิม<span>*</span></label>
              <input type="password" name="user-password" id="user-password">
              <label for="user-newpassword">รหัสผ่านใหม่<span>*</span></label>
              <input type="password" name="user-newpassword" id="user-newpassword">
              <label for="user-newpassword-2">ยืนยันรหัสผ่าน<span>*</span></label>
              <input type="password" name="user-newpassword-2" id="user-newpassword-2">
              {{ csrf_field() }}
              <input type="submit" name="save-pass" id="save-pass" value="บันทึกรหัสผ่าน">
            </form>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection
<script type="text/javascript">
  @if(!empty($messageShow))
    alert('{{ $messageShow }}');
    window.location = '{{ route('account_profile') }}';
  @endif
</script>
