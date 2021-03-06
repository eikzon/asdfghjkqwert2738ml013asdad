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
<div class="preloader">
  <div class="cssload-speeding-wheel"></div>
</div>
  <section id="wrapper" class="login-register">
    <div class="login-box">
      <div class="white-box">
        <form class="form-horizontal form-material"
              id="loginform"
              action="{{ route('sitecontrol.login.store') }}"
              method="post">
          <h3 class="box-title m-b-20">Administrator Sign In</h3>
          <div class="form-group ">
            <div class="col-xs-12">
              <input class="form-control" type="text" name="username" required="" placeholder="Username" value="admin">
            </div>
          </div>
          <div class="form-group">
            <div class="col-xs-12">
              <input class="form-control" type="password" name="password" required="" placeholder="Password" value="1234">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12">
              {{-- <div class="checkbox checkbox-primary pull-left p-t-0">
                <input id="checkbox-signup" type="checkbox">
                <label for="checkbox-signup"> Remember me </label>
              </div> --}}
              {{-- <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Forgot pwd?</a> </div> --}}
          </div>
          <div class="form-group text-center m-t-20">
            <div class="col-xs-12">
              <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
            </div>
          </div>
          {{ csrf_field() }}
          <div class="form-group m-b-0">
            <div class="col-sm-12 text-center">
              <p>2016 © breaker-shoes.com</p>
            </div>
          </div>
        </form>
        <form class="form-horizontal" id="recoverform" action="index.html">
          <div class="form-group ">
            <div class="col-xs-12">
              <h3>Recover Password</h3>
              <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
            </div>
          </div>
          <div class="form-group ">
            <div class="col-xs-12">
              <input class="form-control" type="text" required="" placeholder="Email">
            </div>
          </div>
          {{ csrf_field() }}
          <div class="form-group text-center m-t-20">
            <div class="col-xs-12">
              <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
<script src="{{ asset('js/all-sitecontrol.js') }}"></script>
@if(request()->getQueryString() == 'fail')
  <script>actionFailLogin();</script>
@endif
</body>
</html>
