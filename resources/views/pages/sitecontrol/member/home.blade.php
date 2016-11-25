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
                    <a href="{{ action('SiteControl\MemberController@show', ['id' => 1]) }}" class="text-inverse p-r-10" data-toggle="tooltip" title="View">
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
