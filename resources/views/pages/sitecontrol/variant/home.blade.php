@extends('layout.sitecontrol')
@section('content')
  <div class="container-fluid">
    @include('common.sitecontrol.breadcrumb', [
      'page'                => 'Variant Product',
      'displayCreateButton' => true,
      'url'                 => route('sitecontrol.variant.create')
    ])
    <div class="row">
      <div class="white-box">
        <div class="table-responsive">
          <table class="table product-overview" id="myTable">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Name</th>
                  <th>Color or Size</th>
                  <th>Type</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($variants as $index => $variant)
                  <tr class="id-{{ $variant['id'] }}">
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $variant['vr_name'] }}</td>
                    <td>
                      {{-- @if($variant['vr_type'] === 2)
                        <img width="60" src="{{ asset('images/products/img-' . $variant['vr_text'] . '.jpg') }}">
                      @else --}}
                        {{ $variant['vr_text'] }}
                      {{-- @endif --}}
                    </td>
                    <td>{{ ($variant['vr_type'] === 2) ? 'Color' : 'Size' }}</td>
                    <td>
                      <a href="{{ route('sitecontrol.variant.edit', $variant['id']) }}"
                         class="text-inverse p-r-10"
                         data-toggle="tooltip"
                         title="Edit">
                        <i class="ti-marker-alt"></i>
                      </a>
                      <a style="cursor:pointer;"
                         class="action-delete"
                         data-name="{{ $variant['vr_text'] }}"
                         data-id="{{ $variant['id'] }}"
                         data-url="{{ route('sitecontrol.variant.destroy', $variant['id']) }}"
                        >
                        <i class="ti-trash"></i>
                      </a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
          </table>
          <div class="text-right">
            {{ $variants->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
