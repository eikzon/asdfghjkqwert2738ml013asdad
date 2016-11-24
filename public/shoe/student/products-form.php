<?
// Include Absolute Path
include "../inc/inc_absolutepath.php";
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<title>สังซื้อสินค้า | Breaker เบรกเกอร์ : สั่งได้ดั่งใจ</title>
<link rel="stylesheet" type="text/css" href="../css/animate.css" />
<link rel="stylesheet" href="../css/style.css" type="text/css"/>
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
<script src="../js/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body style="background:#f4f4f4;">
<?php
if ($_POST['sendmail'] == "OK") {
	 $name = $_POST['full_name'] ;
      $products = $_POST['products'] ;
	  $color = $_POST['color'] ;
	  $size = $_POST['size'] ;
	  $telephone = $_POST['full_tel'] ;
	  $email = $_POST['full_email'] ;
	  $address = $_POST['address'] ;	  
	  $message = "
	  
Breaker Post form Website.
รองเท้านักเรียน  : Breaker $products
ขนาดรองเท้า : $size
สีรองเท้า : $color

ชื่อ-สกุล : $name
เบอร์โทรศัพท์ : $telephone
อีเมล์ : $email
ที่อยู่ : $address ";

     if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*$", $email)) 
     { 
          print "<script>alert('Please input your email');history.back();</script>";
          exit();
     }
	 
if ($email) {
 $ret1 = mail( $email, //ª×èÍÅÙ¡¤éÒ
	"Thank you for contact Breaker : $sname", //ª×èÍËéÇ¢éÍÍÕàÁÅì
    //"From: watana-design no reply \r\n". 
	//" \r\n".
	"Contact from: Breaker Shoes, \r\n".
	//" \r\n".
	"-----------------------------------------\r\n".
	"Your Message: $message \r\n".
	" \r\n".
	"Thank you for contacting Breaker Shoes! \r\n".
	"เราได้รับรายละเอียดการสั่งซื้อจากคุณแล้ว จะติดต่อกลับในไม่ช้า  \r\n".
	"www.Breaker-shoes.com \r\n"
		, 
	"From: info@scs-shoes.com" //ª×èÍàÁÅì¢Í§¤Ø³
	);
}

     mail ("info@scs-shoes.com,saleonlinescs@gamil.com", "ติดต่อสั่งซื้อรองเท้า : $name", $message, "From: $email") ;
     print "<script>alert('ขอบคุณที่ติดต่อ www.breaker-shoes.com! ทางเราจะติดต่อกลับโดยเร็วที่สุด'); window.close();</script>";
}
?>
<form method="post" action="<?=$PHP_SELF?>" onsubmit="return checkContact();">
<div class="purchase">
<div class="iTable">
    <ul class="iRow">
    <li class="iTd"><h2>สั่งซื้อสินค้า Breaker</h2></li><li class="iTd"></li>
    </ul>
    <ul class="iRow">
    <li class="iTd left"><h3>รองเท้า Breaker</h3></li>
    <li class="iTd">
    <select name="products" id="products" class="inputform">
            <option value="-1">== Select ==</option>
            <option value="4X4"<?php echo ($_GET['products'] == b4x4)? 'selected' : '' ?>>Breaker 4X4</option>
            <option value="BK4"<?php echo ($_GET['products'] == bk4)? 'selected' : '' ?>>Breaker BK4</option>
            <option value="SB1"<?php echo ($_GET['products'] == sb1)? 'selected' : '' ?>>Breaker SB1</option>
            <option value="SW1"<?php echo ($_GET['products'] == sw1)? 'selected' : '' ?>>Breaker SW1</option>
</select>
    </li>
    </ul>
    <ul class="iRow">
    <li class="iTd left"><h3>ขนาดรองเท้า</h3></li>
    <li class="iTd"><input type="text" name="size"  id="size" class="inputform" placeholder="ขนาดรองเท้า"/></li>
    </ul>
    <ul class="iRow">
    <li class="iTd left"><h3>สีรองเท้า</h3></li>
    <li class="iTd">
    <select name="color" id="color" class="inputform">
         <option value="-1">== Select ==</option>
         <option value="สีดำ"<?php echo ($_GET['products'] == blabk)? 'selected' : '' ?>>สีดำ</option>
         <option value="สีน้ำตาล"<?php echo ($_GET['products'] == brown)? 'selected' : '' ?>>สีน้ำตาล</option>
         <option value="สีขาว"<?php echo ($_GET['products'] == white)? 'selected' : '' ?>>สีขาว</option>
    </select>
    </li>
    </ul>
    <ul class="iRow">
    <li class="iTd left"><h2>รายละเอียดผู้สั่งซื้อ</h2></li><li class="iTd"></li>
    </ul>
    <ul class="iRow">
    <li class="iTd left"><h3>ชื่อ-สกุล</h3></li>
    <li class="iTd"><input type="text" name="full_name"  id="full_name" class="inputform" placeholder="ชื่อ-สกุล"/></li>
    </ul>
    <ul class="iRow">
    <li class="iTd left"><h3>ที่อยู่</h3></li>
    <li class="iTd"><textarea name="address" rows="9"  id="address" class="inputform" placeholder="ที่อยู่"></textarea></li>
    </ul>
    <ul class="iRow">
    <li class="iTd left"><h3>อีเมล์</h3></li>
    <li class="iTd"><input type="text" name="full_email" id="full_email" class="inputform" placeholder="อีเมล์"/></li>
    </ul>
    <ul class="iRow">
    <li class="iTd left"><h3>เบอร์โทรศัพท์</h3></li>
    <li class="iTd"><input type="text" name="full_tel" id="full_tel" class="inputform" placeholder="เบอร์โทรศัพท์"/></li>
    </ul>
    <ul class="iRow">
    <li class="iTd left"></li>
    <li class="iTd"><input type="submit" name="Submit" id="Submit" class="uibutton" value="Send" title="ติดต่อสั่งซื้อ" />
      <input type="hidden" name="sendmail" value="OK" /></li>
    </ul>
    </div><!-- .iTable -->
</div><!-- .purchase -->
</form>
<script type="text/javascript">
function isEmail(string) {
	if (string.search(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/) != -1){return true;}else{return false;}
}
function checkContact(){
	if($("#size").val().length<1){alert("กรุณาใส่ขนาดของรองเท้า");$("#size").focus();return false;}
	else if($("#full_name").val().length<2){alert("กรุณาใส่ชื่อ-สกุลของคุณ");$("#full_name").focus();return false;}
	else if($("#address").val().length<5){alert("กรุณาใสที่อยู่ของคุณ");$("#address").focus();return false;}
	else if($("#full_email").val().length<4){alert("กรุณาใส่อีเมล์ของคุณ");$("#full_email").focus();return false;}
	else if(!isEmail($("#full_email").val())){alert("อีเมล์ของคุณมีข้อผิดพลาด");$("#full_email").focus();return false;}
	else if($("#full_tel").val().length<5){alert("กรุณาใส่เบอร์โทรศัพท์ของคุณ");$("#full_tel").focus();return false;}
	else {return true;}
}
</script>
</body>
</html>
