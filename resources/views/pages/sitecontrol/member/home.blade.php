@extends('layout.sitecontrol')
@section('content')
  <div class="container-fluid">
    @include('common.sitecontrol.breadcrumb', ['page' => 'Member List'])

    <div class="row">
      <div class="white-box">
        <div class="table-responsive">
          <table class="table product-overview" id="myTable">
            <thead>
              <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Update Date</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @if(!empty($members))
                @foreach($members as $index => $member)
                  @php
                    if($member->status == 1)
                    {
                      $status       = 'Active';
                      $statusCode   = 3;
                      $label_status = 'label-success';
                    }
                    elseif($member->status == 0)
                    {
                      $status       = 'Inactive';
                      $statusCode   = 1;
                      $label_status = 'label-warning';
                    }
                    else
                    {
                      $status       = 'Block';
                      $statusCode   = 1;
                      $label_status = 'label-danger';
                    }
                  @endphp
                  <tr>
                    <td>{{ (Request::get('page') * config('admin.perPage')) + ($index + 1) }}</td>
                    <td>{{ $member->first_name . ' ' . $member->last_name }}</td>
                    <td>{{ $member->email }}</td>
                    <td>{{ date('d-m-Y h:i:s', strtotime($member->updated_at)) }}</td>
                    <td>
                      <a href="#" class="js-change-status" data-url="{{ action('SiteControl\MemberController@update', ['id' => $member->id]) }}" data-status="{{ $statusCode }}">
                        <span class="label {{ $label_status }} font-weight-100 js-label-status">
                          {{ $status }}
                        </span>
                      </a>
                    </td>
                    <td>
                      <a href="{{ action('SiteControl\MemberController@detail', ['id' => $member->id]) }}" class="text-inverse p-r-10" data-toggle="tooltip" title="View">
                        <i class="ti-eye"></i>
                      </a>
                      <a href="javascript:void(0)" class="text-inverse js-delete" data-url="{{ action('SiteControl\MemberController@destroy', ['id' => $member->id]) }}" title="Delete" data-toggle="tooltip">
                        <i class="ti-trash"></i>
                      </a>
                    </td>
                  </tr>
                @endforeach
              @endif
            </tbody>
          </table>
          <div class="text-right">
            {{ $members->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
