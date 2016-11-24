<div class="row bg-title">
  <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
    <h4 class="page-title">{{ $page }}</h4>
  </div>
  <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
    @if(!empty($displayCreateButton))
      <a href="{{ @$url }}" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">
        Create
      </a>
    @endif
    @if(!empty($displayTime))
      <ol class="breadcrumb">
        <li>Last Login : <span class="active">{{ date('d/m/Y H:i') }}</span></li>
      </ol>
    @else
      <ol class="breadcrumb">
        <li><a href="{{ route('st-home') }}">Dashboard</a></li>
        <li class="active">{{ $page }}</li>
      </ol>
    @endif
  </div>
</div>
