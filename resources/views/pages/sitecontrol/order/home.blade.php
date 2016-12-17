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
                    <th>Total Price</th>
                    <th>Total Shipping</th>
                    <th>Order Flow</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($orders as $order)
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
              </tbody>
          </table>
          <div class="text-right">
            {{ $orders->links() }}
        </div>
      </div>
    </div>
  </div>
@endsection
@section('script_footer')
  @if(request()->getQueryString() == 'delete')
    <script>actionDelete();</script>
  @elseif(request()->getQueryString() == 'create')
    <script>actionCreate();</script>
  @elseif(request()->getQueryString() == 'update')
    <script>actionUpdate();</script>
  @endif
  </script>
@endsection