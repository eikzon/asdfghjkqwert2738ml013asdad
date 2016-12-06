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
                Mobile : {{ $member->tel }}
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12">
                <h3 class="box-title m-t-40"><i class="ti-time"></i> Products In Order</h3>
                <table class="table product-overview" id="myTable">
                  <thead>
                    <tr>
                        <th>Customer</th>
                        <th>Order ID</th>
                        <th>Total Price</th>
                        <th>Quantity</th>
                        <th>Order Flow</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                      $name = ['Elsa', 'Martin', 'Minizon', 'Rider', 'Banky', 'Rolla'];
                      $status = ['Waiting Payment', 'Cancel', 'Receive', 'Confirmed', 'Delivery', 'Processing'];
                    @endphp
                    @for($i = 1; $i <= 5; $i++)
                      <tr>
                        <td>{{ $name[$i] }}</td>
                        <td>#{{ rand(99, 9999) }}</td>
                        <td>{{ number_format(rand(1000, 9999), 2) }}</td>
                        <td>{{ rand(1, 50) }}</td>
                        <td>{{ $status[$i] }}</td>
                        <td>10-7-2016</td>
                        <td> <span class="label label-warning font-weight-100">Processing</span> </td>
                        <td>
                          <a href="{{ action('SiteControl\OrderController@show', ['id' => 1]) }}" class="text-inverse p-r-10" data-toggle="tooltip" title="Edit">
                            <i class="ti-eye"></i>
                          </a>
                        </td>
                      </tr>
                    @endfor
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
