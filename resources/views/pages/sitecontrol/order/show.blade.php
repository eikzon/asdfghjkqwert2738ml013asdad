@extends('layout.sitecontrol')
@section('content')
  <div class="container-fluid">
    @include('common.sitecontrol.breadcrumb', ['page' => 'Order Detail'])
    <!-- /.row -->
    <div class="row">
      <div class="col-lg-12">
        <div class="white-box">
          <div class="">
            <h2 class="m-b-0 m-t-0">Order ID: {{ $order->od_code }}</h2>
            <medium class="text-muted db">Create : {{ date('d/m/Y H:i:s', strtotime($order->created_at)) }}</medium>
            <hr>
            <div class="row">
              @php
                $shipping = '';
                if(!empty($order['orderAddress']->first()))
                {
                  $shipping = $order['orderAddress'][0]['oa_address'] . ' ' 
                            . $order['orderAddress'][0]['oa_province'] . ' ' 
                            . $order['orderAddress'][0]['oa_district'] . ' ' . 
                              $order['orderAddress'][0]['oa_postcode'];
                }
              @endphp
              <div class="col-lg-6 col-md-6 col-sm-6">
                  <h4 class="box-title m-t-40"><i class="ti-home"></i> Shipping Address </h4>
                  {{ (!empty($order['orderAddress']->first())) ? $order['orderAddress'][0]['oa_first_name'] . ' ' . $order['orderAddress'][0]['oa_last_name'] : '' }}<br>
                  <p>{{ $shipping }}</p>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6">
                  <h4 class="box-title m-t-40"><i class="ti-home"></i> Billing Address </h4>
                  <p>{{ (!empty($order['orderAddress']->first()->oa_isbilling_address) ? $order['orderAddress'][0]['oa_billign_address'] : $shipping) }}</p>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12">
                  <h3 class="box-title m-t-40"><i class="ti-gift"></i> Products In Order</h3>
                  <table class="table product-overview" id="myTable">
                    <thead>
                      <tr>
                          <th>Code</th>
                          <th>Image</th>
                          <th>Name</th>
                          <th>Price/Quantity</th>
                          <th>Quantity</th>
                          <th>Summary</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($order['productLists'] as $index => $product)
                        @php
                          $productPrice    = $product['products'][0]['pd_price'];
                          $productDiscount = $product['products'][0]['pd_price_discount'];
                          $pricePerUnit    = (!empty($productDiscount) ? $productDiscount : $productPrice);
                        @endphp
                        <tr>
                          <td>{{ $product['products'][0]['pd_code'] }}</td>
                          <td><img width="60" src="{{ asset('images/products/' . $product['products'][0]['images'][0]['image']) }}"></td>
                          <td>{{ $product['products'][0]['pd_name'] }}</td>
                          <td>{{ number_format((float)$pricePerUnit, 2) }}</td>
                          <td>{{ $product->od_quantity }}</td>
                          <td>{{ number_format($product->od_price, 2) }}</td>
                        </tr>
                      @endforeach
                    </tbody>
                </table>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12">
                  <h3 class="box-title m-t-40"><i class="ti-money"></i> Order Summary</h3>
                  <div class="table-responsive">
                      <table class="table">
                          <tbody>
                              <tr>
                                  <td width="390">Total Price</td>
                                  <td> ฿{{ number_format($order->od_price_total, 2) }} </td>
                              </tr>
                              <tr>
                                  <td>Shipping Price</td>
                                  <td> ฿{{ number_format($order->od_price_shipping, 2) }} </td>
                              </tr>
                              <tr>
                                  <td>Grand Total Price</td>
                                  <td> ฿{{ number_format($order->od_price_total + $order->od_price_shipping, 2) }} </td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12">
                <h3 class="box-title m-t-40"><i class="ti-layout-list-thumb"></i> Order Flow</h3>
                <div class="table-responsive">
                  @php
                    $status = ['Cancel', 'Waiting Payment', 'Receive', 'Confirmed', 'Delivery', 'Processing'];
                  @endphp
                  <table class="table">
                    <tbody>
                      <tr>
                        <td width="390">{{ $order->updated_at }}</td>
                        <td>
                          <select class="form-control js-change-flow-status" name="od_flow_status" data-placeholder="Choose a status" tabindex="1" data-url="{{ action('SiteControl\OrderController@update', ['id' => $order->id]) }}">
                            @if(!empty($status))
                              @foreach($status as $index => $value)
                                <option value="{{ $index }}"
                                  @if($index == $order->od_flow_status)
                                    selected
                                  @endif
                                  >
                                  {{ $value }}
                                </option>
                              @endforeach
                            @endif
                          </select>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.right-sidebar -->
  </div>
@endsection
