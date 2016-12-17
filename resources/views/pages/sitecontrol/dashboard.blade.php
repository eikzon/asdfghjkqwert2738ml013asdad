@extends('layout.sitecontrol')
@section('content')
  <div class="container-fluid">
    @include('common.sitecontrol.breadcrumb', [
      'page'        => 'Dashboard Statistic',
      'displayTime' => true
    ])
    <div class="row">
      @include('common.column.three', [
        'color'      => 'success',
        'title'      => 'Order Receive',
        'short_desc' => 'Total Order',
        'percent'    => '20%',
        'summary'    => $count['order'],
        'icon'       => 'shopping-cart'
      ])
      @include('common.column.three', [
        'color'      => 'danger',
        'title'      => 'Member Register',
        'short_desc' => 'All Member Register',
        'percent'    => '2%',
        'summary'    => $count['member'],
        'icon'       => 'user'
      ])
      @include('common.column.three', [
        'color'      => 'info',
        'title'      => 'Summary Products',
        'short_desc' => 'All Product',
        'percent'    => '100%',
        'summary'    => $count['product'],
        'icon'       => 'gift'
      ])
    </div>
    <div class="row">
      <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
        <div class="white-box">
          <h3 class="box-title">Before Out of Stock</h3>
          <div class="table-responsive">
            <table class="table product-overview">
              <thead>
                <tr>
                  <th>Code</th>
                  <th>Name</th>
                  <th>Image</th>
                  <th>Price</th>
                  <th>Stock</th>
                  <th>Date</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($products as $product)
                  <tr>
                    <td>{{ $product['pd_code'] }}</td>
                    <td>{{ $product['pd_name'] }}</td>
                    <td>
                      @if(!empty($product['images'][0]))
                        <img width="100" src="{{ asset('images/products/' . $product['images'][0]['image']) }}">
                      @endif
                    </td>
                    <td>{{ number_format($product['pd_price']) }}</td>
                    <td>{{ number_format($product['pd_stock']) }}</td>
                    <td>{{ date('d/m/Y H:i', strtotime($product['created_at'])) }}</td>
                    <td>
                      <span class="label label-{{ config('website.product.status.color.' . $product['pd_status']) }} font-weight-100">
                        {{ config('website.product.status.text.' . $product['pd_status']) }}
                      </span>
                    </td>
                    <td>
                      <a href="{{ action('SiteControl\ProductController@edit', ['id' => $product['id']]) }}"
                         class="text-inverse p-r-10"
                         data-toggle="tooltip"
                         title="Edit">
                        <i class="ti-marker-alt"></i>
                      </a>
                      <a style="cursor:pointer;" onclick="$(this).find('form').submit();">
                        <i class="ti-trash"></i>
                        <form action="{{ action('SiteControl\ProductController@destroy', $product['id']) }}" method="POST" name="delete_item" style="display:none">
                           <input type="hidden" name="_method" value="delete">
                           <input type="hidden" name="_token" value="{{csrf_token()}}">
                        </form>
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
