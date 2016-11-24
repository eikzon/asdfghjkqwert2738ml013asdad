@extends('layout.sitecontrol')
@section('content')
  <div class="container-fluid">
      @include('common.sitecontrol.breadcrumb', ['page' => 'Product List'])
      <!-- /.row -->
      <div class="row">
          <div class="col-md-12">
              <div class="panel panel-default">
                  <div class="panel-heading"> Create/Edit Product</div>
                  <div class="panel-wrapper collapse in" aria-expanded="true">
                      <div class="panel-body">
                          <form action="#">
                              <div class="form-body">
                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label class="control-label">Product Name</label>
                                        <input type="text" id="firstName" class="form-control" placeholder="Rounded Chair">
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label class="control-label">Short Description</label>
                                        <input type="text" id="lastName" class="form-control" placeholder="globe type chair for rest">
                                      </div>
                                    </div>
                                  </div>
                                  <h3 class="box-title m-t-40">Product Description</h3>
                                  <div class="row">
                                      <div class="col-md-12 ">
                                          <div class="form-group">
                                              <textarea class="form-control" rows="4">Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. but the majority have suffered alteration in some form, by injected humour</textarea>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label class="control-label">Original Price</label>
                                        <div class="input-group">
                                          <div class="input-group-addon"><i class="ti-money"></i></div>
                                          <input type="text" class="form-control" id="exampleInputuname" placeholder="153">
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label class="control-label">Discount Price</label>
                                        <div class="input-group">
                                          <div class="input-group-addon"><i class="ti-cut"></i></div>
                                          <input type="text" class="form-control" id="exampleInputuname" placeholder="153">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label class="control-label">Discount Text</label>
                                        <input type="text" id="lastName" class="form-control" placeholder="globe type chair for rest">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label class="control-label">Badges Icon</label>
                                        <select class="form-control" data-placeholder="Choose a Category" tabindex="1">
                                            <option value="Category 1">Default</option>
                                            <option value="Category 2">New</option>
                                            <option value="Category 3">Out of Stock</option>
                                        </select>
                                      </div>
                                    </div>
                                      <!--/span-->
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label class="control-label">Status</label>
                                              <div class="radio-list">
                                                  <label class="radio-inline p-0">
                                                      <div class="radio radio-info">
                                                          <input type="radio" name="radio" id="radio1" value="option1" checked>
                                                          <label for="radio1">Active</label>
                                                      </div>
                                                  </label>
                                                  <label class="radio-inline">
                                                      <div class="radio radio-info">
                                                          <input type="radio" name="radio" id="radio2" value="option2">
                                                          <label for="radio2">Non Active</label>
                                                      </div>
                                                  </label>
                                                  <label class="radio-inline p-0">
                                                      <div class="radio radio-info">
                                                          <input type="radio" name="radio" id="radio1" value="option1">
                                                          <label for="radio1">Display & Out of Stock</label>
                                                      </div>
                                                  </label>
                                              </div>
                                          </div>
                                      </div>
                                      <!--/span-->
                                  </div>
                                  <!--/row-->
                                  <div class="row">
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label>Price</label>
                                              <div class="input-group">
                                                  <div class="input-group-addon"><i class="ti-money"></i></div>
                                                  <input type="text" class="form-control" id="exampleInputuname" placeholder="153"> </div>
                                          </div>
                                      </div>
                                      <!--/span-->
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label>Discount</label>
                                              <div class="input-group">
                                                  <div class="input-group-addon"><i class="ti-cut"></i></div>
                                                  <input type="text" class="form-control" id="exampleInputuname" placeholder="36%"> </div>
                                          </div>
                                      </div>
                                      <!--/span-->
                                  </div>
                                  <!--/row-->
                                  <div class="row">
                                      <div class="col-md-3">
                                          <h3 class="box-title m-t-20">Upload Image</h3>
                                          <div class="product-img">
                                            {{-- <img src="../plugins/images/chair.jpg">
                                            <div class="pro-img-overlay"><a href="javascript:void(0)" class="bg-info"><i class="ti-marker-alt"></i></a> <a href="javascript:void(0)" class="bg-danger"><i class="ti-trash"></i></a></div> --}}
                                            <div class="fileupload btn btn-info waves-effect waves-light"><span><i class="ion-upload m-r-5"></i>Upload Anonther Image</span>
                                                <input type="file" class="upload"> </div>
                                          </div>
                                      </div>
                                  </div>
                                  <br>
                                  <hr>
                                  <h3 class="box-title">
                                    <i class="ti-paint-roller"></i>
                                    Variant Product
                                  </h3>
                                  <hr>
                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label class="control-label">Select Variant</label>
                                        <select class="form-control" data-placeholder="Choose a Category" tabindex="1">
                                            <option value="Category 1">None</option>
                                            <option value="Category 2">Red</option>
                                            <option value="Category 3">Yellow</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label class="control-label">Stock</label>
                                        <input type="text" id="lastName" class="form-control" placeholder="globe type chair for rest">
                                      </div>
                                    </div>
                                  </div>
                                  <hr> </div>
                              <div class="form-actions m-t-40">
                                  <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                  <button type="button" class="btn btn-default">Cancel</button>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
