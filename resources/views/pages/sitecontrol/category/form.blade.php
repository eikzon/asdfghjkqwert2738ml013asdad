@extends('layout.sitecontrol')
@section('content')
  <div class="container-fluid">
      @include('common.sitecontrol.breadcrumb', ['page' => 'Product Category List'])
      <!-- /.row -->
      <div class="row">
          <div class="col-md-12">
              <div class="panel panel-default">
                  <div class="panel-heading"> Edit Product Category</div>
                  <div class="panel-wrapper collapse in" aria-expanded="true">
                      <div class="panel-body">
                          <form action="{{ route('sitecontrol.category.' . $state, $category['id']) }}" method="post" enctype="multipart/form-data">
                              <div class="form-body">
                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label class="control-label">Category Name</label>
                                        <input type="text" id="name" name="name" class="form-control"
                                               placeholder="Name"
                                               required=""
                                               value="{{ $category['ct_name'] or '' }}">
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label class="control-label">Category Images</label>
                                        <div class="product-img">
                                          @if(!empty($category['ct_image']))
                                            <img src="{{ asset('images/' . $category['ct_image']) }}">
                                          @endif
                                          <div class="fileupload btn btn-info waves-effect waves-light">
                                            <span>
                                              <i class="ion-upload m-r-5"></i>Upload Anonther Image
                                            </span>
                                            <input type="file" name="image" class="upload">
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <hr>
                                </div>
                                {{ csrf_field() }}
                              <input type="hidden" name="id" value="{{ $category['id'] or '' }}">
                              <div class="form-actions m-t-40">
                                <button type="submit" class="btn btn-success">
                                  <i class="fa fa-check"></i> Save
                                </button>
                                @if(!empty($category['id']))
                                  {{ method_field('PUT') }}
                                  <a class="btn btn-default" href="{{ route('sitecontrol.category.index') }}">
                                    <i class="fa fa-chevron-left"></i> Back
                                  </a>
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
