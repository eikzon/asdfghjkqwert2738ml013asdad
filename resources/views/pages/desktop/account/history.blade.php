@extends('layout.desktop')
@section('header')
  @include('common.desktop.header')
@endsection
@section('content')
  @include('common.desktop.account.header')
    <div class="container-myaccount">
      @include('common.desktop.account.menu')
        <div class="blog">
            <h2>ประวัติการสั่งซื้อ</h2>
            <form method="post" action="" class="form-style">
                <div class="blog-history">
                    <div class="table-summary">
                        <table class="tabledata">
                            <thead>
                                <tr>
                                    <th width="110">เลขที่ใบสั่งซื้อ</th>
                                    <th width="140">วันที่สั่งซื้อ</th>
                                    <th width="125">สถานะ</th>
                                    <th width="125">ชำระเงิน</th>
                                    <th width="125">สถานะชำระเงิน</th>
                                    <th width="125">เลขพัสดุ(EMS)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-title="เลขที่ใบสั่งซื้อ :"><a href="#">BS-5911109</a></td>
                                    <td data-title="วันที่สั่งซื้อ :">08/11/2016 11:42</td>
                                    <td data-title="สถานะ :">ได้รับคำสั่งซื้อ</td>
                                    <td data-title="การชำระเงิน :">โอนเงินเข้าบัญชีธนาคาร</td>
                                    <td data-title="สถานะชำระเงิน :">รอการชำระเงิน</td>
                                    <td data-title="เลขพัสดุ(EMS) :">-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
