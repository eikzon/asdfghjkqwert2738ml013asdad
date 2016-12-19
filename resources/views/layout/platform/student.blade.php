<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0">
<title>รองเท้านักเรียน เบรกเกอร์ | Breaker 4x4 สั่งได้ดั่งใจ</title>
<meta name="Keywords" content="breaker,เบรกเกอร์,รองเท้าผ้าใบ,รองเท้านักเรียน" />
<meta name="Description" content="รองเท้าผ้าใบ BREAKER กระชับเท้า คล่องตัว บังคับทิศทางได้อย่างใจ" />
<meta name="author" content="www.watana-design.com"/>
<link rel="stylesheet" media="all" href="{{ asset('css/platform/style.css') }}"/>
<link rel="stylesheet" media="all" href="{{ asset('css/platform/more.css') }}"/>
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
<script src="{{ asset('js/all-platform.js') }}"></script>
<script type="text/javascript">
$(window).load(function(){
  $('.flexslider').flexslider({
    animation: "slide",
    start: function(slider){
      $('body').removeClass('loading');
    }
  });
});
$(document).ready(function(){
  $('a[href^="#"]').on('click',function (e) {
    e.preventDefault();
    var target = this.hash;
    var $target = $(target);
    $('html, body').stop().animate({ 'scrollTop': $target.offset().top }, 900, 'swing', function () {
      //window.location.hash = target;
    });
  });
})
jQuery(function () {
  jQuery('.showSingle').click(function () {
    var index = $(this).parent().index(),
    newTarget = jQuery('.detailproducts').eq(index);
    jQuery('.detailproducts,.detailproducts2,.detailproducts3').not(newTarget).slideUp('500')
    newTarget.delay('500').slideToggle('500')
  return false;
  });
  jQuery('.showSingle1').click(function () {
    var index = $(this).parent().index(),
    newTarget = jQuery('.detailproducts2').eq(index);
    jQuery('.detailproducts2,.detailproducts,.detailproducts3').not(newTarget).slideUp('500')
    newTarget.delay('500').slideToggle('500')
  return false;
  });
  jQuery('.showSingle2').click(function () {
    var index = $(this).parent().index(),
    newTarget = jQuery('.detailproducts3').eq(index);
    jQuery('.detailproducts3,.detailproducts,.detailproducts2').not(newTarget).slideUp('500')
    newTarget.delay('500').slideToggle('500')
  return false;
  });
});
</script>
<script language="JavaScript" type="text/JavaScript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
  var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
  if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
  d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}
function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
  if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>

<body>
<ul class="header">
  <div class="overlight"></div><!-- .overlight -->
  <a href="../" class="logo"><img src="{{ asset('images/platform/logo_breaker.png') }}" alt="Breaker 4x4 สั่งได้ดั่งใจ"/></a>
  <li><a href="#home">Home</a></li>
  <li><a href="#products">Products</a></li>
  <li><a href="../csr/" target="_blank">CSR</a></li>
  <li><a href="#event" target="_blank">Event</a></li>
  <li><a href="#vdo">Video</a></li>
  <li><a href="../about-us.php" target="_blank">About Us</a></li>
  <li><a href="../contact-us.php" target="_blank">Contact Us</a></li>
  <div class="social">
    <a href="https://www.facebook.com/breakerclub" target="_blank"><img src="{{ asset('images/platform/icon_facebook.png') }}" alt="Facebook"/></a>
    <a href="https://www.youtube.com/channel/UCBKL_3XcOGj0TmJYL2Iy98A/videos" target="_blank"><img src="{{ asset('images/platform/icon_youtube.png') }}" alt="Youtube"/></a>
    <a href="mailto:saleonlinescs@gamil.com"><img src="{{ asset('images/platform/icon_email.png') }}" alt="Email"/></a>
  </div><!-- .social -->
  <ul class="topnav">
    <li class="login"><a href="#">เข้าสู่ระบบ</a></li>
    <li class="register"><a href="#">ลงทะเบียน</a></li>
    <!--<li class="dropdown member"><a href="#">บัญชีของฉัน</a>
      <ul class="drop-nav">
        <li><a href="#">ข้อมูลส่วนตัว</a></li>
        <li><a href="#">ข้อมูลสถานที่จัดส่ง</a></li>
        <li><a href="#">ประวัติการสั่งซื้อ</a></li>
        <li><a href="#">สินค้าที่น่าสนใจ</a></li>
        <li><a href="#">ออกจากระบบ</a></li>
      </ul>
    </li>-->
    <li class="cart"><div id="dd" class="shopping-dropdown">
       <span>2</span>
       <ul class="dropdown shopping-list">
         <li><a href="#"><div class="product-img"><img src="../products/{{ asset('images/platform/BC-006_GN_4') }}.jpg"></div>
            <div class="product-desc">
              <div class="product-name">Breaker King Knit<br>BC006-GN / 39 / Multicolor<br>จำนวน: 1<span class="product-price">1,550 บาท</span></div>
            </div>
         </a></li>
         <li><a href="#"><div class="product-img"><img src="../products/{{ asset('images/platform/BC-006_GN_4') }}.jpg"></div>
            <div class="product-desc">
              <div class="product-name">Breaker King Knit<br>BC006-GN / 39 / Multicolor<br>จำนวน: 1<span class="product-price">1,550 บาท</span></div>
            </div>
         </a></li>
         <li>
          <div class="shopping-txt">ค่าจัดส่ง<br>ราคารวม</div>
          <div class="shopping-price">0.00 บาท<br>1,879 บาท</div>
         </li>
         <li>
         <a href="#" class="btn-process">ดูตะกร้าสินค้า</a>
         </li>
       </ul>
    </div></li>
  </ul>
  <div class="overlight"></div><!-- .overlight -->
  <div class="mobilemenu"></div><!-- .mobilemenu -->
  <ul class="menum">
    <li><a href="#home">Home</a></li>
    <li><a href="#products">Products</a></li>
    <li><a href="../csr/" target="_blank">CSR</a></li>
    <li><a href="../news/" target="_blank">Event</a></li>
    <li><a href="#vdo">Video</a></li>
    <li><a href="../about-us.php" target="_blank">About Us</a></li>
    <li><a href="../contact-us.php" target="_blank">Contact Us</a></li>
  </ul>
