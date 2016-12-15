@extends('layout.desktop')
@section('header')
  @include('common.desktop.header')
@endsection
@section('content')
  @include('common.desktop.account.header')
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
                                      <td data-title="การชำระเงิน :">Paypal</td>
                                      <td data-title="สถานะชำระเงิน :">
                                        @if($order['od_status'] == 0)
                                          ไม่สำเร็จ
                                        @else
                                          ชำระเงินแล้ว
                                        @endif
                                      </td>
                                      <td data-title="เลขพัสดุ(EMS) :">
                                        {{ $order['od_tracking'] ?? '-' }}
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
