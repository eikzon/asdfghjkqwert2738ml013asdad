@extends('layout.sitecontrol')
@section('content')
  <div class="container-fluid">
                @include('common.sitecontrol.breadcrumb', ['page' => 'Order Detail'])
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="white-box">
                            <div class="">
                                <h2 class="m-b-0 m-t-0">Order ID: #{{ rand(1000, 99999) }}</h2>
                                <medium class="text-muted db">Create : {{ date('d/m/Y H:i') }}</medium>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <h4 class="box-title m-t-40"><i class="ti-home"></i> Shipping Address </h4>
                                        นาย ณรงค์ลักษณ์ พรามศรีกิต<br>
                                        <p>39 หมู่บ้าน เศรษฐกิจ แขวง บางแค เขต บางแค กรุงเทพมหานคร 10600</p>
                                        <h2 class="m-t-40">฿{{ number_format(rand(1000, 9999), 2) }} <small class="text-success">(36% Discount)</small></h2>
                                        <button class="btn btn-danger btn-rounded"> Cancel </button>
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
                                            @for($i = 1; $i <= 3; $i++)
                                              <tr>
                                                <td>#{{ rand(99, 9999) }}</td>
                                                <td>{{ $name[$i] }}</td>
                                                <td><img width="60" src="{{ asset('images/products/img-' . $i . '.jpg') }}"></td>
                                                <td>White</td>
                                                <td>{{ number_format(rand(100, 1000), 2) }}</td>
                                                <td>{{ rand(1, 50) }}</td>
                                                <td>{{ number_format(rand(1000, 9999), 2) }}</td>
                                              </tr>
                                            @endfor
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
                                                        <td> ฿{{ number_format(rand(1000, 9999), 2) }} </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Shipping Price</td>
                                                        <td> ฿100 </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Grand Total Price</td>
                                                        <td> ฿{{ number_format(rand(1000, 9999), 2) }} </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <h3 class="box-title m-t-40"><i class="ti-layout-list-thumb"></i> Order Flow</h3>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td width="390">19-11-2016 09:013</td>
                                                        <td> Processing </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="390">18-11-2016 17:29</td>
                                                        <td> Payment Confirm </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="390">17-11-2016 10:09</td>
                                                        <td> Create Order </td>
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
