@extends('layout.sitecontrol')
@section('content')
  <div class="container-fluid">
    @include('common.sitecontrol.breadcrumb', [
      'page'                => 'Product Category',
      'displayCreateButton' => false,
      'url'                 => route('sitecontrol.category.create')
    ])
    <div class="row">
      <div class="white-box">
        <div class="table-responsive">
          <table class="table product-overview" id="myTable">
              <thead>
                <tr>
                  <th>No.</th>
                  <th width="30%">Name</th>
                  <th width="25%">Image</th>
                  <th width="20%">Status</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($categories as $index => $category)
                  <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $category['ct_name'] }}</td>
                    <td>
                      <img src="{{ asset('images/' . $category['ct_image']) }}" width="100">
                    </td>
                    <td>
                      <span class="label label-{{ config('website.product.status.color.' . $category['ct_status']) }} font-weight-100">
                        {{ config('website.product.status.text.' . $category['ct_status']) }}
                      </span>
                    </td>
                    <td>
                      <a href="{{ route('sitecontrol.category.edit', $category['id']) }}"
                         class="text-inverse p-r-10"
                         data-toggle="tooltip"
                         title="Edit">
                        <i class="ti-marker-alt"></i>
                      </a>
                     {{--  <a style="cursor:pointer;" onclick="$(this).find('form').submit();">
                        <i class="ti-trash"></i>
                        <form action="{{ route('sitecontrol.category.destroy', $category['id']) }}" method="POST" name="delete_item" style="display:none">
                           <input type="hidden" name="_method" value="delete">
                           <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </form>
                      </a> --}}
                    </td>
                  </tr>
                @endforeach
              </tbody>
          </table>
          {{-- <div class="text-right">
            {{ $categories->links() }}
          </div> --}}
        </div>
      </div>
    </div>
  </div>
@endsection
