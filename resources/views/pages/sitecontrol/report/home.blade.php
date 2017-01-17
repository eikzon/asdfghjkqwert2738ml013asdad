@extends('layout.sitecontrol')
@section('content')
  <div class="container-fluid">
    @include('common.sitecontrol.breadcrumb', [
      'page'                => 'Report'
    ])
    <div class="row">
      <div class="col-md-12 col-xs-12">
          <div class="white-box">
              <h3 class="box-title">Choose Report (Excel.xls)</h3>
              <ul class="nav nav-tabs" role="tablist">
                  <li role="presentation" class="active">
                    <a href="#iprofile" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false">
                      <span><i class="fa fa-file-text-o"></i></span> Order
                    </a>
                  </li>
                  <li role="presentation" class="">
                    <a href="#ihome" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true">
                      <span><i class="fa fa-cubes"></i></span> Product
                    </a>
                  </li>
                  <li role="presentation" class="">
                    <a href="#sales" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true">
                      <span><i class="fa fa-star-o"></i></span> Sales List
                    </a>
                  </li>
              </ul>
              <div class="tab-content">
                  <div role="tabpanel" class="tab-pane active" id="iprofile">
                      <div class="col-md-7 col-sm-5">
                          <form action="{{ route('st-report-order') }}" method="POST" id="report-order">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Period Date</label>
                              <div class="example">
                                <input class="form-control input-daterange-datepicker" type="text" name="daterange" value="{{ date('m-d-Y') . ' - ' . date('m-d-Y') }}"/>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-xs-6">
                                <div class="form-group">
                                  <label class="control-label">Order Type</label>
                                  <select class="form-control" name="type" tabindex="1">
                                    <option value="">All</option>
                                    @foreach(config('website.order.type') as $index => $type)
                                      <option value="{{ $index }}">
                                        {{ $type }}
                                      </option>
                                    @endforeach
                                  </select>
                                </div>
                              </div>
                              <div class="col-xs-6">
                                <div class="form-group">
                                  <label class="control-label">Order Status</label>
                                  <select class="form-control" name="status" tabindex="1">
                                    <option value="">All</option>
                                    @foreach(config('website.order.status') as $index => $status)
                                      <option value="{{ $index }}">
                                        {{ $status }}
                                      </option>
                                    @endforeach
                                  </select>
                                </div>
                              </div>
                            </div>
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-info">Create Report</button>
                          </form>
                      </div>
                      <div class="col-md-4 col-sm-5 pull-right">
                          <h3 class="box-title m-t-10">Report Info</h3>
                          <p>Report just export to excel file (.xls).</p><p>You can used Microsoft Excel program or google doc on web browser for open this report file.</p>
                      </div>
                      <div class="clearfix"></div>
                  </div>
                  <div role="tabpanel" class="tab-pane" id="ihome">
                    <div class="col-md-7 col-sm-5">
                          <form action="{{ route('st-report-product') }}" method="POST" id="report-product">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Product Create Date</label>
                              <div class="example">
                                <input class="form-control input-daterange-datepicker" type="text" name="daterange" value="{{ date('m-d-Y') . ' - ' . date('m-d-Y') }}"/>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-xs-6">
                                <div class="form-group">
                                  <label class="control-label">Product Type</label>
                                  <select class="form-control" name="type" tabindex="1">
                                    <option value="">All</option>
                                    @foreach(config('website.product.status.text') as $index => $type)
                                      <option value="{{ $index }}">
                                        {{ $type }}
                                      </option>
                                    @endforeach
                                  </select>
                                </div>
                              </div>
                            </div>
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-info">Create Report</button>
                          </form>
                      </div>
                      <div class="col-md-4 col-sm-5 pull-right">
                          <h3 class="box-title m-t-10">Report Info</h3>
                          <p>Report just export to excel file (.xls).</p><p>You can used Microsoft Excel program or google doc on web browser for open this report file.</p>
                      </div>
                      <div class="clearfix"></div>
                  </div>
                  <div role="tabpanel" class="tab-pane" id="sales">
                      <div class="col-md-7 col-sm-5">
                          <form action="{{ route('st-report-sales') }}" method="POST" id="report-order">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Period Date</label>
                              <div class="example">
                                <input class="form-control input-daterange-datepicker" type="text" name="daterange" value="{{ date('m-d-Y') . ' - ' . date('m-d-Y') }}"/>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-xs-6">
                                <div class="form-group">
                                  <label class="control-label">From Order Type</label>
                                  <select class="form-control" name="type" tabindex="1">
                                    <option value="">All</option>
                                    @foreach(config('website.order.type') as $index => $type)
                                      <option value="{{ $index }}">
                                        {{ $type }}
                                      </option>
                                    @endforeach
                                  </select>
                                </div>
                              </div>
                              <div class="col-xs-6">
                                <div class="form-group">
                                  <label class="control-label">From Order Status</label>
                                  <select class="form-control" name="status" tabindex="1">
                                    <option value="">All</option>
                                    @foreach(config('website.order.status') as $index => $status)
                                      <option value="{{ $index }}">
                                        {{ $status }}
                                      </option>
                                    @endforeach
                                  </select>
                                </div>
                              </div>
                            </div>
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-info">Create Report</button>
                          </form>
                      </div>
                      <div class="col-md-4 col-sm-5 pull-right">
                          <h3 class="box-title m-t-10">Report Info</h3>
                          <p>Report just export to excel file (.xls).</p><p>You can used Microsoft Excel program or google doc on web browser for open this report file.</p>
                      </div>
                      <div class="clearfix"></div>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>
@endsection
@section('script_footer')
<script>

$('.input-daterange-datepicker').daterangepicker({
          buttonClasses: ['btn', 'btn-sm'],
                applyClass: 'btn-danger',
                cancelClass: 'btn-inverse'
        });
</script>
@endsection
