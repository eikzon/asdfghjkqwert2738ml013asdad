@extends('layout.sitecontrol')
@section('content')
  <div class="container-fluid">
      @include('common.sitecontrol.breadcrumb', ['page' => 'Product Group List'])
      <!-- /.row -->
      <div class="row">
          <div class="col-md-12">
              <div class="panel panel-default">
                  <div class="panel-heading"> Create/Edit Product Group</div>
                  <div class="panel-wrapper collapse in" aria-expanded="true">
                      <div class="panel-body">
                          <form action="{{ route('sitecontrol.group.' . $state, $group['id']) }}" method="post">
                              <div class="form-body">
                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label class="control-label">Group Name</label>
                                        <input type="text" id="name" name="name" class="form-control"
                                               placeholder="Group Name"
                                               value="{{ $group['pg_name'] or '' }}">
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label class="control-label">Group Type</label>
                                        <div class="radio-list">
                                          <label class="radio-inline">
                                            <div class="radio radio-info">
                                              <input type="radio" name="status" id="status-non" value="0"
                                              @if($group['pg_status'] != 2) checked @endif>
                                              <label for="status-non">Non Active</label>
                                            </div>
                                          </label>
                                          <label class="radio-inline p-0">
                                            <div class="radio radio-info">
                                              <input type="radio" name="status" id="status-active" value="1"
                                              @if($group['pg_status'] === 2) checked @endif>
                                              <label for="status-display">Active</label>
                                            </div>
                                          </label>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <hr>
                                </div>
                                {{ csrf_field() }}
                                @if(!empty($group['id'])) {{ method_field('PUT') }} @endif
                              <input type="hidden" name="id" value="{{ $group['id'] or '' }}">
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
