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
                @for($i = 1; $i <= 5; $i++)
                  <tr>
                    <td>#{{ rand(1,9999) }}</td>
                    <td>{{ $name[$i] }}</td>
                    <td> <img width="60" src="{{ asset('images/products/img-' . $i . '.jpg') }}"> </td>
                    <td>{{ number_format(rand(1,1200)) }}</td>
                    <td>{{ rand(1,100) }}</td>
                    <td>10-7-2016</td>
                    <td> <span class="label label-success font-weight-100">Active</span> </td>
                    <td>
                      <a href="{{ action('SiteControl\ProductController@edit', ['id' => 1]) }}" class="text-inverse p-r-10" data-toggle="tooltip" title="Edit">
                        <i class="ti-marker-alt"></i>
                      </a>
                      <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip">
                        <i class="ti-trash"></i>
                      </a>
                    </td>
                  </tr>
                @endfor
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
