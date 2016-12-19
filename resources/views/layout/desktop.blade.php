<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0">
<title>@yield('title') | Breaker เบรกเกอร์ : สั่งได้ดั่งใจ</title>
<meta name="Keywords" content="breaker,เบรกเกอร์,รองเท้าผ้าใบ,รองเท้านักเรียน,รองเท้าฟุตบอล,รองเท้าฟุตซอล,รองเท้าสตั๊ด,รองเท้ากีฬา,shoes,futsal,soccer,sport" />
<meta name="Description" content="Breaker เบรกเกอร์ รองเท้าผ้าใบ รองเท้าฟุตบอล รองเท้าฟุตซอล รองเท้าสตั๊ด รองเท้ากีฬา" />
<link rel="stylesheet" media="all" href="{{ asset('css/desktop.css') }}"/>
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script type="text/javascript">
navigator.version = (function(){
var ua= navigator.userAgent,
N= navigator.appName, tem,
M= ua.match(/(opera|chrome|safari|firefox|msie|trident)\/?\s*([\d\.]+)/i) || [];
M= M[2]? [M[1], M[2]]:[N, navigator.appVersion, '-?'];
if(M && (tem= ua.match(/version\/([\.\d]+)/i))!= null) M[2]= tem[1];
return M.join(' ');
})();
</script>
<script type="text/javascript">
$(window).load(function(){
$(document).ready(function() {
$('.fancybox').fancybox();
var browser = navigator.version.split(' ')[0];
var version = navigator.version.split(' ')[1];
if(browser == 'MSIE' && parseFloat(version) < 9.0) {
alert('กรุณาใช้ IE เวอร์ชั่นที่ใหม่กว่า หรือเปลี่ยนเป็น Firefox และ Chrome ในการเข้าชม | You are using not supported browser, please upgrade the browser for the best experience.');
}
});
});
</script>
<![endif]-->
</head>

<body>
@yield('header')
<div class="container">
  @yield('content')
</div>

<div class="footersocial">
  <a href="https://www.facebook.com/Breakerfutsal" target="_blank">
    <img src="{{ asset('images/icon_facebook.png') }}" alt="facebook"/>
  </a>
  <a href="https://www.youtube.com/channel/UCBKL_3XcOGj0TmJYL2Iy98A/videos" target="_blank">
    <img src="{{ asset('images/icon_youtube.png') }}" alt="youtube"/>
  </a>
  <a href="mailto:saleonlinescs@gamil.com">
    <img src="{{ asset('images/icon_email.png') }}" alt="email"/>
  </a>
</div><!-- .footersocial -->
<div class="footer">Copyright &copy; 2015 S.C.S. Group of Company All Rights Reserved.</div><!-- .footer -->
<script src="{{ asset('js/all-desktop.js') }}"></script>
<script type="text/javascript">stLight.options({publisher: "0df680db-d29e-44cd-b062-11268d671dd6", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
@yield('script_footer')
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-6035926-5', 'auto');
  ga('send', 'pageview');
</script>
</body>
</html>
