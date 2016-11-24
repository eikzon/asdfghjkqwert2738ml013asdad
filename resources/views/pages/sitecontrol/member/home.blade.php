@extends('layout.sitecontrol')
@section('content')
  <div class="container-fluid">
    @include('common.sitecontrol.breadcrumb', ['page' => 'Order List'])

    <div class="row">
      <div class="white-box">
        <div class="table-responsive">
          <table class="table product-overview" id="myTable">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Date</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @php 
                  $name = ['Steave Jobs', 'Bill Gates', 'Timothy Donald Cook', 'Jonathan Ive', 'Susanne Hartman'];
                @endphp
                @for($i = 0; $i <= 4; $i++)
                  <tr>
                    <td>{{ $i + 1 }}</td>
                    <td>{{ $name[$i] }}</td>
                    <td>{{ str_replace(' ', '', $name[$i]) . '@hotmail.com' }}</td>
                    <td>10-7-2016</td>
                    <td> <span class="label label-success font-weight-100">Active</span> </td>
                    <td>
                      <a href="{{ action('SiteControl\OrderController@show', ['id' => 1]) }}" class="text-inverse p-r-10" data-toggle="tooltip" title="Order History">
                        <i class="ti-eye"></i>
                      </a>
                      <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip">
                        <i class="ti-trash"></i>
                      </a>
                    </td>
                  </tr>
                @endfor
              </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
