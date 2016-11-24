<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
<title>Elite Admin - is a responsive admin template</title>
<!-- Bootstrap Core CSS -->
<link href="{{ asset('css/sitecontrol.css') }}" rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
{{-- <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-19175540-9', 'auto');
  ga('send', 'pageview');

</script> --}}
</head>
<body>
<!-- Preloader -->
{{-- <div class="preloader">
  <div class="cssload-speeding-wheel"></div>
</div> --}}
<div id="wrapper">

  <nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header">
      <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse">
        <i class="ti-menu"></i>
      </a>
      <div class="top-left-part">
        <a class="logo" href="{{ route('st-home') }}">
          <b>
            <img src="{{ asset('images/component/sitecontrol/logo.png') }}" alt="home" class="light-logo" />
          </b>
          <span class="hidden-xs">
            <img src="{{ asset('images/component/sitecontrol/logo_text.png') }}" alt="home" class="light-logo" />
            {{-- <img src="{{ asset('images/component/sitecontrol/logo_width.png') }}" alt="home" class="light-logo" /> --}}
          </span>
        </a>
      </div>
      <ul class="nav navbar-top-links navbar-left hidden-xs">
        <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
        <li>
          <h2 class="page-title" style="color: #fff; font-size: 16px;">Hello Administrator System !!</h2>
        </li>
      </ul>
    </div>
  </nav>

    @include('common.menu')

  <div id="page-wrapper">
    @yield('content')
    <footer class="footer text-center"> 2016 &copy; all-we-design.com </footer>
  </div>
</div>
<!-- /#wrapper -->
<script src="{{ asset('js/all-sitecontrol.js') }}"></script>
</body>
</html>
