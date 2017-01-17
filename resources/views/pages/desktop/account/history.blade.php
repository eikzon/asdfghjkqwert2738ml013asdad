@extends('layout.desktop')
@section('header')
  @include('common.desktop.header')
@endsection
@section('title', 'ประวัติการสั่งซื้อ')
@section('content')
  @include('common.desktop.account.header', [
    'title'  => 'My Account',
    'detail' => 'ประวัติการสั่งซื้อ'
  ])
  <div class="container-myaccount">
    @include('common.desktop.account.menu', ['page' => 'history'])
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
                            @if(!empty($orders))
                              @foreach($orders as $order)
                                <tr>
                                    <td data-title="เลขที่ใบสั่งซื้อ :">
                                      <a href="{{ route('account_history_detail', $order['id']) }}">
                                        {{ $order['od_code'] }}
                                      </a>
                                    </td>
                                    <td data-title="วันที่สั่งซื้อ :">{{ $order['created_at'] }}</td>
                                    <td data-title="สถานะ :">
                                      {{ config('website.order.status.' . $order['od_flow_status']) }}
                                    </td>
                                    <td data-title="การชำระเงิน :">
                                      {{ config('website.order.type.' . $order['od_payment_type']) }}
                                    </td>
                                    <td data-title="สถานะชำระเงิน :">
                                      @if($order['od_status'] == 1)
                                        รอชำระเงิน
                                      @elseif($order['od_status'] == 2)
                                        ชำระเงินแล้ว
                                      @else
                                        ยกเลิก
                                      @endif
                                    </td>
                                    <td data-title="เลขพัสดุ(EMS) :">
                                      {{ !empty($order['od_ems_track']) ? $order['od_ems_track'] : '-' }}
                                    </td>
                                </tr>
                              @endforeach
                            @endif
                          </tbody>
                      </table>
                  </div>
              </div>
          </form>
      </div>
  </div>
@endsection
