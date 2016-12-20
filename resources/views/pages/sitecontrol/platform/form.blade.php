@extends('layout.sitecontrol')
@section('content')
  <div class="container-fluid">
      @include('common.sitecontrol.breadcrumb', ['page' => 'Plat Form'])
      <!-- /.row -->
      <div class="row">
          <div class="col-md-12">
            <form action="{{ route('sitecontrol.platform.update', 1) }}" method="post" enctype="multipart/form-data">
              @for($line = 1; $line <= 6; $line++)
                <div class="panel panel-default">
                  <div class="panel-heading">Display Column {{ $line }}</div>
                  <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                      <div class="form-body">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="control-label">Title</label>
                                @php $title = 'pt_g_' . $line . '_title'; @endphp
                                <input type="text" name="{{ $title }}" class="form-control"
                                       placeholder="Name"
                                       value="{{ $platform[$title] or '' }}">
                              </div>
                              <hr>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="control-label">Description</label>
                                @php $description = 'pt_g_' . $line . '_description'; @endphp
                                <input type="text" name="{{ $description }}" class="form-control"
                                       placeholder="Name"
                                       value="{{ $platform[$description] or '' }}">
                              </div>
                              <hr>
                            </div>
                            @for($item = 1; $item <= 3; $item++)
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label class="control-label">Image <small class="text-danger">(w 340px * h 140px)</small></label>
                                  @php $image = 'pt_image_' . $line . '_' . $item; @endphp
                                  <div class="product-img">
                                    @if(!empty($platform[$image]))
                                      <img src="{{ asset('images/platform/items/' . $platform[$image]) }}"
                                           width="150">
                                    @endif
                                    <div class="fileupload btn btn-info waves-effect waves-light">
                                      <span>
                                        <i class="ion-upload m-r-5"></i>Upload Image
                                      </span>
                                      <input type="file" name="{{ $image }}" class="upload">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                {{-- <label class="control-label">Gen {{ $item }}</label> --}}
                                  @php $head = 'head_' . $line . '_' . $item ; @endphp
                                  <input type="text" name="{{ $head }}" class="form-control"
                                         placeholder="Generation Name"
                                         value="{{ $platform[$head] or '' }}">
                                </div>
                                <div class="form-group">
                                  <label class="control-label">Item Group {{ $item }}</label>
                                  @php $groupName = 'group_' . $line . '_' . $item;

                                   @endphp
                                  <select class="form-control" name="{{ $groupName }}" data-placeholder="Choose a Group" tabindex="1">
                                      <option value="0">None Group</option>
                                      @if(!empty($groups))
                                        @foreach($groups as $group)
                                          <option value="{{ $group['id'] }}"
                                            @if($group['id'] == $platform->{$groupName})
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
                            @endfor
                            {{-- <div class="col-md-4">
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
                            <div class="col-md-4">
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
                            </div> --}}
                          </div>
                          <hr>
                      </div>
                      @if($line == 6)
                        {{ csrf_field() }}
                        <div class="form-actions m-t-40">
                          <button type="submit" class="btn btn-success">
                            <i class="fa fa-check"></i> Save
                          </button>
                          {{ method_field('PUT') }}
                        </div>
                      @endif
                    </div>
                  </div>
                </div>
              @endfor
            </form>
          </div>
      </div>
  </div>
@endsection
