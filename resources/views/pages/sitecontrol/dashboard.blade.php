@extends('layout.sitecontrol')
@section('content')
  <div class="container-fluid">
    @include('common.sitecontrol.breadcrumb', [
      'page'        => 'Dashboard Statistic',
      'displayTime' => true
    ])
    {{-- <div class="row">
      @include('common.column.three', [
        'color'      => 'success',
        'title'      => 'Order Receive',
        'short_desc' => 'Total Orders',
        'percent'    => '20%',
        'summary'    => $count['order'],
        'icon'       => 'shopping-cart'
      ])
      @include('common.column.three', [
        'color'      => 'danger',
        'title'      => 'Member Register',
        'short_desc' => 'This Week',
        'percent'    => '2%',
        'summary'    => $count['member'],
        'icon'       => 'user'
      ])
      @include('common.column.three', [
        'color'      => 'info',
        'title'      => 'Summary Products',
        'short_desc' => 'All Products',
        'percent'    => '100%',
        'summary'    => $count['product'],
        'icon'       => 'gift'
      ])
    </div> --}}
    <div class="row">
      <div class="col-sm-6">
        <div class="white-box">
          <h3 class="box-title">
            <i class="linea-icon linea-ecommerce fa-fw" data-icon="P"></i>
            PRODUCT MOST VIEW OF THE WEEK
          </h3>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th width="40%">Name</th>
                  <th>Code</th>
                  <th>Display Time</th>
                  <th>View</th>
                </tr>
              </thead>
              <tbody>
                @foreach($productsDescView as $product)
                  <tr>
                    <td>{{ $product->pd_name }}</td>
                    <td>{{ $product->pd_code }}</td>
                    <td>{{ number_format($product->count_view) }}</td>
                    <td>
                      <a href="{{ route('sitecontrol.product.edit', [$product->id]) }}" class="text-inverse p-r-10" data-toggle="tooltip" title="Edit">
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
      <div class="col-sm-6">
        <div class="white-box">
          <h3 class="box-title"><i class="ti-user fa-fw"></i> MEMBER IN THIS WEEK</h3>
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Date/Time</th>
                  <th>View</th>
                </tr>
              </thead>
              <tbody>
                @foreach($members as $member)
                  <tr>
                    <td>{{ $member->first_name . ' ' . $member->last_name }}</td>
                    <td>
                      {{ $member->email }}
                    </td>
                    <td align="center">
                      <a href="{{ route('member_detail', [$member->id]) }}" class="text-inverse p-r-10" data-toggle="tooltip" title="Edit">
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
    <div class="row">
      <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
        <div class="white-box">
          <h3 class="box-title"><i class="linea-icon linea-elaborate fa-fw" data-icon="&#xe02f;"></i> Before Out of Stock <span class="text-danger">(below 50 ea just display)</span></h3>
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
                @if(!$productsOutOfStock->isEmpty())
                  @foreach($productsOutOfStock as $product)
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
                @else
                  <tr>
                    <td colspan="8" align="center">
                      Not have product stock below 50 ea.
                    </td>
                  </tr>
                @endif
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
        <div class="white-box">
          <h3 class="box-title"><i class="linea-icon linea-ecommerce fa-fw" data-icon="A"></i> Five Orders Latest</h3>
          <div class="table-responsive">
            <table class="table product-overview" id="myTable">
              <thead>
                <tr>
                    <th>Customer</th>
                    <th>Order ID</th>
                    <th>Total Price</th>
                    <th>Total Shipping</th>
                    <th>Order Flow</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @if(!$ordersLatest->isEmpty())
                  @foreach($ordersLatest as $order)
                    @php
                      $status = config('website.order.status.' . $order->od_flow_status);
                    @endphp
                    <tr>
                      <td>{{ $order['members']['first_name'] . ' ' . $order['members']['last_name'] }}</td>
                      <td>{{ $order->od_code }}</td>
                      <td>{{ number_format((float)$order->od_price_total, 2) }}</td>
                      <td>{{ number_format((float)$order->od_price_shipping, 2) }}</td>
                      <td>{{ $status }}</td>
                      <td>{{ date('d-m-Y H:i:s', strtotime($order->created_at)) }}</td>
                      <td>
                        <a href="{{ action('SiteControl\OrderController@show', ['id' => $order->id]) }}" class="text-inverse p-r-10" data-toggle="tooltip" title="Edit">
                          <i class="ti-eye"></i>
                        </a>
                        <a href="javascript:void(0)" class="text-inverse js-delete" data-url="{{ action('SiteControl\OrderController@destroy', ['id' => $order->id]) }}" title="Delete" data-toggle="tooltip">
                          <i class="ti-trash"></i>
                        </a>
                      </td>
                    </tr>
                  @endforeach
                @else
                  <tr>
                    <td colspan="7" align="center">
                      Order Empty !
                    </td>
                  </tr>
                @endif
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