</ul>
<div class="container" id="home">
  <div class="wraper-banner">
    <div class="banner">
      <div class="flexslider">
        <ul class="slides">
          <li><img src="{{ asset('images/platform/banner_02.jpg') }}" alt="รองเท้า Breaker"></li>
        </ul>
      </div><!-- .flexslider -->
    </div><!-- .banner -->
  </div><!-- .wraper-banner -->
</div><!-- .container -->
<div class="superblack">
  <div class="wraper">
    <div class="picture"><img src="{{ asset('images/platform/picture_superblack.png') }}"/></div><!-- .picture -->
  </div><!-- .wraper -->
</div><!-- .superblack -->
<div class="shoescolor">
  <div class="wraper">
    <h2><img src="{{ asset('images/platform/h2_studentshoes.png') }}" alt="Student Shoes"/></h2>
    <div class="detail"><img src="{{ asset('images/platform/shoes_detail_4x4.png') }}"/></div><!-- .detail -->
    <div class="picture"><img src="{{ asset('images/platform/shoes_bk.png') }}" name="Image001" class="preload" id="Image001"/></div><!-- .picture -->
    <div class="select">
      <img src="{{ asset('images/platform/select_01.png') }}" name="Image2" class="preload" id="Image2" onClick="MM_swapImage('Image001','','{{ asset('images/platform/shoes_bk.png') }}',1)"/>
      <img src="{{ asset('images/platform/select_02.png') }}" name="Image2" class="preload" id="Image2" onClick="MM_swapImage('Image001','','{{ asset('images/platform/shoes_br.png') }}',1)"/>
      <img src="{{ asset('images/platform/select_03.png') }}" name="Image2" class="preload" id="Image2" onClick="MM_swapImage('Image001','','{{ asset('images/platform/shoes_wt.png') }}',1)"/>
    </div><!-- .select -->
  </div><!-- .wraper -->
</div><!-- .shoescolor -->

@yield('content');

</div><!-- .detailproducts2 -->
</div><!-- .wraper -->
</div><!-- .productshoes -->
<div class="vdo" id="vdo">
<h2>Breaker Video</h2>
<div class="wraper">
<a href="https://www.youtube.com/embed/LdQa7zsqWVY?wmode=opaque&controls=1&autoplay=1&loop=1&rel=0" class="popuper"><img src="{{ asset('images/platform/vdo10.jpg') }}"/></a>
<a href="https://www.youtube.com/embed/0psFXjbAYSQ?wmode=opaque&controls=1&autoplay=1&loop=1&rel=0" class="popuper"><img src="{{ asset('images/platform/vdo09.jpg') }}"/></a>
<a href="https://www.youtube.com/embed/QHeNZngcNXY?wmode=opaque&controls=1&autoplay=1&loop=1&rel=0" class="popuper"><img src="{{ asset('images/platform/vdo08.jpg') }}"/></a>
<a href="https://www.youtube.com/embed/uuUY_jvOL5w?wmode=opaque&controls=1&autoplay=1&loop=1&rel=0" class="popuper"><img src="{{ asset('images/platform/vdo04.jpg') }}"/></a>
<a href="https://www.youtube.com/embed/B02ZUHJXBWM?wmode=opaque&controls=1&autoplay=1&loop=1&rel=0" class="popuper"><img src="{{ asset('images/platform/vdo03.jpg') }}"/></a>
<a href="https://www.youtube.com/embed/zL47i8tBAjM?wmode=opaque&controls=1&autoplay=1&loop=1&rel=0" class="popuper"><img src="{{ asset('images/platform/vdo07.jpg') }}"/></a>
<a href="https://www.youtube.com/embed/2VCAKiq4cSM?wmode=opaque&controls=1&autoplay=1&loop=1&rel=0" class="popuper"><img src="{{ asset('images/platform/vdo06.jpg') }}"/></a>
<a href="https://www.youtube.com/embed/cuN_8XX-j6o?wmode=opaque&controls=1&autoplay=1&loop=1&rel=0" class="popuper"><img src="{{ asset('images/platform/vdo05.jpg') }}"/></a>
<a href="https://www.youtube.com/embed/AJo36CqSdcM?wmode=opaque&controls=1&autoplay=1&loop=1&rel=0" class="popuper"><img src="{{ asset('images/platform/vdo02.jpg') }}"/></a>
<a href="https://www.youtube.com/embed/AQtZnWiQiJg?wmode=opaque&controls=1&autoplay=1&loop=1&rel=0" class="popuper"><img src="{{ asset('images/platform/vdo01.jpg') }}"/></a>
</div><!-- .wraper -->
</div><!-- .vdo -->
<div class="event" id="event">
<h2>Event</h2>
<a href="news_2015-09-18.php" class="popuper"><img src="{{ asset('images/platform/n_2015-09') }}-18_cover.jpg"/></a>
<div class="wraper">
</div><!-- .wraper -->
</div><!-- .vdo -->
<div class="footer">
Copyright &copy; 2015 S.C.S. Group of Company All Rights Reserved.
</div><!-- .footer -->
</body>
</html>
