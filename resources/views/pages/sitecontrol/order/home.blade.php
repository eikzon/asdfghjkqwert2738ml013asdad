@extends('layout.sitecontrol')
@section('content')
  <div class="container-fluid">
    @include('common.sitecontrol.breadcrumb', ['page' => 'Order List'])

    <div class="row">
      <div class="white-box">
        <div class="table-responsive">
          <table class="table product-overview" id="myTable">
              <thead>
                <tr>
                    <th>Customer</th>
                    <th>Order ID</th>
                    <th>Photo</th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @for($i = 1; $i <= 5; $i++)
                  <tr>
                    <td>Steave Jobs</td>
                    <td>#85457898</td>
                    <td> <img src="../plugins/images/chair.jpg" alt="iMac" width="80"> </td>
                    <td>Rounded Chair</td>
                    <td>20</td>
                    <td>10-7-2016</td>
                    <td> <span class="label label-success font-weight-100">Paid</span> </td>
                    <td>
                      <a href="{{ action('SiteControl\OrderController@show', ['id' => 1]) }}" class="text-inverse p-r-10" data-toggle="tooltip" title="Edit">
                        <i class="ti-marker-alt"></i>
                      </a>
                      <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip">
                        <i class="ti-trash"></i>
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
@endsection
