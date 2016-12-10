@extends('layout.sitecontrol')
@section('content')
  <div class="container-fluid">
    @include('common.sitecontrol.breadcrumb', [
      'page'                => 'Product Group List',
      'displayCreateButton' => true,
      'url'                 => route('sitecontrol.group.create')
    ])
    <div class="row">
      <div class="white-box">
        <div class="table-responsive">
          <table class="table product-overview" id="myTable">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Name</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @php $name = ['Boot 1', 'Boot 2', 'Boot 3', 'Boot 4', 'Boot 5', 'Boot 6']; @endphp
                @foreach($groups as $index => $group)
                  <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $group['pg_name'] }}</td>
                    <td>
                      <span class="label label-{{ config('website.product.status.color.' . $group['pg_status']) }} font-weight-100">
                        {{ config('website.product.status.text.' . $group['pg_status']) }}
                      </span>
                    </td>
                    <td>
                      <a href="{{ route('sitecontrol.group.edit', $group['id']) }}"
                         class="text-inverse p-r-10"
                         data-toggle="tooltip"
                         title="Edit">
                        <i class="ti-marker-alt"></i>
                      </a>
                      <a style="cursor:pointer;" onclick="$(this).find('form').submit();">
                        <i class="ti-trash"></i>
                        <form action="{{ route('sitecontrol.group.destroy', $group['id']) }}" method="POST" name="delete_item" style="display:none">
                           <input type="hidden" name="_method" value="delete">
                           <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </form>
                      </a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
          </table>
          <div class="text-right">
            <ul class="pagination pagination-sm m-b-0">
              <li class="disabled"> <a href="#"><i class="fa fa-angle-left"></i></a> </li>
              <li class="active"> <a href="#">1</a> </li>
              <li> <a href="#">2</a> </li>
              <li> <a href="#">3</a> </li>
              <li> <a href="#">4</a> </li>
              <li> <a href="#">5</a> </li>
              <li> <a href="#"><i class="fa fa-angle-right"></i></a> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
