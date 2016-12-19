@extends('layout.sitecontrol')
@section('content')
  <div class="container-fluid">
      @include('common.sitecontrol.breadcrumb', ['page' => 'Plat Form'])
      <!-- /.row -->
      <div class="row">
          <div class="col-md-12">
            <form action="{{ route('sitecontrol.platform.update', 1) }}" method="post" enctype="multipart/form-data">
              <div class="panel panel-default">
                <div class="panel-heading">PLAT FORM LINE 1</div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">

                            <div class="form-body">
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="control-label">Title</label>
                                      <input type="text" name="pt_g_1_title" class="form-control"
                                             placeholder="Name"
                                             required=""
                                             value="{{ $platform['pt_g_1_title'] or '' }}">
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="control-label">Description</label>
                                      <input type="text" name="pt_g_1_description" class="form-control"
                                             placeholder="Name"
                                             required=""
                                             value="{{ $platform['pt_g_1_description'] or '' }}">
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="control-label">Group 1 Images <small class="text-danger">(Recommend : w 200px * h 150px)</small></label>
                                      <div class="product-img">
                                        @if(!empty($platform['ct_image']))
                                          <img src="{{ asset('images/' . $platform['ct_image']) }}"
                                               width="200" height="150">
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
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="control-label">Group 2 Images <small class="text-danger">(Recommend : w 200px * h 150px)</small></label>
                                      <div class="product-img">
                                        @if(!empty($platform['ct_image']))
                                          <img src="{{ asset('images/' . $platform['ct_image']) }}"
                                               width="200" height="150">
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
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="control-label">Group 1</label>
                                      <select class="form-control" name="group_1_1" data-placeholder="Choose a Group" tabindex="1">
                                          <option value="0">None Group</option>
                                          @if(!empty($groups))
                                            @foreach($groups as $group)
                                              <option value="{{ $group['id'] }}"
                                                @if($group['id'] == $platform['group_1_1'])
                                                  selected
                                                @endif
                                                >
                                                {{ $group['pg_name'] }}
                                              </option>
                                            @endforeach
                                          @endif
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="control-label">Group 2</label>
                                      <select class="form-control" name="group_1_2" data-placeholder="Choose a Group" tabindex="1">
                                          <option value="0">None Group</option>
                                          @if(!empty($groups))
                                            @foreach($groups as $group)
                                              <option value="{{ $group['id'] }}"
                                                @if($group['id'] == $platform['group_1_2'])
                                                  selected
                                                @endif
                                                >
                                                {{ $group['pg_name'] }}
                                              </option>
                                            @endforeach
                                          @endif
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <hr>
                              </div>
                    </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">Plat Form Line 2</div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                            <div class="form-body">
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="control-label">Title</label>
                                      <input type="text" name="pt_g_2_title" class="form-control"
                                             placeholder="Name"
                                             required=""
                                             value="{{ $platform['pt_g_2_title'] or '' }}">
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="control-label">Description</label>
                                      <input type="text" name="pt_g_2_description" class="form-control"
                                             placeholder="Name"
                                             required=""
                                             value="{{ $platform['pt_g_2_description'] or '' }}">
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="control-label">Group 1 Images <small class="text-danger">(Recommend : w 200px * h 150px)</small></label>
                                      <div class="product-img">
                                        @if(!empty($platform['ct_image']))
                                          <img src="{{ asset('images/' . $platform['ct_image']) }}"
                                               width="200" height="150">
                                        @endif
                                        <div class="fileupload btn btn-info waves-effect waves-light">
                                          <span>
                                            <i class="ion-upload m-r-5"></i>
                                            Upload Anonther Image
                                          </span>
                                          <input type="file" name="image" class="upload">
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="control-label">Group 2 Images  <small class="text-danger">(Recommend : w 200px * h 150px)</small></label>
                                      <div class="product-img">
                                        @if(!empty($platform['ct_image']))
                                          <img src="{{ asset('images/' . $platform['ct_image']) }}"
                                               width="200" height="150">
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
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="control-label">Group 1</label>
                                      <select class="form-control" name="group_2_1" data-placeholder="Choose a Group" tabindex="1">
                                          <option value="0">None Group</option>
                                          @if(!empty($groups))
                                            @foreach($groups as $group)
                                              <option value="{{ $group['id'] }}"
                                                @if($group['id'] == $platform['group_2_1'])
                                                  selected
                                                @endif
                                                >
                                                {{ $group['pg_name'] }}
                                              </option>
                                            @endforeach
                                          @endif
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="control-label">Group 2</label>
                                      <select class="form-control" name="group_2_2" data-placeholder="Choose a Group" tabindex="1">
                                          <option value="0">None Group</option>
                                          @if(!empty($groups))
                                            @foreach($groups as $group)
                                              <option value="{{ $group['id'] }}"
                                                @if($group['id'] == $platform['group_2_2'])
                                                  selected
                                                @endif
                                                >
                                                {{ $group['pg_name'] }}
                                              </option>
                                            @endforeach
                                          @endif
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="control-label">Group 3 Images  <small class="text-danger">(Recommend : w 200px * h 150px)</small></label>
                                      <div class="product-img">
                                        @if(!empty($platform['ct_image']))
                                          <img src="{{ asset('images/' . $platform['ct_image']) }}"
                                               width="200" height="150">
                                        @endif
                                        <div class="fileupload btn btn-info waves-effect waves-light">
                                          <span>
                                            <i class="ion-upload m-r-5"></i>Upload Anonther Image
                                          </span>
                                          <input type="file" name="image" class="upload">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label">Group 3</label>
                                      <select class="form-control" name="group_2_3" data-placeholder="Choose a Group" tabindex="1">
                                          <option value="0">None Group</option>
                                          @if(!empty($groups))
                                            @foreach($groups as $group)
                                              <option value="{{ $group['id'] }}"
                                                @if($group['id'] == $platform['group_2_3'])
                                                  selected
                                                @endif
                                                >
                                                {{ $group['pg_name'] }}
                                              </option>
                                            @endforeach
                                          @endif
                                      </select>
                                    </div>
                                  </div>
                                </div>
                              <hr>
                            </div>
                    </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">PLAT FORM LINE 3</div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                            <div class="form-body">
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="control-label">Title</label>
                                      <input type="text" name="pt_g_3_title" class="form-control"
                                             placeholder="Name"
                                             required=""
                                             value="{{ $platform['pt_g_3_title'] or '' }}">
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="control-label">Description</label>
                                      <input type="text" name="pt_g_3_description" class="form-control"
                                             placeholder="Name"
                                             required=""
                                             value="{{ $platform['pt_g_3_description'] or '' }}">
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="control-label">Group 1 Images <small class="text-danger">(Recommend : w 200px * h 150px)</small></label>
                                      <div class="product-img">
                                        @if(!empty($platform['ct_image']))
                                          <img src="{{ asset('images/' . $platform['ct_image']) }}"
                                               width="200" height="150">
                                        @endif
                                        <div class="fileupload btn btn-info waves-effect waves-light">
                                          <span>
                                            <i class="ion-upload m-r-5"></i>
                                            Upload Anonther Image
                                          </span>
                                          <input type="file" name="image" class="upload">
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="control-label">Group 2 Images  <small class="text-danger">(Recommend : w 200px * h 150px)</small></label>
                                      <div class="product-img">
                                        @if(!empty($platform['ct_image']))
                                          <img src="{{ asset('images/' . $platform['ct_image']) }}"
                                               width="200" height="150">
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
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="control-label">Group 1</label>
                                      <select class="form-control" name="group_3_1" data-placeholder="Choose a Group" tabindex="1">
                                          <option value="0">None Group</option>
                                          @if(!empty($groups))
                                            @foreach($groups as $group)
                                              <option value="{{ $group['id'] }}"
                                                @if($group['id'] == $platform['group_3_1'])
                                                  selected
                                                @endif
                                                >
                                                {{ $group['pg_name'] }}
                                              </option>
                                            @endforeach
                                          @endif
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="control-label">Group 2</label>
                                      <select class="form-control" name="group_3_2" data-placeholder="Choose a Group" tabindex="1">
                                          <option value="0">None Group</option>
                                          @if(!empty($groups))
                                            @foreach($groups as $group)
                                              <option value="{{ $group['id'] }}"
                                                @if($group['id'] == $platform['group_3_2'])
                                                  selected
                                                @endif
                                                >
                                                {{ $group['pg_name'] }}
                                              </option>
                                            @endforeach
                                          @endif
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="control-label">Group 3 Images  <small class="text-danger">(Recommend : w 200px * h 150px)</small></label>
                                      <div class="product-img">
                                        @if(!empty($platform['ct_image']))
                                          <img src="{{ asset('images/' . $platform['ct_image']) }}"
                                               width="200" height="150">
                                        @endif
                                        <div class="fileupload btn btn-info waves-effect waves-light">
                                          <span>
                                            <i class="ion-upload m-r-5"></i>Upload Anonther Image
                                          </span>
                                          <input type="file" name="image" class="upload">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label">Group 3</label>
                                      <select class="form-control" name="group_3_3" data-placeholder="Choose a Group" tabindex="1">
                                          <option value="0">None Group</option>
                                          @if(!empty($groups))
                                            @foreach($groups as $group)
                                              <option value="{{ $group['id'] }}"
                                                @if($group['id'] == $platform['group_3_3'])
                                                  selected
                                                @endif
                                                >
                                                {{ $group['pg_name'] }}
                                              </option>
                                            @endforeach
                                          @endif
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <hr>
                              </div>
                              {{ csrf_field() }}
                            <div class="form-actions m-t-40">
                              <button type="submit" class="btn btn-success">
                                <i class="fa fa-check"></i> Save
                              </button>
                              {{ method_field('PUT') }}
                            </div>

                    </div>
                </div>
              </div>
            </form>
          </div>
      </div>
  </div>
@endsection
