@extends('layout.sitecontrol')
@section('content')
  <div class="container-fluid">
    @include('common.sitecontrol.breadcrumb', [
      'page'                => 'Product Group SKU',
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
                @foreach($groups as $index => $group)
                  <tr class="id-{{ $group['id'] }}">
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
                      <a style="cursor:pointer;"
                         class="action-delete"
                         data-name="{{ $group['pg_name'] }}"
                         data-id="{{ $group['id'] }}"
                         data-url="{{ route('sitecontrol.group.destroy', $group['id']) }}"
                        >
                        <i class="ti-trash"></i>
                      </a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
          </table>
          <div class="text-right">
            {{ $groups->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
