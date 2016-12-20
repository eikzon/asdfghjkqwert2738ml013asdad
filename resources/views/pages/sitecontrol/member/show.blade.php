@extends('layout.sitecontrol')
@section('content')
  <div class="container-fluid">
    @include('common.sitecontrol.breadcrumb', ['page' => 'Profile'])
    <!-- /.row -->
    <div class="row">
      <div class="col-lg-12">
        <div class="white-box">
          <div class="">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6">
                <h4 class="box-title m-t-40"><i class="ti-user"></i> Information </h4>
                Email : {{ $member->email }}<br>
                First Name : {{ $member->first_name }}<br>
                Last Name : {{ $member->last_name }}<br>
                Birthday : {{ date('d-m-Y', strtotime($member->birthday)) }}<br>
                Gender : {{ ($member->gender == 0 ? 'Male' : 'Female') }}<br>
                Mobile : {{ $member->tel }}<br>
                Notification: {{ $member->notification == 1 ? 'ต้องการรับข่าวสารและโปรโมชั่น' : 'ไม่ต้องการรับข่าวสารและโปรโมชั่น' }}
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6">
                <h4 class="box-title m-t-40"><i class="ti-home"></i> Current Address </h4>
                Address : {{ $member->shipping_address }}<br>
                Sub District : {{ $member->shipping_sub_district }}<br>
                District : {{ $member->shipping_district }}<br>
                Province : {{ $member->shipping_province }}<br>
                Postcode : {{ $member->shipping_postcode }}<br>
                Tax Id : {{ $member->user_tax_Id }}
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12">
                <h3 class="box-title m-t-40"><i class="ti-time"></i> Order History</h3>
                <table class="table product-overview" id="myTable">
                  <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Total Price</th>
                        <th>Total Shipping</th>
                        <th>Order Flow</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                      $status = ['Cancel', 'Waiting Payment', 'Receive', 'Confirmed', 'Delivery', 'Processing'];
                    @endphp
                    @foreach($member->orders as $order)
                      <tr>
                        <td>{{ $order->od_code }}</td>
                        <td>{{ number_format((float)$order->od_price_total, 2) }}</td>
                        <td>{{ number_format((float)$order->od_price_shipping, 2) }}</td>
                        <td>{{ $status[$order->od_flow_status] }}</td>
                        <td>{{ date('d-m-Y H:i:s', strtotime($order->created_at)) }}</td>
                        <td>
                          <a href="{{ action('SiteControl\OrderController@show', ['id' => $order->id]) }}" class="text-inverse p-r-10" data-toggle="tooltip" title="Edit">
                            <i class="ti-eye"></i>
                          </a>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.right-sidebar -->
  </div>
@endsection
