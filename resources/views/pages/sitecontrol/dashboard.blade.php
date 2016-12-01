@extends('layout.sitecontrol')
@section('content')
  <div class="container-fluid">
      @include('common.sitecontrol.breadcrumb', [
        'page'        => 'Dashboard Statistic',
        'displayTime' => true
      ])
      <div class="row">
        @include('common.column.three', [
          'color'   => 'success',
          'title'   => 'Order Receive',
          'short_desc' => 'Todays Order',
          'percent' => '20%',
          'summary' => '12,000',
          'icon' => 'shopping-cart'
        ])
        @include('common.column.three', [
          'color'   => 'danger',
          'title'   => 'Member Register',
          'short_desc' => 'Todays Register',
          'percent' => '2%',
          'summary' => '19',
          'icon' => 'user'
        ])
        @include('common.column.three', [
          'color'   => 'info',
          'title'   => 'Summary Product',
          'short_desc'   => 'All Product',
          'percent' => '100%',
          'summary' => '45',
          'icon' => 'gift'
        ])
      </div>
      <!-- row -->
      <div class="row">
          <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
              <div class="white-box">
                  <h3 class="box-title">Order In The Day {{ date('d/m/Y') }}</h3>
             <div class="table-responsive">
              <table class="table product-overview">
                <thead>
                  <tr>
                    <th>Customer</th>
                    <th>Order ID</th>
                    <th>Total Price</th>
                    <th>Quantity</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @for($order = 1; $order <= 5; $order++)
                  <tr>
                    <td>Steave Jobs</td>
                    <td>#{{ rand(10000,99999) }}</td>
                    <td>{{ number_format(rand(100,10000), 2) }}</td>
                    <td>{{ rand(10,40) }}</td>

                    <td>{{ rand(1,30) }}-{{ rand(1,12) }}-2016</td>
                    <td>
                      <span class="label label-warning font-weight-100">Waiting</span>
                    </td>
                    <td><a href="{{ action('SiteControl\OrderController@show', ['id' => 1]) }}" class="text-inverse p-r-10" data-toggle="tooltip" title="Edit" ><i class="ti-eye"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="ti-trash"></i></a></td>
                  </tr>
                  @endfor
                </tbody>
              </table>

              </div>
              </div>
          </div>
      </div>
    </div>
@endsection
