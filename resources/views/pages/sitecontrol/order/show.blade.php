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
                          <div class="col-lg-6 col-md-6 col-sm-6">
                              <h4 class="box-title m-t-40"><i class="ti-home"></i> Shipping Address </h4>
                              นาย ณรงค์ลักษณ์ พรามศรีกิต<br>
                              <p>{{ $order['orderAddress'][0]['oa_address'] . ' ' 
                                  . $order['orderAddress'][0]['oa_alley'] . ' ' 
                                  . $order['orderAddress'][0]['oa_building'] . ' ' 
                                  . $order['orderAddress'][0]['oa_city'] . ' ' 
                                  . $order['orderAddress'][0]['oa_province'] . ' ' 
                                  . $order['orderAddress'][0]['oa_district'] . ' ' . 
                                    $order['orderAddress'][0]['oa_postcode'] }}</p>
                              <h2 class="m-t-40">฿{{ number_format($order->od_price_total, 2) }}
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6">
                              <h4 class="box-title m-t-40"><i class="ti-user"></i> Remark from User</h4>
                              <p>Please shipping to me at noon, Thank you.</p>
                          </div>
                          <div class="col-lg-12 col-md-12 col-sm-12">
                              <h3 class="box-title m-t-40"><i class="ti-gift"></i> Products In Order</h3>
                              <table class="table product-overview" id="myTable">
                                <thead>
                                  <tr>
                                      <th>Code</th>
                                      <th>Name</th>
                                      <th>Image</th>
                                      <th>Variant</th>
                                      <th>Price/Quantity</th>
                                      <th>Quantity</th>
                                      <th>Summary</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @php
                                    $name = ['Boot 1', 'Boot 2', 'Boot 3', 'Boot 4', 'Boot 5', 'Boot 6'];
                                  @endphp
                                  @foreach($order['productLists'] as $index => $product)
                                    <tr>
                                      <td>{{ $product['products'][0]['pd_code'] }}</td>
                                      <td>{{ $product['products'][0]['pd_name'] }}</td>
                                      <td><img width="60" src="{{ asset('images/products/' . $product['products'][0]['images'][0]['image']) }}"></td>
                                      <td>White</td>
                                      <td>{{ number_format((float)($product['products'][0]['pd_price'] - $product['products'][0]['pd_price_discount']), 2) }}</td>
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
                                              <td> {{ $status[$order->od_flow_status] }} </td>
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
