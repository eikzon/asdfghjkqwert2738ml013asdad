@extends('layout.sitecontrol')
@section('content')
  <div class="container-fluid">
    @include('common.sitecontrol.breadcrumb', [
      'page'                => 'Product List',
      'displayCreateButton' => true,
      'url'                 => action('SiteControl\ProductController@create')
    ])
    <div class="row">
      <div class="white-box">
        <div class="table-responsive">
          <table class="table product-overview" id="myTable">
              <thead>
                <tr>
                  <th>Code</th>
                  <th>Name</th>
                  <th>Image</th>
                  <th>Price</th>
                  <th>Stock</th>
                  <th>Date</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @if($products->total())
                  @foreach($products as $product)
                    <tr class="id-{{ $product['id'] }}">
                      <td>{{ $product['pd_code'] }}</td>
                      <td>{{ $product['pd_name'] }}</td>
                      <td>
                        @if(!empty($product['images'][0]))
                          <img width="100" src="{{ asset('images/products/' . $product['images'][0]['image']) }}">
                        @endif
                      </td>
                      <td>{{ number_format($product['pd_price']) }}</td>
                      <td>{{ number_format($product['pd_stock']) }}</td>
                      <td>{{ date('d/m/Y H:i', strtotime($product['created_at'])) }}</td>
                      <td>
                        <span class="label label-{{ config('website.product.status.color.' . $product['pd_status']) }} font-weight-100">
                          {{ config('website.product.status.text.' . $product['pd_status']) }}
                        </span>
                      </td>
                      <td>
                        <a href="{{ action('SiteControl\ProductController@edit', ['id' => $product['id']]) }}"
                           class="text-inverse p-r-10"
                           data-toggle="tooltip"
                           title="Edit">
                          <i class="ti-marker-alt"></i>
                        </a>
                        <a style="cursor:pointer;"
                           class="action-delete"
                           data-name="{{ $product['pd_name'] }}"
                           data-id="{{ $product['id'] }}"
                           data-url="{{ route('sitecontrol.product.destroy', $product['id']) }}"
                          >
                          <i class="ti-trash"></i>
                        </a>
                      </td>
                    </tr>
                  @endforeach
                @else
                  <tr>
                    <td colspan="8" align="center">ไม่มีรายการสินค้า</td>
                  </tr>
                @endif
              </tbody>
          </table>
          <div class="text-right">
            {{ $products->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
