@extends('layout.sitecontrol')
@section('content')
  <div class="container-fluid">
      @include('common.sitecontrol.breadcrumb', ['page' => 'Variant List'])
      <!-- /.row -->
      <div class="row">
          <div class="col-md-12">
              <div class="panel panel-default">
                  <div class="panel-heading"> Create/Edit Variant</div>
                  <div class="panel-wrapper collapse in" aria-expanded="true">
                      <div class="panel-body">
                          <form action="{{ route('sitecontrol.variant.' . $state, $variant['id']) }}" method="post">
                              <div class="form-body">
                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label class="control-label">Variant Name</label>
                                        <input type="text" id="name" name="name" class="form-control"
                                               placeholder="Variant Name"
                                               value="{{ $variant['vr_name'] or '' }}">
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label class="control-label">Variant Type</label>
                                        <div class="radio-list">
                                          <label class="radio-inline">
                                            <div class="radio radio-info">
                                              <input type="radio" name="type" id="type-text" value="1"
                                              @if($variant['vr_type'] != 2) checked @endif>
                                              <label for="type-text">Text or Size</label>
                                            </div>
                                          </label>
                                          <label class="radio-inline p-0">
                                            <div class="radio radio-info">
                                              <input type="radio" name="type" id="type-image" value="2"
                                              @if($variant['vr_type'] === 2) checked @endif>
                                              <label for="type-image">Image</label>
                                            </div>
                                          </label>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label class="control-label">Variant Text Or Size</label>
                                        <input type="text" id="text" name="text" class="form-control"
                                               placeholder="Variant Size"
                                               value="{{ $variant['vr_text'] or '' }}">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-3">
                                      <h3 class="box-title m-t-20">Upload Image</h3>
                                      <div class="product-img">
                                        <img src="../plugins/images/chair.jpg">
                                        <div class="pro-img-overlay"><a href="javascript:void(0)" class="bg-info"><i class="ti-marker-alt"></i></a> <a href="javascript:void(0)" class="bg-danger"><i class="ti-trash"></i></a></div>
                                        <div class="fileupload btn btn-info waves-effect waves-light"><span><i class="ion-upload m-r-5"></i>Upload Anonther Image</span>
                                            <input type="file" class="upload"> </div>
                                      </div>
                                    </div>
                                  </div>
                                  <hr>
                                </div>
                                {{ csrf_field() }}
                                @if(!empty($variant['id'])) {{ method_field('PUT') }} @endif
                              <input type="hidden" name="id" value="{{ $variant['id'] or '' }}">
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
