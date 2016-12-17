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
                                             required=""
                                             value="{{ $variant['vr_name'] or '' }}">
                                    </div>
                                  </div>
                                  {{-- <div class="col-md-6">
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
                                  </div> --}}
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="control-label">Variant Text Or Size</label>
                                      <input type="text" id="text" name="text" class="form-control"
                                             placeholder="Variant Size"
                                             required=""
                                             value="{{ $variant['vr_text'] or '' }}">
                                    </div>
                                  </div>
                                </div>
                                <input type="hidden" name="type" value="1"> {{-- Text Type --}}
                                {{-- <div class="row">
                                  <div class="col-lg-12">
                                    <label class="control-label">Variant Image</label>
                                    <div id="dropbox" data-url="/sitecontrol/product/uploadimages">
                                      <span class="message">Drop images here to upload. <br /><i>(they will only be visible to you)</i></span>
                                    </div>
                                  </div>
                                  <div class="clearfix"></div>
                                </div> --}}
                                <hr>
                              </div>
                              {{ csrf_field() }}
                              <input type="hidden" name="id" value="{{ $variant['id'] or '' }}">
                              <div class="form-actions m-t-40">
                                <button type="submit" class="btn btn-success">
                                  <i class="fa fa-check"></i> Save
                                </button>
                                @if(!empty($variant['id']))
                                  {{ method_field('PUT') }}
                                  <a class="btn btn-default" href="{{ route('sitecontrol.variant.index') }}">
                                    <i class="fa fa-chevron-left"></i> Back
                                  </a>
                                @else
                                  <button type="reset" class="btn btn-default">
                                    <i class="fa fa-refresh"></i> Cancel
                                  </button>
                                @endif
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
