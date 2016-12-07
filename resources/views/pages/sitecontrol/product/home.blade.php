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
                @php $name = ['Boot 1', 'Boot 2', 'Boot 3', 'Boot 4', 'Boot 5', 'Boot 6']; @endphp
                @foreach($products as $index => $product)
                  <tr>
                    <td>{{ $product['pd_code'] }}</td>
                    <td>{{ $product['pd_name'] }}</td>
                    <td>
                      @if(!empty($product['images']))
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
                      <a style="cursor:pointer;" onclick="$(this).find('form').submit();">
                        <i class="ti-trash"></i>
                        <form action="{{ action('SiteControl\ProductController@destroy', $product['id']) }}" method="POST" name="delete_item" style="display:none">
                           <input type="hidden" name="_method" value="delete">
                           <input type="hidden" name="_token" value="{{csrf_token()}}">
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
